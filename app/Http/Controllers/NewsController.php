<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\Cookie;
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

        $validator = Validator::make($request->all(),
        [
        'title'=>'required|max:200',
        'dounloadFile'=>'required|max:200',
        'firstText'=>'required|max:200',
        'lastText'=>'required',
        'category'=>'required|max:100',
        ],
        [
            'title.required'=>"դաշտը պեք է լրացված լինի",
            'title.max'=>"դաշտը չի կարող գերազանցի 200 սինվոլը",
            'dounloadFile'=>'նշեք ներբեռնվող ֆայլը',
            'firstText'=>'դաշտը պեք է լրացված լինի և չգերազանցի 200 սինվոլը',
            'lastText'=>'դաշտը պեք է լրացված լինի',
            'category'=>'դաշտը պեք է լրացված լինի',
        ]);

        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        };

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
        $messagesCount = Message::count();
        $arr = ['news'=>$news,'text1'=>$text1,'text2'=>$text2,'messagesCount'=>$messagesCount];
        return view('adminPages.deleteNews',$arr);
    }

    public function deleteNews($id){
        $delNews = News::find($id);
        unlink("items/".$delNews->imgName);
        News::destroy($id);

        return back();
    }


}
