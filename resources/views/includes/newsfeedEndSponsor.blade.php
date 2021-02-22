<div class="col-lg-4 col-md-4 col-sm-4">
    <aside class="right_content">
        <div class="single_sidebar">
            <h2><span>Լրահոս</span></h2>
            <ul class="spost_nav">
                @if(count($newsfeed) != 0)
                    @foreach($newsfeed as $val)
                        <li>
                            <div class="media wow fadeInDown"><a href="/singel/{{$val->id}}" class="media-left">
                                    <img
                                        alt=""
                                        src="../../public/items/{{$val->imgName}}">
                                </a>
                                <div class="media-body"><a href="/singel/{{$val->id}}"
                                                           class="catg_title">{{$val->title}}</a></div>
                            </div>
                        </li>
                    @endforeach
                @endif
            </ul>
        </div>
        <div class="single_sidebar wow fadeInDown"
             style="visibility: visible; animation-name: fadeInDown;">
            <h2><span>Հովանավոր</span></h2>
            @if(count($advertising) != 0)
                @foreach($advertising as $val)
                    <a class="sideAdd" href="#"><img src="../../public/sponsorsImg/{{$val->sponsorImg}}" alt=""></a>
                @endforeach
            @endif
        </div>
    </aside>
</div>
