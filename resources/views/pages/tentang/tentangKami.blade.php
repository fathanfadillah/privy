@extends('layout.app')
@section('title','Tentang Kami')
@section('content')
<!-- header -->
<div class="mb-auto mt-md-n5 mb-md-5">
    <div class="hero h-75">
        <div class="container justify-content-center">
            <h2 class="display-4 text-center text-white font-weight-bold">Tentang Kami</h2>
        </div>
    </div>
    <!-- /.hero__bg -->

    <!-- .container -->
</div>
<!-- hero -->

<div class="container justify-content-center">
    <div class="section--wrapper">
        <div class="grid">
            <div class="row">
                <div class="col-md-12 mx-auto text-center">
                    <div class="row">
                        <div class="col-md-12 mx-auto">
                            PrivyID didirikan di Jakarta pada tahun 2016 dengan misi menghadirkan teknologi yang
                            memberikan identitas tunggal yang terintegrasi
                            secara universal di dunia digital bagi penggunanya. Sebagai perusahaan yang telah terdaftar
                            dan diakui oleh
                            pemerintah Indonesia melalui Kementerian Komunikasi dan Informatika (Kominfo), PrivyID
                            memiliki otoritas untuk
                            menerima pendaftaran, memverifikasi, serta menerbitkan sertifikat elektronik dan tanda
                            tangan elektronik bagi
                            warga negara Indonesia. Seluruh tanda tangan elektronik yang dibuat dengan aplikasi PrivyID
                            memiliki kekuatan
                            dan akibat hukum yang sah selayaknya tanda tangan basah. Keamanan informasi data pengguna
                            aplikasi PrivyID
                            terjamin melalui penggunaan teknologi
                            <i>asymmetric cyrptography.</i>
                        </div>
                    </div>

                    <!-- 	<div class="clearfix"></div> 
              <div class="col-sm-12">
                <h3>PrivyID’s Journey</h3>	
                <div class="col-md-offset-2 col-md-8">
                  <img src="https://privy.id//main/img/5. privyids-journey.png" alt="" class="img-responsive">
                </div>			
              </div> -->

                    <div class="p4"></div>
                    <hr>
                    <div class="col-sm-12">
                        <h3 class="py-4">Pimpinan</h3>

                        <div class="row">
                            @foreach ($pimpinans as $pis)
                            <div class="mx-auto col-md-6 col-xs-4 my-2">
                                <div id="pimpinan"
                                    class="mx-auto my-3">
                                    <img src="{{ $src.$pis->foto }}" class="img-fluid mx-auto" alt="Responsive image" width="200" height="230">
                                </div>
                                <h4>{{$pis->nama}}</h4>
                                <p>{{$pis->jabatan}}</p>
                            </div>
                            @endforeach
                            <!-- <div class="mx-auto col-sm-4  col-xs-4 pb-4 mb-4">
                <img src="https://privy.id/assets.1.7.2/img/abby.png" alt="" width="200" class="pb-3">
                <h4>Guritno Adi Saputra</h4>
                <p>CTO &amp; CO-FOUNDER</p>
              </div> -->
                            <!--					<div class="col-sm-4 col-xs-4">
                    <img src="https://privy.id//main/img/Asset/7. The Pioneers - Ajisatria.png" alt=""  width="200">
                    <h4>Ajisatria Suleiman</h4>
                    <p>PUBLIC POLICY STRATEGIST & CO-FOUNDER</p>
                  </div> -->
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <!-- <div class="col-sm-12">
            <br>
            <div class="row text-center">
              <div class="mx-auto col-sm-4 col-xs-4 pb-4 mb-4">
                <img src="https://privy.id/assets.1.7.2/img/andre.png" alt="" width="180" class="pb-3">
                <h4>Johan Andreas</h4>
                <p>EVP Business Development</p>
              </div>
              <div class="mx-auto col-sm-4 col-xs-4 pb-4 mb-4">
                <img src="https://privy.id/assets.1.7.2/img/khrisna.png" alt="" width="180" class="pb-3">
                <h4>Krishna Chandra</h4>
                <p>EVP Security</p>
              </div>
            </div>
          </div> -->

                </div>
            </div>
        </div>

        <br />
        <br />
        <hr>
        <br />
        <br />
        <div class=""></div>
        <h5 class="text-center">Penghargaan</h5>
        <p class="text-center">Dalam usia muda, PrivyID telah berhasil mendapatkan penghargaan dari berbagai lembaga
            ternama</p>
        <div class="row justify-content-center">
            @foreach ($penghargaans as $ph)
            <div class="col-sm-3">
                <div class="my-5">
                    <img class="img-fluid mx-auto" alt="Responsive image" src="{{ $src.$ph->foto }}">
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- /.section--wrapper -->

<!-- /.container -->
@endsection
@section('script')
<script>
// if ($('#pimpinan').val('img') = '') {
//     $('#pimpinan').attr("src", "{{asset('../images/404.png')}}");
// }
$('#arrow').hide();
</script>
@endsection