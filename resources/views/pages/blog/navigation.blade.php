<div class="ml-5 my-5">
    <img src="{{asset('../images/logo/privyid-logo-colored.png')}}" alt="" class="h-25 w-25">
</div>
<nav class="pl-5 navbar navbar-expand-lg navbar-light border">
    <button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="ml-5 collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="mr-2 nav-item">
          <a class="nav-link" href="{{route('blog')}}">Home</a>
        </li>
        @foreach ($blog_kategoris as $bk)
          <li class="mx-2 nav-item">
            <a class="nav-link text-capitalize" href="{{route('blog.kategori', $bk->kategori)}}">{{$bk->kategori}}</a>
          </li>    
        @endforeach
      </ul>
    </div>
</nav>