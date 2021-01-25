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

@push('klien-first')
{{-- ini dari push klien first     --}}
    <div class="owl-carousel my-5 py-3" id=first>
        <!-- <div class="col-md-6"> -->
        @foreach($kliensFirst as $kF)
            <div class="h-50 w-50"><img src="{{$src.$kF->foto}}" class="img-fluid" alt="Responsive image">
            </div>
        @endforeach
        <!-- </div> -->
        <!-- <div class="row mx-auto"> -->

        <!-- </div> -->
    </div>
@endpush

@push('klien-script')
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript">
        $(".owl-carousel#first").owlCarousel({
                items: 6,
                rtl:true,
                loop: true,
                margin: 20,
                autoplay: true,
                slideTransition: 'linear',
                autoplayTimeout: 1500,
                autoplaySpeed: 3000,
                autoplayHoverPause: false
        });
    </script>
@endpush