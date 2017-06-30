<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    //


    //绑定父子分类
    public function getTree($data){
        $arr = Array();
        foreach ($data as $k=>$v){
            $v['_cate_name'] = $v['cate_name'];
            //如果父分类为0.则为父分类
            if($v['cate_pid'] == 0) {
                $arr[] = $v;
                //子级的cate_pid==父类的cate_id
                foreach ($data as $n => $m) {
                    if ($m['cate_pid'] == $v['cate_id']) {
                        $m['_cate_name'] = '0'.$m['cate_name'];
                        $arr[] = $m;
                    }
                }
            }
        }
        return $arr;
    }





}
