<?php

namespace App\Http\Controllers;

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
}
