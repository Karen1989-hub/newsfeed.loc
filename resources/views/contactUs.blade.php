@include('includes.header')
@include('includes.newsSection')
    <section id="contentSection">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="left_content">
                    <div class="contact_area">
                        <h2>Գրեք Մեզ</h2>
                        <form action="{{route('setMessage')}}" method="post" class="contact_form">
                            @csrf
                            <input class="form-control" type="text" placeholder="Անուն*" name="name">
                            <input class="form-control" type="email" placeholder="Էլ. Հասցե*" name="email">
                            <textarea class="form-control" cols="30" rows="10" placeholder="Նամակ*" name="message"></textarea>
                            <input type="submit" value="Ուղարկել Նամակը">
                        </form>
                    </div>
                </div>
            </div>
           @include('includes.newsfeedEndSponsor')
        </div>
    </section>
@include('includes.footer')
