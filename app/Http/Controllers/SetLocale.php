<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SetLocale extends Controller
{
    // public function setLocale($locale)
    // {
    //     if (!in_array($locale, ['en', 'ar'])) {
    //         return redirect()->back()->with('error', 'this lang is not supported');
    //     }

    //     session()->put('locale', $locale);

    //     return view('categories.index', ['locale' => $locale]);
    // }
}
