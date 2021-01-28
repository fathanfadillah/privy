@extends('layout.app')
@section('style')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
    integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

<style>
#searchBar {
    transform: translate(-50%, -50%);
    transition: all 1s;
    width: 50px;
    height: 50px;
    background: white;
    box-sizing: border-box;
    border-radius: 25px;
    border: 4px solid white;
}

#searchInput {
    width: 100%;
    height: 42.5px;
    line-height: 30px;
    outline: 0;
    border: 0;
    display: none;
    font-size: 1em;
    border-radius: 20px;
    padding: 20px;
}

.fa {
    box-sizing: border-box;
    padding: 14px;
    width: 42.5px;
    height: 42.5px;
    position: absolute;
    top: 0;
    right: 0;
    border-radius: 50%;
    color: #e52e2b;
    text-align: center;
    font-size: 1.2em;
    transition: all 1s;
}

#searchBar:hover {
    width: 200px;
    cursor: pointer;
}

#searchBar:hover #searchInput {
    display: block;
}

#searchBar:hover .fa {
    background: #e52e2b;
    color: white;
}

/* 
#searchDiv {
    margin-left: 170px;
} */
</style>
@endsection
@section('title','Frequently Asked Question')
@section('content')
<!-- header -->
<div class="mb-auto mt-md-n5 mb-md-5">
    <div class="hero">
        <div class="container">
            <div class="text-white text-center">
                <h4 class="display-4 font-weight-bold my-4">F.A.Q</h4>
                <h5 class="font-weight-bold my-3">Frequently Asked Question
                </h5>
                <div class="row">
                    <div class="col-sm-5 mx-auto pl-5 py-4">
                        <div id="searchDiv" class="">
                        <form id="searchBar" action="{{route('faq.search')}}" class="mx-auto" method="GET">
                                <input id="searchInput" type="search" name="search" placeholder="Search . . .">
                                <i class="fa fa-search"></i>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.hero__bg -->
        <!-- .container -->
    </div>
    <!-- hero -->

    <div class="container my-5">
        <div class="row mx-auto justify-content-center">
            @isset($faqstop)
            
            <div class="col-md-6">

                <div class="row p-5">
                    <div class="d-flex col-md-12">
                        <div class="">
                            <h2 class="font-weight-bold">Top Asked Question</h2>
                        </div>
                        <div class="ml-auto">
                            <span>
                                <a href="faq/category/{{$faqstop->pluck('kategori')[1]}}" class="align-items-center text-danger ">see all</a>
                            </span>
                        </div>
                    </div>
                    <div id="accordionTop">
                        {{-- @php($i=1) --}}
                        @foreach($faqstop->take(10) as $index => $ft)
                        {{-- @if ($i<4) --}}
                        <div class="card my-3">
                            <div class="card-header bg-white border-0 h-25 rounded-lg" id="heading{{ $index }}">

                                <div class="row">
                                    <div class="col-md-10 font-weight-bold">{{$ft->question}}</div>
                                    <div class="col-md-2">
                                        <a class="btn btn-link collapsed text-primary float-right"
                                            data-toggle="collapse" data-target="#collapseTop{{ $index }}"
                                            aria-expanded="false" aria-controls="collapseTop">
                                            <ion-icon name="chevron-down-outline"></ion-icon>
                                        </a></div>

                                </div>
                            </div>
                            <div id="collapseTop{{ $index }}" class="collapse" aria-labelledby="heading{{ $index }}"
                                data-parent="#accordionTop">
                                <div class="card-body">{!!$ft->answer!!}</div>
                            </div>
                        </div>                                
                        {{-- @endif --}}
                            {{-- @php($i++) --}}
                        @endforeach

                    </div>
                </div>

            </div>
            @endisset
            @isset($faqsen)
            <div id="right" class="col-md-6 p-5">
                <div class="row">
                    <div class="d-flex col-md-12">
                        <div class="">
                            <h2 class="font-weight-bold">Enterprise</h2>
                        </div>
                        <div class="ml-auto">
                            <span>
                                <a href="faq/category/{{$faqsen->pluck('kategori')[1]}}" class="align-items-center text-danger ">see all</a>
                            </span>
                        </div>
                    </div>
                    <div id="accordionEn">
                        @foreach($faqsen->take(5) as $index => $fe)
                        <div class="card my-3">
                            <div class="card-header bg-white border-0 h-25 rounded-lg" id="heading{{ $index }}">

                                <div class="row">
                                    <div class="col-md-10 font-weight-bold">{{$fe->question}}</div>
                                    <div class="col-md-2">
                                        <a class="btn btn-link collapsed text-primary float-right"
                                            data-toggle="collapse" data-target="#collapseEnterprise{{ $index }}"
                                            aria-expanded="false" aria-controls="collapseEnterprise">
                                            <ion-icon name="chevron-down-outline"></ion-icon>
                                        </a></div>

                                </div>
                            </div>
                            <div id="collapseEnterprise{{ $index }}" class="collapse"
                                aria-labelledby="heading{{ $index }}" data-parent="#accordionEn">
                                <div class="card-body">{!!$fe->answer!!}</div>
                            </div>
                        </div>
                        <!--  -->
                        @endforeach

                    </div>

                </div>
                @endisset
                @isset($faqsgen)
                <div class="row my-3">
                    <div class="d-flex col-md-12">
                        <div class="">
                            <h2 class="font-weight-bold">General</h2>
                        </div>
                        <div class="ml-auto">
                            <span>
                                <a href="faq/category/{{$faqsgen->pluck('kategori')[1]}}" class="align-items-center text-danger ">see all</a>
                            </span>
                        </div>
                    </div>
                    <div id="accordionGen">

                        @foreach($faqsgen->take(5) as $index => $fg)
                        <div class="card my-3">
                            <div class="card-header bg-white border-0 h-25 rounded-lg" id="headingEnterprise">

                                <div class="row">
                                    <div class="col-md-10 font-weight-bold">{{$fg->question}}</div>
                                    <div class="col-md-2">
                                        <a class="btn btn-link collapsed text-primary float-right"
                                            data-toggle="collapse" data-target="#collapseGeneral{{ $index }}"
                                            aria-expanded="false" aria-controls="collapseGeneral">
                                            <ion-icon name="chevron-down-outline"></ion-icon>
                                        </a></div>

                                </div>
                            </div>
                            <div id="collapseGeneral{{ $index }}" class="collapse" aria-labelledby="headingGeneral"
                                data-parent="#accordionGen">
                                <div class="card-body">{!!$fg->answer!!}</div>
                            </div>
                        </div>
                        <!--  -->
                        @endforeach
                    </div>
                </div>
                @endisset
            </div>
        </div>
    </div>

    {{-- faq search --}}
    <div class="container">
        @isset($faqs)
        @foreach($faqs as $index => $fs)
        <div id="accordionSearch">
            <div class="card my-3">
                <div class="card-header bg-white border-0 h-25 rounded-lg" id="heading{{$index}}">
                    <div class="row">
                        <div class="col-md-10 font-weight-bold">{{$fs->question}}</div>
                        <div class="col-md-2">
                            <a class="btn btn-link collapsed text-primary float-right"
                                data-toggle="collapse" data-target="#collapseSearch{{$index}}"
                                aria-expanded="false" aria-controls="collapseSearch">
                                <ion-icon name="chevron-down-outline"></ion-icon>
                            </a></div>
                    </div>
                </div>
                <div id="collapseSearch{{$index}}" class="collapse" aria-labelledby="heading{{$index}}"
                    data-parent="#accordionSearch">
                    <div class="card-body">{!!$fs->answer!!}</div>
                </div>
            </div>
        </div>
        @endforeach
        @endisset
    </div>
    {{-- faq search --}}

    {{-- faq see all --}}
    <div class="container">
        @isset($faqc)
        <h1 class="font-weight-bold mb-5">{{$faqc->pluck('kategori')[1]}}</h1>
        @foreach($faqc as $index => $fc)
        <div id="accordionSearch">
            <div class="card my-3">
                <div class="card-header bg-white border-0 h-25 rounded-lg" id="heading{{$index}}">
                    <div class="row">
                        <div class="col-md-10 font-weight-bold">{{$fc->question}}</div>
                        <div class="col-md-2">
                            <a class="btn btn-link collapsed text-primary float-right"
                                data-toggle="collapse" data-target="#collapseSearch{{$index}}"
                                aria-expanded="false" aria-controls="collapseSearch">
                                <ion-icon name="chevron-down-outline"></ion-icon>
                            </a></div>
                    </div>
                </div>
                <div id="collapseSearch{{$index}}" class="collapse" aria-labelledby="heading{{$index}}"
                    data-parent="#accordionSearch">
                    <div class="card-body">{!!$fc->answer!!}</div>
                </div>
            </div>
        </div>
        @endforeach
        @endisset
    </div>
    {{-- faq see all --}}
    <!-- /.section--wrapper -->
</div>
<!-- /.container -->
@endsection
@section('script')
<script>
$('#arrow').hide();
$("#right").addClass("border-left");
$(window).resize(function() {

    if (window.matchMedia('(max-width: 768px)').matches) {
        $("#right").removeClass("border-left");
        $("#right").addClass("border-top");
    }
    if (window.matchMedia('(min-width: 768px)').matches) {
        $("#right").removeClass("border-top");
        $("#right").addClass("border-left");
    }
});
</script>
@endsection