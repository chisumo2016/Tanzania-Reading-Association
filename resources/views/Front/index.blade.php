@extends('Front.layout.app')

@section('main-content')
    <!-- About -->
    <section id="about"   class="about">
        @include('Front.pages.about');

        <!-- /.container -->
    </section>

    <!-- Leaders -->
    <section id="leader" class="services bg-primary text-white">
        @include('Front.pages.leader');
        <!-- /.container -->
    </section>

    {{--News --}}
    <section id="news" class="portfolio">

        @include('Front.pages.blog');
    </section>

    {{--Gallery --}}

    <section id="gallery" class="portfolio">
    @include('Front.pages.gallery')
        <!-- /.container -->
    </section>


    <section id="membership" class="portfolio">
    @include('Front.pages.membership')
        <!-- /.container -->
    </section>


    <!-- Map -->
    <section id="contact" class="map">

        <div class="row">
            <div class="col-lg-10 mx-auto text-center">
                <h2>Our Office Address - Reading</h2>
                <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
                <br/>
                <small>
                    <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
                </small>
            </div>
        </div>

    </section>

@endsection


{{--@section('bg-img',  asset('front/img/bg.jpg'))--}}
{{--@section('title',    asset('TANZANIA ASSOCIATION READING UK '))--}}
{{--@section('sub-title',  asset('Karibu Kwenye Jumuiya Ya Watanzania Reading UK '))--}}