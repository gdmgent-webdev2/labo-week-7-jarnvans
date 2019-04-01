<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    //
    public function getIndex(){
        $pageData = Page::where('id', 1)->first();

        return view('pages.home')->with(compact('pageData'));
    }
    
    public function logOut() {
        Auth::logout();
        return redirect()->route('pages.home');
    }
}
