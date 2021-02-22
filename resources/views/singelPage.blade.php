@include('includes.header')
{{--@include('includes.newsSection')--}}

<section id="contentSection">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="left_content">
                @if(count($singelNews) != 0)
                <div class="single_page">
                    <ol class="breadcrumb">
                        <li><a href="../index.html">Home</a></li>
                        <li><a href="#">{{$singelNews[0]->firstCategory}}</a></li>
                        @if($singelNews[0]->lastCategory != "null" && $singelNews[0]->lastCategory != null)
                            <li class="active">
                                {{$singelNews[0]->lastCategory}}
                            </li>
                        @endif
                    </ol>
                    <h1>{{$singelNews[0]->title}}</h1>
                    <div class="post_commentbox"><span><i
                                class="fa fa-calendar"></i>{{$singelNews[0]->create_at}} </span></div>
                    <div class="single_page_content"><img class="img-center"
                                                          src="../public/items/{{$singelNews[0]->imgName}}" alt="">
                        <p>{{$singelNews[0]->text2}}</p>
                    </div>
                </div>
                @else
                    <h2>Ձեր հարցմամբ ոչինչ չի գտնվել:</h2>
                    @endif
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4">
            <aside class="right_content">
                <div class="single_sidebar">
                    <h2><span>Լրահոս</span></h2>
                    <ul class="spost_nav">
                        @foreach($newsfeed as $val)
                            <li>
                                <div class="media wow fadeInDown"><a href="{{$val->id}}" class="media-left"> <img alt=""
                                                                                                                  src="../../public/items/{{$val->imgName}}">
                                    </a>
                                    <div class="media-body"><a href="{{$val->id}}"
                                                               class="catg_title">{{$val->title}}</a></div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="single_sidebar wow fadeInDown">
                    <h2><span>Գովազդ</span></h2>
                    @if(isset($sponsors))
                        @foreach($sponsors as $val)
                            <a class="sideAdd" href="#"><img src="../../public/sponsorsImg/{{$val->sponsorImg}}" alt=""></a>
                        @endforeach
                    @endif
                </div>
            </aside>
        </div>
    </div>
</section>
@include('includes.footer')

