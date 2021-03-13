@include('includes.admin.admin_header')
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">

    <ul class="side-menu">
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="index-2.html#"><i
                    class="side-menu__icon fa fa-desktop"></i><span class="side-menu__label">Գլխավոր էջ</span><i
                    class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item" href="{{route('getRunningLine')}}">Վազող տող</a></li>
                <li><a class="slide-item" href="{{route('getSlider')}}">Սլայդեր</a></li>
                <li><a class="slide-item" href="{{route('getNews')}}">Նորություններ (News)</a></li>
                <li><a class="slide-item" href="{{route('getSponsor')}}">Հովանավոր (Sponsor)</a></li>
                <li><a class="slide-item" href="{{route('getDeleteNewsPage')}}">Ջնջել հայտարարությունը</a></li>
                <li><a class="slide-item" href="{{route('getDeleteSponsorPage')}}">Ջնջել հովանավորին</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="index-2.html#"><i class="side-menu__icon fa fa-dollar"
                                                                                   data-toggle="tooltip"
                                                                                   title="fa fa-dollar"></i><span
                    class="side-menu__label">Մեր մասին</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item" href="{{route('getAboutUsPage')}}">Մեր մասին</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="index-2.html#"><i class="side-menu__icon ti-bag"
                                                                                   data-toggle="tooltip"
                                                                                   title="ti-bag"></i><span
                    class="side-menu__label">Նամակներ</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item active" href="{{route('messagesList')}}">Նամակներ</a></li>

            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="index-2.html#"><i class="side-menu__icon ti-bag"
                                                                                   data-toggle="tooltip"
                                                                                   title="ti-bag"></i><span
                    class="side-menu__label">Կատեգորիաներ</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item" href="{{route('getCategorys')}}">Ավելացնել կատեգորիա</a></li>

            </ul>
        </li>
    </ul>
</aside>

<!-- Main Content-->
<div class="app-content  my-3 my-md-5">
    <div class="side-app">

        <div class="page-header">
            <h4 class="page-title">Նամակներ</h4>

        </div>
        <div class="row">

            <div class="col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-body p-6">
                        <div class="inbox-body">
                            <div class="mail-option">
                                <div class="chk-all">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" href="#" class="btn mini all" aria-expanded="false">
                                            {{$dropDown}}
                                            <i class="fa fa-angle-down "></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="/admin/messagesList/all"> All</a></li>
                                            <li><a href='/admin/messagesList/readed'> Readed</a></li>
                                            <li><a href="/admin/messagesList/unread"> Unread</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <ul class="unstyled inbox-pagination">
                                    <li><span>1-50 of {{$messagesCount}}</span></li>
                                </ul>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-inbox table-hover text-nowrap">
                                    <tbody>
                                    @if(count($allMessages) > 0)
                                        @foreach($allMessages as $val)
                                            <tr>
                                                <td class="inbox-small-cells">
                                                    <a href="singelMessage/{{$val->id}}" class="btn btn-outline-warning">Կարդալ</a>
                                                    <a href="deleteMessage/{{$val->id}}" class="btn btn-outline-danger">Ջնջել</a>
                                                </td>
                                                <td>
                                                    @if($val->readed == "no")
                                                        <button class="btn btn-pill btn-success btn-sm">Նոր</button>
                                                    @endif
                                                </td>
                                                <td class="view-message dont-show">{{$val->name}}</td>
                                                <td class="view-message">{{$val->email}}</td>
                                                <td class="view-message inbox-small-cells"></td>
                                                <td class="view-message text-right">{{$val->created_at}}</td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <ul class="pagination float-left mb-3">
                        <li class="page-item page-prev disabled">
                            <a class="page-link" href="#" tabindex="-1">Prev</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item page-next">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--footer-->
<footer class="footer">
    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-md-12 col-sm-12 mt-3 mt-lg-0 text-center">
                Copyright © 2018 <a href="#">adminor</a>. Designed by <a href="#">Spruko</a> All rights reserved.
            </div>
        </div>
    </div>
</footer>
<!-- End Footer-->        </div>
<!-- End Page -->
<!-- Back to top -->
<a href="#top" id="back-to-top" style="display: inline;"><i class="fa fa-angle-up"></i></a>

<!-- Dashboard Core -->
<script src="../../../public/assets/js/vendors/jquery-3.2.1.min.js"></script>
<script src="../../../public/assets/js/vendors/bootstrap.bundle.min.js"></script>
<script src="../../../public/assets/js/vendors/jquery.sparkline.min.js"></script>
<script src="../../../public/assets/js/vendors/selectize.min.js"></script>
<script src="../../../public/assets/js/vendors/jquery.tablesorter.min.js"></script>
<script src="../../../public/assets/js/vendors/circle-progress.min.js"></script>
<script src="../../../public/assets/plugins/rating/jquery.rating-stars.js"></script>

<!-- Fullside-menu Js-->
<script src="../../../public/assets/plugins/toggle-sidebar/sidemenu.js"></script>


<!-- Custom scroll bar Js-->
<script src="../../../public/assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- Switcher Js-->
<script src="../../../public/assets/switcher/js/switcher.js"></script>

<!-- Custom Js-->
<script src="../../../public/assets/js/custom-dark.js"></script>
</body>

<!-- Mirrored from laravel.spruko.com/adminor/Leftmenu-Icon-DarkSidebar-Dark/emailservices by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 May 2020 09:10:44 GMT -->
</html>
