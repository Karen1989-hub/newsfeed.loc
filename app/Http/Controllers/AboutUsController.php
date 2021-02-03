<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function updateAboutUsText(Request $request){
        $aboutUsText = $request->input('aboutUsText');
        $questions = $request->input('questions');
       
        return back();
    }
}
