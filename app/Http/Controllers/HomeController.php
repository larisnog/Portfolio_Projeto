<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [];
        return view('site.index', $data);
    }

    public function portfolio()
    {
        $data = [];
        return view('site.portfolio', $data);
    }

    public function contato()
    {
        $data = [];
        return view('site.contato', $data);
    }
}
