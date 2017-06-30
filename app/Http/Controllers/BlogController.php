<?php

namespace App\Http\Controllers;

use App\article;
use App\category;
use Carbon\Carbon;


class BlogController extends Controller
{

    public function aside(){
        $data = category::all();
        $side_cate = (new category)->getTree($data);

        $hot_article =(new Article)->hot_article();
        view()->share('side_cate',$side_cate);
        view()->share('hot_article',$hot_article);
    }

    public function index(){
        $this->aside();
        //文章列表
        $article = article::where('published_at','<=',Carbon::now())
            ->orderBy('published_at','desc')
            ->paginate(config('blog.art_per_page'));

        return view('blog.index',compact('article'));
    }

    //文章详情
    public function showArticle($slug){
        $this->aside();
        $article = article::whereSlug($slug)->firstOrFail();

        return view('blog.showArticle',compact('article'));
    }


}
