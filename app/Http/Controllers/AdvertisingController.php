<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advertising;

class AdvertisingController extends Controller
{
    public function setSponsor(Request $request){
        $dounloadFile = $request->file('dounloadFile');
        $link = $request->input('link');

        Advertising::create(['sponsorImg'=>$dounloadFile,'link'=>$link]);

        $maxId = Advertising::max('id');
        $dounloadFile->move('sponsorsImg',$maxId.".jpg");

        $update = Advertising::find($maxId);
        $update->sponsorImg = $maxId.".jpg";
        $update->save();

        return back();
    }

    public function deleteSponsor($id){
        $delSponsor = Advertising::find($id);
        unlink("sponsorsImg/".$delSponsor->sponsorImg);
        Advertising::destroy($id);
        return back();
    }

}
