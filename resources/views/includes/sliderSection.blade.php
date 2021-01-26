<section id="sliderSection">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="slick_slider">
                @foreach($slider as $val)
                <div class="single_iteam"> <a href='singel/{{$val->id}}'> <img src="../../public/items/{{$val->imgName}}" alt="error"></a>
                    <div class="slider_article">
                        <h2><a class="slider_tittle" href='singel/{{$val->id}}'>{{$val->title}}</a></h2>
                        <p>{{$val->text1}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="latest_post">
                <h2><span>Լրահոս</span></h2>
                <div class="latest_post_container">
                    <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
                    <ul class="latest_postnav">
                        @if(count($newsfeed))
                            @foreach($newsfeed as $val)
                        <li>
                            <div class="media"> <a href="singel/{{$val->id}}" class="media-left"> <img alt="" src="../../public/items/{{$val->imgName}}"> </a>
                                <div class="media-body"> <a href="singel/{{$val->id}}" class="catg_title">{{$val->title}}</a> </div>
                            </div>
                        </li>
                            @endforeach
                        @endif
                    </ul>
                    <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
                </div>
            </div>
        </div>
    </div>
</section>
