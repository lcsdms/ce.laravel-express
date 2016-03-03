<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Produto;

class BlogController extends Controller
{
    public function index(){
        return view('index');
    }

    public function about(){
        return view('about');
    }

    public function phpinfo(){
        phpinfo();
    }
}
