<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    var $_folder_name = 'admin/post/';
    var $_data = [];
    public function index()
    {
        $results = DB::table('category')->get()->toArray();
        return view($this->_folder_name . 'index', ['results' => $results]);
    }
    public function listing($cat_id)
    {
        $results = DB::table('post')->where('cat_id',$cat_id)->get()->toArray();

        return view($this->_folder_name . 'listing', ['results' => $results,'cat_id'=>$cat_id]);
    }

    public function addPost($cat_id)
    {
        $category = DB::table('category')->get()->toArray();
        return view($this->_folder_name.'add-post',['category' => $category,'cat_id'=>$cat_id]);
    }
    public function savePost(Request $request)
    {

        $imageName = $request->slug.'-'.time().'.'.$request->photo->extension();

        $request->photo->move(public_path('upload/post'), $imageName);

        $this->_data = [
            'cat_id' => $request->cat_id,
            'title' => $request->title,
            'slug' => $request->slug,
            'photo' =>$imageName,
            'contents' => $request->contents,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
            'date_posted' => date('Y-m-d H:i:s'),
            'created_at' =>  date('Y-m-d H:i:s'),
        ];
       $last_id = Post::create($this->_data);
       return redirect('/admin/post/listing/'.$request->cat_id)->with('success','your blog add successfully');

    }
    public function editPost($post_id)
    {
        $result = DB::table('post')->where('id',$post_id)->get()->toArray();
        $category = DB::table('category')->get()->toArray();
        return view($this->_folder_name.'edit-post',['category' => $category,'result'=>$result[0]]);
    }
    public function updatePost(Request $request,$post_id)
    {
        $this->_data = [
            'cat_id' => $request->cat_id,
            'title' => $request->title,
            'slug' => $request->slug,
            'contents' => $request->contents,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
            'created_at' =>  date('Y-m-d H:i:s'),
        ];
        if ($request->has('photo'))
        {
            $imageName = $request->slug.'-'.time().'.'.$request->photo->extension();
            $request->photo->move(public_path('upload/post'), $imageName);
            $this->_data['photo'] = $imageName;
        }
        $last_id = Post::where('id',$post_id)->update($this->_data);
        return redirect('/admin/post/edit-post/'.$post_id)->with('success','your blog update successfully');

    }
}
