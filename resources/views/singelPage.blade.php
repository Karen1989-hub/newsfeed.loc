@include('includes.header')
@include('includes.newsSection')

<section id="contentSection">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="left_content">
                <div class="single_page">
                    <ol class="breadcrumb">
                        <li><a href="../index.html">Home</a></li>
                        <li><a href="#">{{$singelNews[0]->firstCategory}}</a></li>
                        @if($singelNews[0]->lastCategory != null)
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
                <div class="single_sidebar">

                    <div class="tab-content">

                        <div role="tabpanel" class="tab-pane" id="video">
                            <div class="vide_area">
                                <iframe width="100%" height="250"
                                        src="http://www.youtube.com/embed/h5QWbURNEpA?feature=player_detailpage"
                                        frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="comments">
                            <ul class="spost_nav">
                                <li>
                                    <div class="media wow fadeInDown"><a href="single_page.html" class="media-left">
                                            <img alt="" src="../images/post_img1.jpg"> </a>
                                        <div class="media-body"><a href="single_page.html" class="catg_title"> Aliquam
                                                malesuada diam eget turpis varius 1</a></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media wow fadeInDown"><a href="single_page.html" class="media-left">
                                            <img alt="" src="../images/post_img2.jpg"> </a>
                                        <div class="media-body"><a href="single_page.html" class="catg_title"> Aliquam
                                                malesuada diam eget turpis varius 2</a></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media wow fadeInDown"><a href="single_page.html" class="media-left">
                                            <img alt="" src="../images/post_img1.jpg"> </a>
                                        <div class="media-body"><a href="single_page.html" class="catg_title"> Aliquam
                                                malesuada diam eget turpis varius 3</a></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media wow fadeInDown"><a href="single_page.html" class="media-left">
                                            <img alt="" src="../images/post_img2.jpg"> </a>
                                        <div class="media-body"><a href="single_page.html" class="catg_title"> Aliquam
                                                malesuada diam eget turpis varius 4</a></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="single_sidebar wow fadeInDown">
                    <h2><span>Sponsor</span></h2>
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

