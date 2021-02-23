<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Models\Admin_pages_header_content;
use App\Models\Advertising;
use App\Models\AboutUs;
use Illuminate\Support\Facades\Cookie;

class AdminPagesController extends Controller
{
    public function getRunningLine(){
        $row = Admin_pages_header_content::find(1);
        $messagesCount = Message::count();
        $arr = ['text1'=>$row->text1,'text2'=>$row->text2,'messagesCount'=>$messagesCount];
        return view('adminPages.admin_home',$arr);
    }
    public function getSlider(){
        $row = Admin_pages_header_content::find(2);
        $messagesCount = Message::where('readed','no')->count();
        $arr = ['text1'=>$row->text1,'text2'=>$row->text2,'messagesCount'=>$messagesCount];
        return view('adminPages.slider',$arr);
    }
    public function getNews(){
        //dump(Cookie::get('test'));
        // Cookie::queue('test','test cookie',1);


        $row = Admin_pages_header_content::find(3);
        $messagesCount = Message::where('readed','no')->count();
        $arr = ['text1'=>$row->text1,'text2'=>$row->text2,'messagesCount'=>$messagesCount];
            return view('adminPages.news',$arr);
    }
    public function getSponsor(){
        $row = Admin_pages_header_content::find(4);
        $messagesCount = Message::where('readed','no')->count();
        $arr = ['text1'=>$row->text1,'text2'=>$row->text2,'messagesCount'=>$messagesCount];
        return view('adminPages.sponsor',$arr);
    }
    public function getDeleteNewsPage(){
        $row = Admin_pages_header_content::find(5);
        $messagesCount = Message::where('readed','no')->count();
        $arr = ['text1'=>$row->text1,'text2'=>$row->text2,'messagesCount'=>$messagesCount];
        return view('adminPages.deleteNews',$arr);
    }
    public function getDeleteSponsorPage(){
        $row = Admin_pages_header_content::find(6);
        $messagesCount = Message::where('readed','no')->count();
        $sponsors = Advertising::all();
        $arr = ['text1'=>$row->text1,'text2'=>$row->text2,'sponsors'=>$sponsors,'messagesCount'=>$messagesCount];
        return view('adminPages.deleteSponsor',$arr);
    }
    public function getAboutUsPage(){
        $row = Admin_pages_header_content::find(7);
        $messagesCount = Message::where('readed','no')->count();

        //aboutUsTexts
        $pageTexts = AboutUs::where('id',1)->get();

        $arr = ['text1'=>$row->text1,'text2'=>$row->text2,
            'aboutUsText'=>$pageTexts[0]->aboutUsText,'questions'=>$pageTexts[0]->questions,'messagesCount'=>$messagesCount];
        return view('adminPages.aboutUs',$arr);
    }

}
