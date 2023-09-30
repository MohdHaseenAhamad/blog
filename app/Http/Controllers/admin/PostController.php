<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    var $_folder_name = 'admin/post/';
    public function index()
    {
        $results = DB::table('category')->get()->toArray();
        return view($this->_folder_name . 'index', ['results' => $results]);
    }
    public function listing()
    {

    }
}
