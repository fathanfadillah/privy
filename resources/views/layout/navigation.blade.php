<nav class="navd sticky-top navbar navbar-expand-lg navbar-light mt-md-n2">
    <a class="navbar-brand" href="{{url('/')}}"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
        aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a id="nav-link" class="nav-link font-weight-bold" href="{{ route('tentangkami') }}">Tentang Kami</a>
            </li>
            <li class="nav-item">
                <a id="nav-link" class=" nav-link font-weight-bold" href="{{ route('dokumentasiapi') }}">Dokumentasi
                    API</a>
            </li>
            <li class="nav-item">
                <a id="nav-link" class="nav-link font-weight-bold" href="{{ route('verifikasipdf') }}">Verifikasi
                    PDF</a>
            </li>
            <li class="nav-item">
                <a id="nav-link" class=" nav-link font-weight-bold" href="{{ route('kontakbisnis') }}">Kontak Bisnis</a>
            </li>
            <li class="nav-item">
                <a id="nav-link" class="nav-link font-weight-bold" href="{{ route('faq') }}">FAQ</a>
            </li>
            <li class="nav-item">
                <a id="nav-link" class=" nav-link font-weight-bold" href="{{ route('bantuan') }}">Bantuan</a>
            </li>
            <li class="nav-item">
                
            </li>

                @guest
                    <li class="nav-item">
                        <a id="btn-link" class="btn btn-danger font-weight-bold d-flex align-items-center"
                        href="{{ route('login') }}">
                            <span id="signin">Sign In</span>
                            <ion-icon id="arrow" name="arrow-forward-outline" class="ml-2 font-weight-bolder"></ion-icon>
                        </a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="dropdown-toggle btn btn-danger font-weight-bold d-flex align-items-center" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item btn-danger" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest

        </ul>
    </div>
</nav>

