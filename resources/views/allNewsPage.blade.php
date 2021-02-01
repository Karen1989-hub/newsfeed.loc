@include('includes.header')
@include('includes.newsSection')
<section id="contentSection">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="left_content">
                <div class="contact_area">
                    <h2>Բոլոր Նորությունները</h2>
                    <hr>
                    <ul class="spost_nav">
                        @if(count($news) != 0)
                            @foreach($news as $val)
                                <li>
                                    <div class="media wow fadeInDown animated"
                                         style="visibility: visible; animation-name: fadeInDown;"><a
                                            href="/singel/{{$val->id}}" class="media-left"> <img alt=""
                                                                                             src="../../public/items/{{$val->imgName}}">
                                        </a>
                                        <div class="media-body"><a href="/singel/{{$val->id}}" class="catg_title"><p>
                                                    {{$val->create_at}}</p>{{$val->title}}</a></div>

                                    </div>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            @if(count($news) != 0)
                            <li class="page-item"><a class="page-link"
                                                     href="/allNews/{{$news[0]->firstCategory}}/@if($page>1)
                                                     {{$page-1}} @else 1 @endif">Previous</a></li>
                            @if(count($news) != 0)
                                @for($i=1;$i<=$count;$i++)
                                    <li class="page-item
                            @if($page == $i)
                                        active
                            @endif
                                        "><a class="page-link"
                                             href="/allNews/{{$news[0]->firstCategory}}/{{$i}}">{{$i}}</a></li>
                                @endfor
                            @endif
                            <li class="page-item"><a class="page-link"
                                                     href="/allNews/{{$news[0]->firstCategory}}/@if($page<$count)
                                                     {{$page+1}} @else {{$count}} @endif">Next</a>
                            </li>
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
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
                                        <div class="media-body"><a href="/singel/{{$val->id}}" class="catg_title">{{$val->title}}</a></div>
                                    </div>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
                <div class="single_sidebar wow fadeInDown animated"
                     style="visibility: visible; animation-name: fadeInDown;">
                    <h2><span>Հովանավոր</span></h2>
                    @if(count($advertising) != 0)
                        @foreach($advertising as $val)
                            <a class="sideAdd" href="#"><img src="../../public/sponsorsImg/{{$val->sponsorImg}}" alt=""></a>
                </div>
                @endforeach
                @endif

            </aside>
        </div>
    </div>
</section>
@include('includes.footer')
