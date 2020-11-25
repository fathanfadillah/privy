@extends('layout.app')
@section('title','Tanda Tangan Elektronik & Digital (Digital Signature)')
@section('content')
  <!-- header -->
<div class="hero hero--big">
    <div class="hero__bg">
      <img src="{{asset('../img/bg_top.jpg')}}" alt="" />
    </div>
    <!-- /.hero__bg -->
    <div class="container">
      <h3 class="h1">Grow your talent with</h3>
      <h2 class="hero__title"><span>Indonesia's Most Promising Fintech Startup<small class="small">*</small></span></h2>
      <br/>
      <a href="career-all.html" class="btn px-4 btn-rounded btn-light text-primary"><strong>See All Open Positions</strong></a>
      <span class="nb-info">* Danamon Entrepreneur Award 2017</span>
    </div>
    <!-- .container -->
  </div>
  <!-- hero -->

<div class="container justify-content-center">
<div class="bg-grey section pb-0">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="features">
            <div class="row">
              <div class="col-lg-12 text-center mb-5">
                <h3 class="font-weight-light">What You Will Get</h3>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 mb-lg-0 mb-5">
                <div class="text-center px-lg-0 px-5 mb-lg-0 mb-5">
                  <img class="mb-4 img-fluid" width="250" src="assets/img/img-career-01.png" alt="">
                  <p class="px-3">Dynamic challenges Leads to Rich Experience</p>
                </div>
              </div>
              <div class="col-lg-4 mb-lg-0 mb-5">
                <div class="text-center px-lg-0 px-5 mb-lg-0 mb-md-5">
                  <img class="mb-4 img-fluid" width="250" src="assets/img/img-career-02.png" alt="">
                  <p class="px-3">Constant Knowledge Building Leads to Unmatched Skills</p>
                </div>
              </div>
              <div class="col-lg-4 mb-lg-0 mb-5">
                <div class="text-center px-lg-0 px-5 mb-lg-0 mb-5">
                  <img class="mb-4 img-fluid" width="250" src="assets/img/img-career-03.png" alt="">
                  <p class="px-3">A Right Dose of Amusement Leads to Mental Well Being</p>
                </div>
              </div><!-- .col-## -->
            </div><!-- .row -->
          </div><!-- .features -->
        </div><!-- .col-## -->
      </div><!-- .row -->
    </div><!-- .container -->
  </div><!-- .section -->
  <!-- end:section -->
</div>
<!-- /.section--wrapper -->

<!-- /.container -->
@endsection
@section('script')
<script>
$('#arrow').hide();
$("hero").css("background","none")
</script>
@endsection