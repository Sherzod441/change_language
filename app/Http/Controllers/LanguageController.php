<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{

    public function index() {
        // dd(session('lang'));
        return view('lang');
    }

    public function language(Request $request) {
        $lang = $request->lang;
        $request->session()->put('lang', $lang);

        return redirect()->back();
    }
}
