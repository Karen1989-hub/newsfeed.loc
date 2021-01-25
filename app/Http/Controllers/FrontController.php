<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Advertising;


class FrontController extends Controller
{
    public function getHomePage()
    {
        $slider = News::where('sliderPosition', '=', 'yes')->get();

        $news = News::where('firstCategory', '=', 'news')->orderBy('id', 'desc')->offset(1)->limit(5)->get();
        $newsLastId = News::where('firstCategory', '=', 'news')->max('id');
        $newsLast = News::where('id', $newsLastId)->limit(5)->get();

        $sports = News::where('firstCategory', '=', 'sport')->orderBy('id', 'desc')->offset(1)->limit(5)->get();
        $sportsLastId = News::where('firstCategory', '=', 'sport')->max('id');
        $sportsLast = News::where('id', $sportsLastId)->get();

        $technologys = News::where('firstCategory', '=', 'technology')->orderBy('id', 'desc')->offset(1)->limit(5)->get();
        $technologysLastId = News::where('firstCategory', '=', 'technology')->max('id');
        $technologysLast = News::where('id', $technologysLastId)->get();

        $medicine = News::where('firstCategory', '=', 'medicine')->orderBy('id', 'desc')->offset(1)->limit(5)->get();
        $medicineLastId = News::where('firstCategory', '=', 'medicine')->max('id');
        $medicineLast = News::where('id', $medicineLastId)->get();

        $lifeStyle = News::where('firstCategory', '=', 'life')->orderBy('id', 'desc')->limit(5)->get();

        $newsfeed = News::orderBy('id','desc')->limit(5)->get();

        $sponsors = Advertising::all();


        $arr = ['slider' => $slider,
            'news' => $news, 'newsLast' => $newsLast,
            'sports' => $sports, 'sportsLast' => $sportsLast,
            'technologys' => $technologys, 'technologysLast' => $technologysLast,
            'medicine' => $medicine, 'medicineLast' => $medicineLast,
            'lifeStyle' => $lifeStyle,
            'newsfeed' => $newsfeed,
            'sponsors' => $sponsors
        ];
        return view('home', $arr);
    }

    public function getSingelPage($id){
        $singelNews = News::where('id',$id)->get();
        $newsfeed = News::orderBy('id','desc')->limit(5)->get();
        $sponsors = Advertising::all();

        $arr = ['singelNews'=>$singelNews,'newsfeed'=>$newsfeed,'sponsors' => $sponsors];
        return view('singelPage',$arr);
    }
}
