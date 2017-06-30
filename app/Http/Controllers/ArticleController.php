<?php

namespace App\Http\Controllers;

use App\category;
use Illuminate\Http\Request;

use App\Http\Requests;

class ArticleController extends Controller
{
    //

    public function addArt(){
        $cate = category::all();
        return view('admin.addArt',compact('cate'));
    }
}
