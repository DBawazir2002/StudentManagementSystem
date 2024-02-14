<?php

namespace App\Http\Controllers;

use App\Models\PublicNotice;

class HomeController extends Controller
{
    public function index() {
        $publicNotices = PublicNotice::get();
        return view('index',compact('publicNotices'));
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }

    public function publicNotice(PublicNotice $publicNotice) {
        return view('publicNotice', compact('publicNotice'));
    }

}
