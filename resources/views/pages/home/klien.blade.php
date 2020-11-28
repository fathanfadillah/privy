@push('klien-style')
<style>
/* klien */
.klien-head {
    font-size: large;
    line-height: 1.7;
}

/* klien */
</style>
@endpush

<div class="owl-carousel my-5 py-3">
    <!-- <div class="col-md-6"> -->
    @foreach($kliens as $k)
        <div class="h-50 w-50"><img src="{{$src.$k->foto}}" alt="">
        </div>
    @endforeach
    <!-- </div> -->
    <!-- <div class="row mx-auto"> -->

    <!-- </div> -->
</div>

@push('klien-script')
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script>
$(".owl-carousel").owlCarousel({
    items: 6,
    loop: true,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 1000,
    autoplayHoverPause: true
});
</script>
@endpush