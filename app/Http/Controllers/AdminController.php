<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $query = Contact::with('category');

        // ▼ 氏名検索（AND検索対応版）
        if ($request->filled('keyword')) {
            $keyword = str_replace('　', ' ', $request->keyword); // 全角→半角スペースへ変換
            $parts = array_filter(explode(' ', $keyword));        // ["山口", "たつや"]

            $query->where(function ($q) use ($parts) {

                if (count($parts) == 2) {
                    // 「姓」＋「名」の完全2単語検索（理想形）
                    $q->where('last_name', 'like', "%{$parts[0]}%")
                      ->where('first_name', 'like', "%{$parts[1]}%");
                } else {
                    // 1単語だけの場合は部分一致検索
                    $q->where('last_name', 'like', "%{$parts[0]}%")
                      ->orWhere('first_name', 'like', "%{$parts[0]}%");
                }
            });
        }

        // ▼ 性別検索
        if ($request->filled('gender')) {
            $query->where('gender', $request->gender);
        }

        // ▼ カテゴリ検索
        if ($request->filled('category_id')) {
            $query->where('category_id', $request->category_id);
        }

        // ▼ 期間検索（開始日だけ・終了日だけでも検索OK）
        if ($request->filled('from') && $request->filled('to')) {
        // 開始日 ＆ 終了日の両方
        $query->whereBetween('created_at', [$request->from, $request->to]);

        } elseif ($request->filled('from')) {
        // 開始日だけ指定
        $query->where('created_at', '>=', $request->from);

        } elseif ($request->filled('to')) {
        // 終了日だけ指定
        $query->where('created_at', '<=', $request->to);
        }

        // ▼ 結果取得（最新順）
        $contacts = $query->orderBy('created_at', 'desc')->paginate(10);

        // ▼ カテゴリ取得
        $categories = Category::all();

        return view('admin.index', compact('contacts', 'categories'));
    }

    // ▼ 詳細画面
    public function show($id)
    {
        $contact = Contact::with('category')->findOrFail($id);
        return view('admin.show', compact('contact'));
    }

    // ▼ 削除処理
    public function destroy($id)
    {
        Contact::findOrFail($id)->delete();
        return redirect()->route('admin.index')->with('message', '削除しました');
    }
}
