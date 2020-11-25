@extends('layout.app')
@section('style')
<style>
/* signin */
#btn-link.scrolled {
    background: #F32013;
    border: none;
    color: white;
}

#btn-link {
    background: white;
    color: #F32013;
    border: none;
}

#btn-link:hover {
    box-shadow: 0 15px 20px -12px whitesmoke;
}
/* sognin */

/* content api */
#dokumentasi-image {
    /* z-index: -1; */
}
/* image api */

/* kontent3 */
.testimony {
    background-image: url('../images/testimony-bg.jpg');
}
/* konten3 */

/* kontent4 */
.cta {
    background-image: url('../images/cta-bg.png');
}
/* kontent4 */

/* navscrolled */
.navd{
    height: 5rem; 
}

.navd.scrolled {
    height: 5rem;
    box-shadow: 0 10px 10px rgba(0, 0, 0, 0.2); 
}
/* navsrolled */

</style>
@endsection
@section('title','Developer Console')
@section('content')
<!-- header -->
<div class="">
    <div class="hero">
        <div class="container">
            <p class="text-white display-3 font-weight-light">Save the future</p>
            <p class="text-white display-3 font-weight-light">with digital technology</p>
            <h4 class="text-white">A powerful API that works with documents.</h4>
        </div>
        <!-- /.hero__bg -->
    </div>


    <!-- .container -->
</div>
<!-- hero -->
<!-- tambahin z index di icon atau kontennya -->
<div class="container">
    <div class="mt-n5 pt-n5 mb-5">
        <div class="mt-n5 pt-n5 row justify-content-center">
            @foreach($dokumentasis as $d)
            <div id="dokumentasi" class="card col-md-3 bg-white m-4 shadow rounded">
                <div class="card-body h-50 text-center text-justify">
                    <div class="pos-relative">
                        <div class="mx-auto">
                            <div id="dokumentasi-image" class="pos-absolute w-100">
                                <img src="{{ asset('../images/404.png') }}" alt="" height="50" width="50">
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 pt-5">
                        <div class="row">
                            <p id="dokumentasi-title" class="mx-auto">{{$d->title}}</p>
                        </div>
                        <div class="row">
                            <p id="dokumentasi-description" class="mx-auto">{{$d->deskripsi}}</p>
                        </div>
                        <div class="mx-auto">
                            <u><a href="{{route('login')}}" class="text-danger">
                                {{$d->link}}
                            </a></u>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="testimony ">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6 text-white mx-auto">
                <p class="">PrivyID is very easy to use. AwanTunai uses PrivyID to sign 1,000 documents every month. We
                    trust
                    PrivyID's
                    team and highly recommend PrivyID products to anyone.</p>
                <p>Windy Natriavi
                </p>
                <p>COO AwanTunai, ex-Gojek & McKinsey
                </p>
            </div>
        </div>
    </div>
</div>

<div class="cta">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-8 mx-auto text-center">
                <h1 class="font-weight-bold">Start building your app today</h1>
                <p class="h4 col-md-8 mx-auto mt-4 text-secondary">Immerse yourself to explore and taste the API
                    in this playground. Ready?</p>
                <a class="btn btn-danger btn-lg my-3" href="">Let's Start</a>
            </div>
        </div>
    </div>
</div>
<!-- /.section--wrapper -->
</div>
<!-- /.container -->
@endsection
@section('script')
<script>
$(document).ready(function() {
    $('footer').css("background", "grey");
    $('.nav-link').remove();
});

$(window).scroll(function() {
    $('#btn-link').toggleClass('scrolled', $(this).scrollTop() > 50);
});
</script>
@endsection

<!-- <ion-icon id="arrow" name="arrow-forward-outline" class="ml-2 font-weight-bolder"></ion-icon> -->