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
                <li><a class="slide-item active" href="{{route('getNews')}}">Նորություններ (News)</a></li>
                <li><a class="slide-item" href="{{route('getSponsor')}}">Հովանավոր (Sponsor)</a></li>
                <li><a class="slide-item" href="{{route('getDeleteNewsPage')}}">Անջատել հայտարարությունը</a></li>
                <li><a class="slide-item" href="{{route('getDeleteSponsorPage')}}">Ջնջել հովանավորին</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="index-2.html#"><i class="side-menu__icon fa fa-dollar"
                                                                                   data-toggle="tooltip"
                                                                                   title="fa fa-dollar"></i><span
                    class="side-menu__label">---</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item" href="index.html">...</a></li>
                <li><a class="slide-item" href="index2.html">...</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="index-2.html#"><i class="side-menu__icon ti-bag"
                                                                                   data-toggle="tooltip"
                                                                                   title="ti-bag"></i><span
                    class="side-menu__label">---</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a class="slide-item" href="index.html">...</a></li>
                <li><a class="slide-item" href="index2.html">...</a></li>
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
                        <div class="card-title">Ավելացնել նորություն</div>
                    </div>
                    <div class="card-body p-6">
                        <div class="wizard-container">
                            <div class="wizard-card m-0" data-color="red" id="wizardProfile">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form class="card" action="{{route('setNews')}}" method="post"
                                      enctype='multipart/form-data'>
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label class="form-label">Նշել վերնագիրը</label>
                                            <input type="text" class="form-control" value="{{ old('title') }}"
                                                   name="title" placeholder="Վերնագիր" style="padding-left: 10px">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input"
                                                       value="{{old("dounloadFile")}}" name="dounloadFile">
                                                <label class="custom-file-label">ընտրեք ֆայլը</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Նախնական տեքստ <span
                                                    class="form-label-small ml-3"></span></label>
                                            <textarea class="form-control" value="{{old("firstText")}}" name="firstText"
                                                      rows="5" placeholder="Տեքստ..."
                                                      style="padding: 0 10px;height: 80px;"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Հիմնական տեքստ <span
                                                    class="form-label-small ml-3"></span></label>
                                            <textarea class="form-control" value="{{old("lastText")}}" name="lastText"
                                                      rows="10" placeholder="Տեքստ..."
                                                      style="padding: 0 10px;height: 200px;"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Սկզբնական կատեգորիա</label>
                                            <select value="{{old('category')}}" name="category" id="select-countries"
                                                    class="form-control select2 custom-select">
                                                <option value="news">Նորություններ</option>
                                                <option value="life">Կյանք և ոճ</option>
                                                <option value="sport">Սպորտ</option>
                                                <option value="technology">Տեխնոլոգիաներ</option>
                                                <option value="medicine">Բժշկություն</option>
                                            </select>
                                        </div>

                                        <div class="form-group ">
                                            <div class="form-label">Տեղադրել նաև սլայդերում ?</div>
                                            <div class="custom-controls-stacked">
                                                <label class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="radios"
                                                           value="yes">
                                                    <span class="custom-control-label">Այո</span>
                                                </label>
                                                <label class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="radios"
                                                           value="no" checked>
                                                    <span class="custom-control-label">Ոչ</span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label">Երկրորդական կատեգորիա</label>
                                            <select value="{{old("category2")}}" name="category2" id="select-countries"
                                                    class="form-control select2 custom-select">
                                                <option value="null">null</option>
                                                <option value="footbol">Ֆուտբոլ</option>
                                                <option value="basketbol">Բասկետբոլ</option>
                                                <option value="tenis">Թենիս</option>
                                            </select>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block">Հաստատել</button>
                                </form>
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
