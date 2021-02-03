<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutUs;

class AboutUsController extends Controller
{
    public function updateAboutUsText(Request $request){
        $update = AboutUs::find(1);
        $update->aboutUsText = $request->input('aboutUsText');
        $update->save();
        return back();
    }
    public function updateQuestions(Request $request){
        $update = AboutUs::find(1);
        $update->questions = $request->input('questions');
        $update->save();
        return back();
    }
}
