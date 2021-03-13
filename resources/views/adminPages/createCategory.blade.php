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
                <li><a class="slide-item" href="{{route('messagesList')}}">Նամակներ</a></li>

            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="index-2.html#"><i class="side-menu__icon ti-bag"
                                                                                   data-toggle="tooltip"
                                                                                   title="ti-bag"></i><span
                    class="side-menu__label">Կատեգորիաներ</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item active" href="#">Ավելացնել կատեգորիա</a></li>

            </ul>
        </li>
    </ul>
</aside>

<!-- Main Content-->
<div class="app-content  my-3 my-md-5">
    <div class="side-app">
        @include('includes.admin.admin_pages_header')
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Ավելացնել Կատեգորիա</div>
                    </div>
                    <div class="card-body p-6">
                        <div class="wizard-container">
                            <div class="wizard-card m-0" data-color="red" id="wizardProfile">
                                @if ($errors->has('title'))
                                    {{$errors->first('title')}}
                                @endif
                                <form class="card" action="{{route('createCategory')}}" method="post"
                                      enctype='multipart/form-data'>
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label class="form-label">Նոր կատեգորիաի անունը</label>
                                            <input type="text" class="form-control" value="{{ old('title') }}"
                                                   name="name" placeholder="Անունը" style="padding-left: 10px">
                                            <strong style="color: red"></strong>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block">Հաստատել</button>
                                </form>
                                    <!-- table start -->
                                    <div class="table-responsive">
                                        <table class="table table-inbox table-hover text-nowrap">
                                            <tbody>
                                            @if(count($categories) > 0)
                                                @foreach($categories as $val)
                                                    <tr style="text-align: center">

                                                        <td class="view-message inbox-small-cells">{{$val->name}}</td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- table end -->
                            </div>
                        </div> <!-- wizard container -->
                    </div>
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
                Copyright © 2021 <a href="#">Karen Aroyan</a> All rights reserved.
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

<!-- forn-wizard js-->
<script src="../../../public/assets/plugins/forn-wizard/js/material-bootstrap-wizard.js"></script>
<script src="../../../public/assets/plugins/forn-wizard/js/jquery.validate.min.js"></script>
<script src="../../../public/assets/plugins/forn-wizard/js/jquery.bootstrap.js"></script>
<!-- Inline js -->
<script src="../../../public/assets/js/select2.js"></script>
<!--Select2 js -->
<script src="../../../public/assets/plugins/select2/select2.full.min.js"></script>

<!-- Custom scroll bar Js-->
<script src="../../../public/assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- Switcher Js-->
<script src="../../../public/assets/switcher/js/switcher.js"></script>

<!-- Custom Js-->
<script src="../../../public/assets/js/custom-dark.js"></script>
</body>

<!-- Mirrored from laravel.spruko.com/adminor/Leftmenu-Icon-DarkSidebar-Dark/form-wizard by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 May 2020 09:11:13 GMT -->
</html>
