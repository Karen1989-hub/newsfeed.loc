<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrator;
use Illuminate\Support\Facades\Cookie;

class AdminLoginController extends Controller
{
    public function adminLogin(){
        return view('adminPages.adminLogin');
    }

    public function checkAdmin(Request $request){
        $formLogin = $request->input('login');
        $formPassword = $request->input('password');

        $admin = Administrator::where('login',$formLogin)->where('password',$formPassword)->get();

        if(count($admin) == 0){
            $arr = ['adminUserError'=>'սխալ ծածկանուն կամ գաղտնաբառ'];
            return view('adminPages.adminLogin',$arr);
        } else {
            $adminUserId = $admin[0]->id;
            Cookie::queue('adminUserId', $adminUserId, 60);
            return redirect()->route('getRunningLine');
        }
    }

    public function admin_home(){
        return view("adminPages.admin_home");
    }

    public function signOut(){
        //stugum e ardyog nuynakanacvac e admin@
        $adminUserId = Cookie::get('adminUserId');
        Cookie::queue('adminUserId', $adminUserId, -1);
        return redirect()->route('home');
    }

}
