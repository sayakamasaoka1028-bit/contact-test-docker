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
        // ▼ 氏名検索（強化版）
        if ($request->filled('keyword')) {
            $keyword = $request->keyword;

            // 全角スペースを半角に
            $keyword = str_replace('　', ' ', $keyword);

            // スペースで区切る（山田 太郎 → ["山田","太郎"]）
            $parts = explode(' ', $keyword);

            $query->where(function ($q) use ($parts, $keyword) {

                // 姓・名部分一致（1文字でもOK）
                foreach ($parts as $part) {
                    if ($part === '') continue;
                    $q->orWhere('last_name', 'like', "%{$part}%")
                      ->orWhere('first_name', 'like', "%{$part}%");
                }

                // フルネーム（スペース無し）でも検索
                $q->orWhereRaw("CONCAT(last_name, first_name) LIKE ?", ["%{$keyword}%"]);
            });

        }

        // 性別検索
        if ($request->filled('gender')) {
            $query->where('gender', $request->gender);
        }

        // カテゴリ検索
        if ($request->filled('category_id')) {
            $query->where('category_id', $request->category_id);
        }

        // 期間検索
        if ($request->filled('from') && $request->filled('to')) {
            $query->whereBetween('created_at', [$request->from, $request->to]);
        }

        // データ取得
        $contacts = $query->orderBy('created_at', 'desc')->paginate(10);

        // カテゴリ一覧
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
