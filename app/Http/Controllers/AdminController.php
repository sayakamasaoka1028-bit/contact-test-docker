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

        // 氏名検索
        if ($request->filled('keyword')) {
            $keyword = $request->keyword;
            $query->where(function($q) use ($keyword) {
                $q->where('last_name', 'like', "%$keyword%")
                  ->orWhere('first_name', 'like', "%$keyword%");
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
