<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller {
    var $_folder_name = 'admin/category/';

    public function index() {
        $results = DB::table('category')->get()->toArray();
        return view($this->_folder_name . 'index', ['results' => $results]);
    }

    public function add() {
        return view($this->_folder_name . 'add');
    }

    public function save(Request $request) {
        $data = $request->validate([
            'category_name' => 'required|max:100',
        ]);
        $obj = new Category();
        $obj->name = $request->category_name;
        $obj->created_at = date("Y-m-d H:i:s");
        $data = $obj->save();
        if ($data) {
            return redirect('/admin/category')->with('success', "Category add successfully.");
        }

    }

    public function edit($id) {
        $result = DB::table('category')->where('id', $id)->get()->toArray();
        return view($this->_folder_name . 'edit', ['result' => $result[0], 'id' => $id]);
    }

    public function update(Request $request,$id) {
        $data = $request->validate([
            'category_name' => 'required|max:100',
        ]);
        $dataArray = [
            'name'=>$request->category_name,
            'updated_at'=>date("Y-m-d H:i:s")
        ];
        $ret = DB::table('category')->where('id', $id)->update($dataArray);

        if ($ret) {
            return redirect('/admin/category')->with('success', "Category update successfully.");
        }
        return redirect()->back()->with('error', "Something went wrong.");
    }
}
