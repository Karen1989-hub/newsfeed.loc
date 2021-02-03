<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin_pages_header_content;
use App\Models\Advertising;
use App\Models\AboutUs;

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
    public function getSponsor(){
        $row = Admin_pages_header_content::find(4);
        $arr = ['text1'=>$row->text1,'text2'=>$row->text2];
        return view('adminPages.sponsor',$arr);
    }
    public function getDeleteNewsPage(){
        $row = Admin_pages_header_content::find(5);
        $arr = ['text1'=>$row->text1,'text2'=>$row->text2];
        return view('adminPages.deleteNews',$arr);
    }
    public function getDeleteSponsorPage(){
        $row = Admin_pages_header_content::find(6);
        $sponsors = Advertising::all();
        $arr = ['text1'=>$row->text1,'text2'=>$row->text2,'sponsors'=>$sponsors];
        return view('adminPages.deleteSponsor',$arr);
    }
    public function getAboutUsPage(){
        $row = Admin_pages_header_content::find(7);


        $arr = ['text1'=>$row->text1,'text2'=>$row->text2,'aboutUsText'];
        return view('adminPages.aboutUs',$arr);
    }

}
