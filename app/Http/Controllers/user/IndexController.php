<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function home()
    {
        $results = DB::table('category')->get()->toArray();
        return view('user/index',['results'=>$results]);
    }

    public function listing($slug)
    {
        $result = DB::table('category')->where('slug',$slug)->get()->toArray();
        $post_id = $result[0]->id;
        $results = DB::table('post')->where('cat_id',$post_id)->get()->toArray();
        return view('user/listing',['results'=>$results,'slug'=>$slug]);
    }
    public function detail($slug,$title)
    {
        $result = DB::table('post')->where('slug',$title)->get()->toArray();
//        dd($results);
        return view('user/detail',['result'=>$result[0]]);
    }

}
