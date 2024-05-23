<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookmarkController extends Controller
{
    public function index() {
        return view('bookmark', [
            'title' => 'Bookmark'
        ]);
    }
}
