<?php

namespace App\Http\Controllers;

use App\Models\Admin_pages_header_content;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Models\Catagory;

class CategoryController extends Controller
{
    public function createCategory(Request $request){
        $row = Admin_pages_header_content::find(8);
        $messagesCount = Message::where('readed','no')->count();
        $category = $request->input('name');
        Catagory::create(['name'=>$category]);
        $categories = Catagory::orderBy('id','desc')->get();

        $arr = ['text1'=>$row->text1,'text2'=>$row->text2,'messagesCount'=>$messagesCount,
            'categories'=>$categories];
        return view('adminPages.createCategory',$arr);
    }
}
