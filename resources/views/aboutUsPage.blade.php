@include('includes.header')
@include('includes.newsSection')
    <section id="contentSection">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="left_content">
                    <div class="contact_area">
                        <h2>Մեր Մասին</h2><hr>
                        <h4>{{$aboutUsText}}<hr>
                            <h2>Գովազդի և այլ հարցերով</h2><br>
                            <h4>{{$questions}}</h4>
                        </h4>
                    </div>
                </div>
            </div>
            @include('includes.newsfeedEndSponsor')
        </div>
    </section>
@include('includes.footer')
