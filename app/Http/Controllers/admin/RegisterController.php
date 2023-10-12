<?php
/**
 * Created by PhpStorm.
 * User: MG-CLIENT-14
 * Date: 8/7/2023
 * Time: 5:28 PM
 */

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller {

    var $_folder = 'admin/auth/';
    var $_meta = [];

    public function __construct() {

    }

    /*Teacher registration Form
    Created Date 08/08/2023
    Created By Mohd Hassen*/
    public function index() {
        return view($this->_folder . 'register');
    }

    public function register() {
        return view($this->_folder . 'register');
    }

    public function save(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|max:30',
            'password' => 'required|max:30',
        ]);

        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ];
        $res = DB::table('users')->insert($data);
        if($res)
        {
            return redirect('admin/login')->with('success','Admin User register successfully.');
        }
    }

    public function signOut()
    {
        Session::flush();
        Auth::logout();
        return redirect('admin/login')->withSuccess('Login details are not valid');
    }


}
