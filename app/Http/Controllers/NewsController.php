<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use vendor\autoload;
use Carbon\Carbon;

class NewsController extends Controller
{
    public function setNews(Request $request)
    {
        $title2 = $request->input('title');
        $dounloadFile = $request->file('dounloadFile');
        $firstText = $request->input('firstText');
        $lastText = $request->input('lastText');
        $category = $request->input('category');
        $category2 = $request->input('category2');
        $radios = $request->input('radios');

    $this->validate($request,[
        'title'=>'required|max:200',
        'dounloadFile'=>'required|max:200',
        'firstText'=>'required|max:200',
        'lastText'=>'required',
        'category'=>'required|max:100',

    ]);


        //echo $title,$dounloadFile,$firstText,$lastText,$category,$category2,$radios;

        $carbon = new Carbon();

        News::create(['title' => $title2, 'imgName' => "null",
            'text1' => $firstText, 'text2' => $lastText,
            'firstCategory' => $category,
            'lastCategory' => $category2,
            'sliderPosition' => $radios,
            'create_at' => $carbon->format('d.m.Y'),
            'update_at' => null
        ]);

        $maxId = News::max('id');
        $dounloadFile->move('items', $maxId . ".jpg");

        $update = News::find($maxId);
        $update->imgName = $maxId . ".jpg";
        $update->save();

        return back();
    }

    public function getDeleteNewsCategory(Request $request){
        $text1 = "Ջնջել նորությունը";
        $text2 = "Գլխավոր էջ";
        $category = $request->input('category');
        if($category == "all"){
            $news = News::all();
        } else {
            $news = News::where('firstCategory','=',$category)->get();
        }
        $arr = ['news'=>$news,'text1'=>$text1,'text2'=>$text2];
        return view('adminPages.deleteNews',$arr);
    }

    public function deleteNews($id){
        $delNews = News::find($id);
        unlink("items/".$delNews->imgName);
        News::destroy($id);

        return back();
    }


}
