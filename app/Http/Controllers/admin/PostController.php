<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller {
    var $_folder_name = 'admin/post/';
    var $_data = [];

    public function index() {
        $results = DB::table('category')->get()->toArray();
        return view($this->_folder_name . 'index', ['results' => $results]);
    }

    public function add() {
        $region = DB::table('continents')->get()->toArray();
        return view($this->_folder_name . 'add-post', ['region' => $region, 'tab' => 'post']);
    }

    public function listing() {
        $results = DB::table('post')->get()->toArray();

        return view($this->_folder_name . 'listing', ['results' => $results, 'tab' => 'post']);
    }

    public function addPost() {

        $region = DB::table('continents')->get()->toArray();
        return view($this->_folder_name . 'add-post', ['region' => $region, 'tab' => 'post']);
    }

    public function savePost(Request $request) {
//        dd($request->all());
        $imageName = $request->slug . '-' . time() . '.' . $request->photo->extension();
        $request->photo->move(public_path('upload/post'), $imageName);
        $obj = new Post();
        $obj->con_id = $request->reg_id;
        $obj->cnt_id = $request->cnt_id;
        $obj->sts_id = $request->sts_id;
        $obj->dis_id = $request->dis_id;
        $obj->title = $request->title;
        $obj->photo = $imageName;
        $obj->slug = $request->slug;
        $obj->contents = $request->contents;
        $obj->meta_title = $request->meta_title;
        $obj->meta_description = $request->meta_description;
        $obj->meta_keywords = $request->meta_keywords;
        $obj->date_posted = date('Y-m-d H:i:s');
        $obj->created_at = date('Y-m-d H:i:s');

        $last_id = $obj->save();
        return redirect('/admin/post')->with('success', 'your blog add successfully');

    }

    public function editPost($post_id) {
        $result = DB::table('post')->where('id', $post_id)->get()->toArray();
        $category = DB::table('category')->get()->toArray();
        $region = DB::table('continents')->get()->toArray();
        return view($this->_folder_name . 'edit-post', ['category' => $category, 'result' => $result[0], 'region' => $region, 'tab' => 'post']);
    }

    public function updatePost(Request $request, $post_id) {

        $this->_data = [
            'cat_id' => $request->cat_id,
            'con_id' => $request->reg_id,
            'cnt_id' => $request->cnt_id,
            'sts_id' => $request->sts_id,
            'dis_id' => $request->dis_id,
            'title' => $request->title,
            'slug' => $request->slug,
            'contents' => $request->contents,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
            'created_at' => date('Y-m-d H:i:s'),
        ];
        if ($request->has('photo')) {
            $imageName = $request->slug . '-' . time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('upload/post'), $imageName);
            $this->_data['photo'] = $imageName;
        }
        $last_id = Post::where('id', $post_id)->update($this->_data);
        return redirect('/admin/post/edit-post/' . $post_id)->with('success', 'your blog update successfully');

    }

    public function getCountry(Request $request) {
        $reg_id = $request->reg_id;
        $country = DB::table('countries')->where('cnt_con_id', '=', $reg_id)->get()->toArray();
        echo json_encode(['country' => $country, 'status' => true]);
    }

    public function getState(Request $request) {
        $cnt_id = $request->cnt_id;
        $state = DB::table('states')->where('sts_cnt_id', '=', $cnt_id)->get()->toArray();
        echo json_encode(['state' => $state, 'status' => true]);
    }

    public function getCity(Request $request) {
        $sts_id = $request->sts_id;
        $city = DB::table('districts')->where('dis_sts_id', '=', $sts_id)->get()->toArray();
        echo json_encode(['city' => $city, 'status' => true]);
    }
}
