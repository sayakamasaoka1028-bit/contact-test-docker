<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;

class ContactController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        //dd($categories); // ← ここで内容を確認
        return view('contact.index', compact('categories'));
    }
public function confirm(Request $request)
{
    $validated = $request->validate([
    'last_name'   => 'required|max:8',       // フォームの姓
    'first_name'  => 'required|max:8',       // フォームの名
    'gender'      => 'required|in:1,2,3',
    'email'       => 'required|email',
    'tel'         => 'required|digits_between:10,11',
    'address'     => 'required',
    'building'    => 'nullable',             // 任意
    'category_id' => 'required|exists:categories,id',  // ここ重要
    'detail'      => 'required|max:120',

    ]);
    $categories = Category::all(); // ← ここでカテゴリを取得

    return view('contact.confirm', [
        'data' => $validated,
        'categories' => $categories // ← ビューに渡す
  ]);
}
public function store(Request $request)
{
    $validated = $request->validate([
        'last_name'   => 'required|max:8',
        'first_name'  => 'required|max:8',
        'gender'      => 'required|in:1,2,3',
        'email'       => 'required|email',
        'tel'         => 'required|digits_between:10,11',
        'address'     => 'required',
        'building'    => 'nullable',
        'category_id' => 'required|exists:categories,id',
        'detail'      => 'required|max:120',
    ]);

    Contact::create($validated);

    return redirect()->route('contact.thanks');
}


    public function thanks()
    {
        return view('contact.thanks');
    }
}
