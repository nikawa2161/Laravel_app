<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//モデルファイルのテストフォルダーを参照
use App\Models\Test;

class TestController extends Controller
{
    //
    public function index() 
    {
        $values = Test::all();
        return view('tests.test', compact('values'));
    }
}
