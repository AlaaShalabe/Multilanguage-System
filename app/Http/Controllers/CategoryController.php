<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        if ($categories) {
            return view('categories.index', compact('categories'));
        }
        return redirect('/')->with('wirning', 'No Category Yet!, Plece click her to add');
    }

    public function create()
    {
        return view('categories.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'en_content' => 'required|string',
            'ar_content' => 'required|string',
            'en_title' => 'required|string',
            'ar_title' => 'required|string',

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
        $category = Category::create($category_data);

        return redirect()->route('categories.index')->with('status', 'Category successfully created!');
    }
}
