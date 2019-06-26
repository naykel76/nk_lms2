<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller {

    public function index() {
        $title = "NAYKEL Laravel JTB";
        return view('pages.index', compact('title'));
    }
}
