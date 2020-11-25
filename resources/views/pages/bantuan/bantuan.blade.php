@extends('layout.app')
@section('style')
<style>
.help {
    font-size: 150%;
}

.callus {
    font-size: 100%;
}
</style>
@endsection
@section('title','Hubungi Kami | Tanda Tangan Elektronik')
@section('content')
<!-- header -->
<div class="mb-auto mt-md-n5 ">
    <div class="hero h-100">
        <div class="my-5 text-center text-white font-weight-bold container justify-content-center">
            <h5 class="mt-5 display-4">Hai, Ada yang Bisa Kami Bantu?
            </h5>
            <p class="my-5 py-5 help">Klik tombol
                <a class="callus btn btn-link bg-light text-danger rounded border-0">Hubungi Kami</a>
                memulai bantuan
            </p>
        </div>
    </div>
    <!-- /.hero__bg -->

    <!-- .container -->
</div>
<!-- hero -->

<!-- /.section--wrapper -->
</div>
<!-- /.container -->
@endsection
@section('script')
<script>
$('#arrow').hide();
</script>
@endsection