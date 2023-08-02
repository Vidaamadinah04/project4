<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LihatGudangController extends Controller
{
    public function index()
    {
        return view('gudang.index');
    }

    public function gudanga(){
        return view('gudang.gudanga');
    }

    public function gudangb(){
        return view('gudang.gudangb');
    }

    public function gudangc(){
        return view('gudang.gudangc');
    }

    public function gudangd(){
        return view('gudang.gudangd');
    }
}
