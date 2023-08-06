<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class SetLocale extends Controller
{
    public function Locale($locale)
    {
        if (!in_array($locale, ['en', 'ar'])) {
            return redirect()->back()->with('error', 'this lang is not supported');
        }

        session()->put('locale', $locale);
        $categories = Category::all();
        return redirect()->back()->with(['locale' => $locale, 'categories' => $categories]);
    }
}
