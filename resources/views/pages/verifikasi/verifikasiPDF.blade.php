@extends('layout.app')
@section('style')
<style>
.hero {
    height: 720px;
}

.card {
    border-radius: 20px;
}

#nav-link {
    border-bottom: solid transparent;
}

#nav-link:hover {
    border-bottom: 1px solid;
    color: white;
}
</style>
@endsection
@section('title','Verfikasi Tanda Tangan Digital bersertifikat')
@section('content')
<!-- header -->
<div class="mb-auto mt-n5">
    <div class="hero">
        <div class="container p-5">
            <div class="card mx-auto rounded-md m-auto col-md-8">
                <div class="">
                    <div class="card-body">
                        <h3 class="text-center py-4">Digital Signature Verification
                        </h3>
                        <form action="{{ route('verifikasipdf.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @error('file')
                                <div class="alert alert-danger">
                                    {{$message }}
                                </div>
                            @enderror
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="input-group my-3 rounded-pill">
                                <div class="custom-file border-0 rounded-pill">
                                    <input type="file" class="custom-file-input @error('file') is-invalid @enderror" id="file" name="file" aria-describedby="" required>
                                    <label class="custom-file-label" for="file">Choose file</label>
                                </div>
                            </div>
                            <button
                                type="submit" class="w-full text-decoration-none btn btn-link btn-lg bg-danger rounded-pill text-white border-0 m-auto">
                                Verify Document
                            </button>
                        </form>
                        
                    </div>
                </div>
            </div>
            <p class="m-3 text-white text-center font-weight-bold"><?php echo date("Y");?> - &#169; Privy</p>
        </div>
    </div>
    <!-- /.hero__bg -->

    <!-- .container -->
</div>
@endsection
@section('script')
<script>
$(document).ready(function() {
    $('footer').hide();
    $('#arrow').hide();
});

$('#file').on('change',function(){
    //get the file name
    var fileName = $(this).val();
    var ext =  fileName.split('\\').pop().split('/').pop();
    //replace the "Choose a file" label
    $(this).next('.custom-file-label').html(ext);
})
</script>
<script>
</script>
@endsection