<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    //
    public function index() {
        return view('pages.index');
    }
    public function issue() {
        return view('pages.issuebook');
    }
    public function return() {
        return view('pages.returnbook');
    }
}
