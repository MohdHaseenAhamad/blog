<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function home()
    {

        $results = DB::table('post')->get()->toArray();

        return view('user/index',['results'=>$results]);
    }

    public function blog()
    {
        $results = DB::table('post')->get()->toArray();

        return view('user/blog',['results'=>$results]);
    }

    public function detail($slug)
    {
        $result = DB::table('post')->where('slug','=',$slug)->get()->toArray();

        return view('user/detail',['result'=>$result[0]]);
    }

    public function listing($slug)
    {
        $result = DB::table('category')->where('slug',$slug)->get()->toArray();
        $post_id = $result[0]->id;
        $results = DB::table('post')->where('cat_id',$post_id)->get()->toArray();
        return view('user/listing',['results'=>$results,'slug'=>$slug]);
    }


}
