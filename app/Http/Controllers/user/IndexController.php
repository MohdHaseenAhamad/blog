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
    public function about()
    {
        return view('user/about');
    }
    public function contact()
    {
        return view('user/contact');
    }
    public function contactSave(Request $request)
    {
        $validator = $request->validate([
            'message' => 'required|max:1000',
            'name' => 'required|max:100',
            'email' => 'required|max:100',
            'subject' => 'required|max:100',
        ]);
        if($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }
        $data = [
            'message'=>$request->message,
            'name'=>$request->name,
            'email'=>$request->email,
            'subject'=>$request->message,
        ];
        DB::table('contact_us')->insert($data);
        return redirect()->back()->with('success','Your message send successfully.');
    }

}
