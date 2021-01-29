@extends('pages.blog.layout')
@section('title','Blog')
@section('style')
    
@endsection
@section('content')
    <div class="mx-5 my-5">
        <h1 class="">Case Study</h1>
        <div class="row">
            @foreach ($blogs as $b)
                <div class="col-md-6">
                    <img src="{{ $src.$b->foto }}" class="img-fluid my-2" alt="Responsive image">
                    <br>
                    <div class="my-2">
                        <a class="p-1 bg-info text-white text-capitalize">{{$b->kategori}}</a>&nbsp&nbsp<span class="text-secondary"><small>{{Carbon\Carbon::parse($b->tanggal_terbit)->isoFormat('MMMM D, Y') }}</small></span>
                    </div>
                    <p class="d-inline-block text-truncate text-secondary w-75" style="">{{$b->judul}}.</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
@section('script')
    
@endsection