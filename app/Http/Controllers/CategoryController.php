<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;

class CategoryController extends Controller
{
    public function index()
    {

        $categories = Category::all();
        if (!($categories->count() > 1)) {
            $msg = Lang::get('alert.warning');
            return redirect('/')->with('warning', $msg);
        }
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'en_name' => 'required|string|regex:/^[A-Za-z]+(\s[A-Za-z]+)*$/',
            'ar_name' => 'required|string|regex:/^[\p{Arabic} ]+$/u',
            'en_content' => 'required|string',
            'ar_content' => 'required|string',
            'en_title' => 'required|string|regex:/^[A-Za-z]+(\s[A-Za-z]+)*$/',
            'ar_title' => 'required|string|regex:/^[\p{Arabic} ]+$/u',

        ]);
        $category_data = [
            'name' => $request->name,
            'en' => [
                'name' => $request->input('en_name'),
                'title'       => $request->input('en_title'),
                'content' => $request->input('en_content')
            ],
            'ar' => [
                'name' => $request->input('ar_name'),
                'title'       => $request->input('ar_title'),
                'content' => $request->input('ar_content')
            ],
        ];
        // dd($request);
        $category = Category::create($category_data);
        $msg = Lang::get('alert.status.created');
        return redirect()->route('categories.index')->with('status', $msg);
    }
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'en_name' => 'string|regex:/^[A-Za-z]+(\s[A-Za-z]+)*$/',
            'ar_name' => 'string|regex:/^[\p{Arabic} ]+$/u',
            'en_content' => 'string',
            'ar_content' => 'string',
            'en_title' => 'string|regex:/^[A-Za-z]+(\s[A-Za-z]+)*$/',
            'ar_title' => 'string|regex:/^[\p{Arabic} ]+$/u',
        ]);
        $category_data = [
            'name' => $request->name,
            'en' => [
                'name' => $request->input('en_name'),
                'title'       => $request->input('en_title'),
                'content' => $request->input('en_content')
            ],
            'ar' => [
                'name' => $request->input('ar_name'),
                'title'       => $request->input('ar_title'),
                'content' => $request->input('ar_content')
            ],
        ];
        $category->update($category_data);
        $msg = Lang::get('alert.status.updated',);
        return redirect()->route('categories.index')->with('status', $msg);
    }

    public function destroy(Category $category)
    {
        $category->delete();
        $msg = Lang::get('alert.status.deleted');
        return redirect()->route('categories.index')->with('status', $msg);
    }
}
