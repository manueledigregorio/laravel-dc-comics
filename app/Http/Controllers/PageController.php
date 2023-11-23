<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Comic;
use Illuminate\Contracts\View\View;
use PhpParser\Node\Stmt\Return_;

class PageController extends Controller
{
    public function index(){
        return view('home');
    }
}
