@extends('pages.blog.layout')
@section('title','Blog')
@section('style')
    
@endsection
@section('content')
<div class="my-5 mx-5">
    @isset($blogs)
        <br>
        <div class="row">
            @foreach ($blogs as $b)
                <div class="col-md-6">
                    <a href="{{route('blog.detail', $b->id)}}"><img src="{{ $src.$b->foto }}" class="img-fluid my-2" alt="Responsive image"></a>
                    <br>
                    <div class="">
                        <a href="{{route('blog.detail', $b->id)}}" class="text-dark">
                            <h2 class="d-inline-block text-truncate w-75" style="">{{$b->judul}}</h2>
                        </a>
                    </div>
                    <div class="my-2">
                        <a class="p-1 bg-info text-white text-capitalize text-decoration-none" 
                            href="{{route('blog.kategori', $b->kategori)}}">{{$b->kategori}}</a>
                            &nbsp&nbsp<span class="text-secondary"><small>{{Carbon\Carbon::parse($b->tanggal_terbit)->isoFormat('MMMM D, Y') }}</small></span>
                    </div>
                    <span class="d-inline-block text-truncate text-secondary w-75" style="">{!!$b->pembukaan!!}</span>
                </div>
            @endforeach
        </div>
    @endisset
    @isset($blog_kategori_nav)
        <br>
        <div class="row">
            @foreach ($blog_kategori_nav as $bkv)
                <div class="col-md-6">
                    <img src="{{ $src.$bkv->foto }}" class="img-fluid my-2" alt="Responsive image">
                    <br>
                    <div class="">
                        <a href="{{route('blog.detail', $bkv->id)}}" class="text-dark">
                            <h2 class="d-inline-block text-truncate w-75" style="">{{$bkv->judul}}</h2>
                        </a>
                    </div>
                    <div class="my-2">
                        <a class="p-1 bg-info text-white text-capitalize text-decoration-none" href="{{route('blog.kategori', $bkv->kategori)}}">{{$bkv->kategori}}</a>
                        &nbsp&nbsp<span class="text-secondary"><small>{{Carbon\Carbon::parse($bkv->tanggal_terbit)->isoFormat('MMMM D, Y') }}</small></span>
                    </div>
                    <span class="d-inline-block text-truncate text-secondary w-75" style="">{!!$bkv->pembukaan!!}</span>
                </div>
            @endforeach
        </div>
    @endisset
    @isset($blog_detail)
        @foreach ($blog_detail as $bd)
            <div class="col-md-7">
                <img src="{{ $src.$bd->foto }}" class="img-fluid my-2" alt="Responsive image">
                <br>
                <div class="my-2">
                    <a class="p-1 bg-info text-white text-capitalize text-decoration-none" href="{{route('blog.kategori', $bd->kategori)}}">{{$bd->kategori}}</a>
                    &nbsp&nbsp<span class="text-secondary"><small>{{Carbon\Carbon::parse($bd->tanggal_terbit)->isoFormat('MMMM D, Y') }}</small></span>
                </div>
                <p class="" style="">{{$bd->judul}}.</p>
                <h5>{!!$bd->pembukaan!!}</h5>
                <hr>
                <p>{!!$bd->isi!!}</p>
            </div>
        @endforeach
    @endisset
</div>    
@endsection
@section('script')
    
@endsection