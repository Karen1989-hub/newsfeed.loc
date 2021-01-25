<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin_pages_header_content;

class AdminPagesController extends Controller
{
    public function getRunningLine(){
        $row = Admin_pages_header_content::find(1);
        $arr = ['text1'=>$row->text1,'text2'=>$row->text2];
        return view('adminPages.admin_home',$arr);
    }
    public function getSlider(){
        $row = Admin_pages_header_content::find(2);
        $arr = ['text1'=>$row->text1,'text2'=>$row->text2];
        return view('adminPages.slider',$arr);
    }
    public function getNews(){
        $row = Admin_pages_header_content::find(3);
        $arr = ['text1'=>$row->text1,'text2'=>$row->text2];
            return view('adminPages.news',$arr);
    }

}
