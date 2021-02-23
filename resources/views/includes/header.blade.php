<!DOCTYPE html>
<html>
<head>
    <title>NewsFeed</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../../public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../public/assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../../public/assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="../../public/assets/css/font.css">
    <link rel="stylesheet" type="text/css" href="../../public/assets/css/li-scroller.css">
    <link rel="stylesheet" type="text/css" href="../../public/assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="../../public/assets/css/jquery.fancybox.css">
    <link rel="stylesheet" type="text/css" href="../../public/assets/css/theme.css">
    <link rel="stylesheet" type="text/css" href="../../public/assets/css/style.css">


    <!--[if lt IE 9]>
    <script src="../../public/assets/js/html5shiv.min.js"></script>
    <script src="../../public/assets/js/respond.min.js"></script>
    <![endif]-->


</head>
<body>
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
    <header id="header">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <!-- <div class="header_top"> -->
                <!-- <div class="header_top_left">
                  <ul class="top_nav">
                    <li><a href="index.html">Գլխավոր</a></li>
                    <li><a href="index.html">Մեր Մասին</a></li>
                    <li><a href="pages/contact.html">Հետադարձ Կապ</a></li>
                  </ul>
                </div>
                <div class="header_top_right">
                  <p>Friday, December 05, 2020</p>
                </div> -->
                <nav class="navbar navbar-inverse ">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="{{route('home')}}">Newsfeed</a>
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav">
                                <li><a href="{{route('home')}}">Գլխավոր</a></li>
                                <li><a href="{{route('aboutUs')}}">Մեր Մասին</a></li>
                                <li><a href="{{route('contactUs')}}">Հետադարձ Կապ</a></li>
                            </ul>


                            <form class="navbar-form navbar-right" action="{{route('search')}}">
                            <div class="input-group">
                                    <input type="text" class="form-control" placeholder="որոնում..." name="search">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default" type="submit">
                                            <i class="glyphicon glyphicon-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>

{{--                            flags--}}
{{--                            <ul class="nav navbar-nav navbar-right ">--}}
{{--                                <li><a href="#" class="lang"><img src="../../public/images/armenia.png"></a></li>--}}
{{--                                <li><a href="#" class="lang"><img src="../../public/images/russia.png"></a></li>--}}
{{--                                <li><a href="#" class="lang"><img src="../../public/images/united-kingdom.png"></a></li>--}}
{{--                            </ul>--}}


                        </div>
                    </div>
                </nav>
                <!-- </div> -->
            </div>



            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="header_bottom">
                    <div class="logo_area"><a href="{{route('home')}}" class="logo"><img src="../../public/images/logo.jpg" alt=""></a></div>
                    <div class="add_banner"><a href="#"><img src="../../public/images/addbanner_728x90_V1.jpg" alt=""></a></div>
                </div>
            </div>
        </div>
    </header>
    <section id="navArea">
        <nav class="navbar navbar-inverse" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav main_nav">
                    <li class="active"><a href="{{route('home')}}"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>
                    <li><a href="/allNews/news/">Նուրություններ</a></li>
                    <li><a href="/allNews/sport/">Սպորտ</a></li>
                    <li><a href="/allNews/life/">Կյանք և ոճ</a></li>
                    <li><a href="/allNews/medicine/">Բժշկություն</a></li>
                    <li><a href="/allNews/technology/">Տեխնոլոգիաներ</a></li>

                </ul>
            </div>
        </nav>
    </section>
