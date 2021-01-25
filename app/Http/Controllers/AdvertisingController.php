<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advertising;

class AdvertisingController extends Controller
{
    public function setSponsor(Request $request){
        $dounloadFile = $request->file('dounloadFile');

        Advertising::create(['sponsorImg'=>$dounloadFile]);

        $maxId = Advertising::max('id');
        $dounloadFile->move('sponsorsImg',$maxId.".jpg");

        $update = Advertising::find($maxId);
        $update->sponsorImg = $maxId.".jpg";
        $update->save();

        return back();
    }
}
