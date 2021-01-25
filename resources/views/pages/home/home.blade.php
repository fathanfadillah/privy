@extends('layout.app')
@include('pages.home.klienFirst')
@include('pages.home.klienLast')
@section('title','Tanda Tangan Digital')
@section('style')
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <style>
        /* liputans */
        #liputans {
            filter: grayscale(100%);
            transition: 0.5s;
        }

        #liputans:hover {
            filter: grayscale(0%);
            transition: 0.5s;
        }

        @media (max-width: 770px) {
            #store{
                display: none;}
            .hero{
                margin-bottom:5%;
                height: 80%;
            }
        }
        @media (min-width: 770px) {
            #store-small-size{
                display: none;}
        }
    </style>
    @stack('klien-style')
@endsection

@section('content')
<!-- header -->
<div class="mb-auto">
    <div class="hero">
        <div class="container justify-content-center mt-n5">
            <div class="row">
                <div class="col-md-8">
                    <div class="row-justify-content-start">
                        <h4 class="text-white head-title">Tanda tangan dan identitas digital untuk semua orang.</h4>
                    </div>

                    <div class="row-justify-content-start">
                        <p class="head-desc">Gunakan identitas dari tanda tangan digital kami untuk berbagai kebutuhan
                            bisnis, mulai dari verifikasi data hingga pengiriman dokumen digital yang 100% sah dan legal
                            di mata hukum.</p>
                    </div>

                    <div id="store-small-size" class="row-justify-content-start">
                        <div class="">
                            <div class=""><a
                                href="https://play.google.com/store/apps/details?id=com.privygate.privyid&hl=in"><img
                                    class="rounded-lg"
                                    src="{{asset('/images/privyid-download-google-play-440x142.png')}}" class="img-fluid" alt="Responsive image"
                                    height="60" width="180"></a></div>
                            <div class="pt-3"><a href="https://apps.apple.com/au/app/privyid-digital-signature/id1218828609"><img
                                class="rounded-lg"
                                src="{{asset('/images/privyid-download-app-store-440x142.png')}}" class="img-fluid" alt="Responsive image"
                                height="60" width="180"></a></div>
                        </div>
                    </div>

                    <div class="space mt-5 pt-5"></div>
                    <div class="row justify-content-start mt-n4">
                        <div class="d-flex flex-row pt-n5">
                            <div class="p-3">
                                <a id="store"
                                    href="https://play.google.com/store/apps/details?id=com.privygate.privyid&hl=in"><img
                                        class="rounded-lg"
                                        src="{{asset('/images/privyid-download-google-play-440x142.png')}}" class="img-fluid" alt="Responsive image"
                                        height="60" width="180"></a>
                            </div>
                            <div class="p-3">
                                <a id="store" href="https://apps.apple.com/au/app/privyid-digital-signature/id1218828609"><img
                                        class="rounded-lg"
                                        src="{{asset('/images/privyid-download-app-store-440x142.png')}}" class="img-fluid" alt="Responsive image"
                                        height="60" width="180"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-5">
                    <img id="smartphone" src="{{asset('/images/old-hp.png')}}" class="mt-5" alt="Responsive image"
                        height="400" weight="200">
                </div>

            </div>

            <!-- untuk ennterpsei yg gambar kompi pake mx-md-n5 ada di bootsarap -->

        </div>


    </div>
    <!-- /.hero__bg -->

    <!-- gambar hp -->


    <!-- .container -->
</div>
<!-- hero -->

<!-- keuntungan -->
<div class="bg-white pt-n5 mt-n5">
    <div class="container justify-content-center mt-5 pt-5">
        <div class="section--wrapper">
            <div class="grid">
                <div class="row">
                    <div class="col-md-12 mx-auto mt-5">


                        <div class="row justify-content-center m-1">
                            <h2 class="font-weight-normal font-weight-bold text-center">5 Keuntungan Menggunakan Tanda
                                Tangan Digital
                                PrivyID</h2>
                            <br>
                            <br>
                            <br>
                        </div>

                        <div class="row keuntungan">
                            @foreach($keuntungans as $k)
                            <div class="col-sm-4 mr-auto p-3">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <img src="{{$src.$k->icon}}" width="60" height="60" alt="Responsive image">
                                    </div>
                                    <div class="col-sm-6 pt-3 mt-1">
                                        <h4 class="content-title font-weight-bold">{{$k->title_keuntungan}}</h4>
                                    </div>
                                </div>
                                <div class="row col-md-12 mt-1">
                                    <p class="text-justify content-description font-weight-normal">
                                        {{$k->deskripsi_keuntungan}}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<!-- keuntungan -->


<div class="bg-light enterprise">
    <div class="container-md my-5 py-5 text-center col-md-10">
        <h1 class="font-weight-bold pb-4">EnterpriseID - Corporate Solution</h1>
        <p class="enterprise-description h5 text-justify text-center pb-5">EnterpriseID offers simplicity for your
            business
            efficiency.
            Enjoy the practicality of PrivyID platform with additional features that are specifically designed to
            revolutionize the way you handle administrative task. Use EnterpriseID to improve your business efficiency
            by digitizing your HR, procurement, and finance process.
        </p>
        <img src="{{url('/images/dashboard.png')}}" class="img-fluid py-4 my-4 h-75 w-50" alt="Responsive image" >
    </div>
    <div class="container-md my-5 py-5 text-center col-md-10">
        <h1 class="font-weight-bold pb-4">Enterprise Features</h1>
        <div class="">
            <?php $count=1;?>
            @php($count=1)
            @foreach($enterprises as $es)

            @if($count%2==0)
            <div class="row my-4 py-4 d-flex flex-row-reverse">
                @else
                <div class="row my-4 py-4 ">
                    @endif
                    <!-- <div id="enterprise-content" class="row my-4 text-left"> -->
                    <div class="col-md-5 mx-auto"><img src="{{$src.$es->foto}}" class="img-fluid h-100 w-75" alt="Responsive image">
                    </div>
                    <div class="col-md-3 text-left mx-auto">
                        <h5 class="text-danger font-weight-bold">{{$es->title}}</h5>
                        <p>{{$es->deskripsi}}</p>
                    </div>
                    <?php echo '</div>'?>
                    <hr>
                    <?php $count++?>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="">
            <div class="container-md py-5 text-center col-md-10">
                <div class="klien-head">
                    <h2 class="font-weight-bold">Klien</h2>
                    <p>PrivyID telah digunakan oleh lebih dari 5 juta pengguna dan 429 perusahaan di Indonesia</p>
                </div>
                <div class="">
                    <div col="mx-auto">
                        @stack('klien-first')
                    </div>
                </div>
                <div class="">
                    <div col="mx-auto">
                        @stack('klien-last')
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <div class="container-md py-5 text-center col-md-9">
                <div>
                    <h2 class="font-weight-bold mb-5">Membership</h2>
                    <div class="row mx-auto">
                        @foreach($liputans as $l)
                        <div class="col-md-3 mx-auto">
                            <img id="liputans" src="{{ $src.$l->foto }}" class="img-fluid h-50 w-75 mx-auto img-responsive" alt="Responsive image">
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="mx-auto">
            <div class="container-md py-5 text-center col-md-10">
                <div>
                    <h2 class="font-weight-bold mb-5">Certifications</h2>
                    <div class="row">
                        @foreach ($sertifikats as $ser)
                            <img src="{{$src.$ser->foto}}" class="img-fluid mx-auto" alt="Responsive image">    
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @endsection
        @section('script')
            @stack('klien-script')
            <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
            <script>
                $('#arrow').hide();
            </script>
        @endsection