<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //

    protected $dates = ['published_at'];

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;

        if (! $this->exists) {
            $this->attributes['slug'] = str_slug($value);
        }
    }

    //热门博文
    public function hot_article(){
        $hot_article = article::orderBy('view','desc')->take(5)->get();
        return $hot_article;
    }
}
