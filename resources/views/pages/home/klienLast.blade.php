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

@push('klien-last')
{{-- ini push dari klien last --}}
    <div class="owl-carousel my-5 py-3" id=last>
        <!-- <div class="col-md-6"> -->
        @foreach($kliensLast as $kL)
            <div class="h-50 w-50"><img src="{{$src.$kL->foto}}" class="img-fluid" alt="Responsive image">
            </div>
        @endforeach
        <!-- </div> -->
        <!-- <div class="row mx-auto"> -->

        <!-- </div> -->
    </div>
@endpush

@push('klien-script')
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
    <script type="text/javascript">
                    $(".owl-carousel#last").owlCarousel({
                        items: 6,
                        loop: true,
                        rtl: false,
                        margin: 20,
                        autoplay: true,
                        slideTransition: 'linear',
                        autoplayTimeout: 1500,
                        autoplaySpeed: 3000,
                        autoplayHoverPause: false
                    });
    </script>
@endpush