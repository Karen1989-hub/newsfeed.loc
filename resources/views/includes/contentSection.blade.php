<section id="contentSection">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="left_content">
                <div class="single_post_content">
                    <h2><span>News</span></h2>
                    <div class="single_post_content_left">
                        <ul class="business_catgnav  wow fadeInDown">
                            <li>
                                @if(count($newsLast) != 0)
                                    <figure class="bsbig_fig"><a href="singel/{{$newsLast[0]->id}}"
                                                                 class="featured_img"> <img alt=""
                                                                                            src="../../public/items/{{$newsLast[0]->imgName}}">
                                            <span class="overlay"></span> </a>
                                        <figcaption><a href="singel/{{$newsLast[0]->id}}">{{$newsLast[0]->title}}</a>
                                        </figcaption>
                                        <p>{{$newsLast[0]->text1}}</p>
                                    </figure>
                                @endif
                            </li>
                        </ul>
                    </div>
                    <div class="single_post_content_right">
                        <ul class="spost_nav">
                            @if(count($news) != 0)
                                @foreach($news as $val)
                                    <li>
                                        <div class="media wow fadeInDown"><a href="singel/{{$val->id}}"
                                                                             class="media-left"> <img alt=""
                                                                                                      src="../../public/items/{{$val->imgName}}">
                                            </a>
                                            <div class="media-body"><a href="singel/{{$val->id}}"
                                                                       class="catg_title"> {{$val->title}}</a></div>
                                        </div>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="fashion_technology_area">
                    <div class="fashion">
                        <div class="single_post_content">
                            <h2><span>Sport</span></h2>
                            <ul class="business_catgnav wow fadeInDown">
                                <li>
                                    @if(count($sportsLast) != 0)
                                        <figure class="bsbig_fig"><a href="singel/{{$sportsLast[0]->id}}"
                                                                     class="featured_img">
                                                <img alt="error" src="../../public/items/{{$sportsLast[0]->imgName}}">
                                                <span
                                                    class="overlay"></span> </a>
                                            <figcaption><a
                                                    href="singel/{{$sportsLast[0]->id}}">{{$sportsLast[0]->title}}</a>
                                            </figcaption>
                                            <p>{{$sportsLast[0]->text1}}</p>
                                        </figure>
                                    @endif
                                </li>
                            </ul>
                            <ul class="spost_nav">
                                @if(count($sports) != 0)
                                    @foreach($sports as $val)
                                        <li>
                                            <div class="media wow fadeInDown"><a href="singel/{{$val->id}}"
                                                                                 class="media-left"> <img alt=""
                                                                                                          src="../../public/items/{{$val->imgName}}">
                                                </a>
                                                <div class="media-body"><a href="singel/{{$val->id}}"
                                                                           class="catg_title">
                                                        {{$val->title}} </a></div>
                                            </div>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="technology">
                        <div class="single_post_content">
                            <h2><span>Technology</span></h2>
                            <ul class="business_catgnav">
                                @if(count($technologysLast) != 0)
                                    <li>
                                        <figure class="bsbig_fig wow fadeInDown"><a
                                                href="singel/{{$technologysLast[0]->id}}"
                                                class="featured_img"> <img alt=""
                                                                           src="../../public/items/{{$technologysLast[0]->imgName}}">
                                                <span class="overlay"></span> </a>
                                            <figcaption><a
                                                    href="singel/{{$technologysLast[0]->id}}">{{$technologysLast[0]->title}}</a>
                                            </figcaption>
                                            <p>{{$technologysLast[0]->text1}}</p>
                                        </figure>
                                    </li>
                                @endif
                            </ul>
                            <ul class="spost_nav">
                                @if(count($technologys) != 0)
                                    @foreach($technologys as $val)
                                        <li>
                                            <div class="media wow fadeInDown"><a href="singel/{{$val->id}}"
                                                                                 class="media-left"> <img alt=""
                                                                                                          src="../../public/items/{{$val->imgName}}">
                                                </a>
                                                <div class="media-body"><a href="singel/{{$val->id}}"
                                                                           class="catg_title">
                                                        {{$val->title}}</a></div>
                                            </div>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="single_post_content">
                    <h2><span>Medicine</span></h2>
                    <div class="single_post_content_left">
                        <ul class="business_catgnav">
                            <li>
                                @if(count($medicineLast) != 0)
                                    <figure class="bsbig_fig  wow fadeInDown"><a class="featured_img"
                                                                                 href="singel/{{$medicineLast[0]->id}}">
                                            <img
                                                src="../../public/items/{{$medicineLast[0]->imgName}}" alt=""> <span
                                                class="overlay"></span> </a>
                                        <figcaption><a
                                                href="singel/{{$medicineLast[0]->id}}">{{$medicineLast[0]->title}}</a>
                                        </figcaption>
                                        <p>{{$medicineLast[0]->text1}}</p>
                                    </figure>
                                @endif
                            </li>
                        </ul>
                    </div>
                    <div class="single_post_content_right">
                        <ul class="spost_nav">
                            @if(count($medicine) != 0)
                                @foreach($medicine as $val)
                                    <li>
                                        <div class="media wow fadeInDown"><a href="singel/{{$val->id}}"
                                                                             class="media-left">
                                                <img alt="" src="../../public/item/{{$val->imgName}}"> </a>
                                            <div class="media-body"><a href="singel/{{$val->id}}"
                                                                       class="catg_title"> {{$val->title}}</a></div>
                                        </div>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
            <aside class="right_content">
                <div class="single_sidebar">
                    <h2><span>Life & style</span></h2>
                    <ul class="spost_nav">
                        @if(count($lifeStyle) != 0)
                            @foreach($lifeStyle as $val)
                                <li>
                                    <div class="media wow fadeInDown"><a href="singel/{{$val->id}}" class="media-left">
                                            <img
                                                alt="" src="../../public/items/{{$val->imgName}}"> </a>
                                        <div class="media-body"><a href="singel/{{$val->id}}"
                                                                   class="catg_title">{{$val->title}}</a></div>
                                    </div>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
                <div class="single_sidebar wow fadeInDown">
                    <h2><span>Sponsor</span></h2>
                    @if(isset($sponsors))
                        @foreach($sponsors as $val)
                            <a class="sideAdd" href="{{$val->link}}"><img src="../../public/sponsorsImg/{{$val->sponsorImg}}" alt=""></a>
                        @endforeach
                    @endif
                </div>
            </aside>
        </div>
    </div>
</section>
