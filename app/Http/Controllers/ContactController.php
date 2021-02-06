<?php

namespace App\Http\Controllers;

use App\Models\Admin_pages_header_content;
use App\Models\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function setMessage(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');
        $readed = "no";
        Message::create(['name'=>$name,'email'=>$email,'message'=>$message,'readed'=>$readed]);
        return back();
    }

    public function messagesList($type=null){
        if($type == "all"){
            $dropDown = "all";
            $allMessages = Message::all();
        } else if($type == "readed"){
            $dropDown = "readed";
            $allMessages = Message::where('readed','yes')->get();
        } else if($type == "unread"){
            $dropDown = "unread";
            $allMessages = Message::where('readed','no')->get();
        } else {
            $dropDown = "all";
            $allMessages = Message::all();
        }

        $messagesCount = Message::count();
        $unreadMessageCount = Message::where("read","no")->count();
        $arr = ['allMessages'=>$allMessages,'messagesCount'=>$messagesCount,'dropDown'=>$dropDown,
            'unreadMessageCount'=>$unreadMessageCount];
        return view('adminPages.messagesList',$arr);
    }

    public function singelMessage($id){
        $message = Message::where('id',$id)->get();
        $update = Message::find($id);
        $update->readed = "yes";
        $update->save();
        $arr = ['message'=>$message];
        return view('adminPages.singelMessage',$arr);
    }

    public function deleteMessage($id){
        $deleteMessage = Message::find($id);
        $deleteMessage->delete();
        return back();
    }
}
