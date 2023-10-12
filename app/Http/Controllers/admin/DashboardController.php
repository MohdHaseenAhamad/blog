<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Faker\Provider\UserAgent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(Request $request)
    {

        $post_count = DB::table('post')->count('id');
        $visitor_count = DB::table('visitors')->count('id');
        $home_count = DB::table('visitors')->where('page','=',1)->count('id');
        $blog_count = DB::table('visitors')->where('page','=',2)->count('id');
        $blog_detail_count = DB::table('visitors')->where('page','=',3)->count('id');
        return view('admin/index',['tab'=>'dashboard','post_count'=>$post_count,'visitor_count'=>$visitor_count,'home_count'=>$home_count,'blog_count'=>$blog_count,'blog_detail_count'=>$blog_detail_count]);
    }

}
