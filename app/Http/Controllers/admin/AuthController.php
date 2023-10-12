<?php
/**
 * Created by PhpStorm.
 * User: MG-CLIENT-14
 * Date: 8/7/2023
 * Time: 5:08 PM
 */

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class AuthController extends Controller {

    var $_folder = 'admin/auth/';

    public function register()
    {

        return view($this->_folder.'register');
    }

    public function login()
    {
        return view($this->_folder.'login');
    }

    public function loginAuth(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            return redirect('admin/dashboard')->withSuccess('Welcome to Admin Dashboard');
        }

        return redirect("admin/login")->withSuccess('Login details are not valid');
    }

    public function checkOTP()
    {

    }



}
