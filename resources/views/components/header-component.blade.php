<div>
    <div class="header-bottom">
        <div class="container">
            <nav class="navbar navbar-expand-xl">
                <a class="site-logo site-title" href="{{url('/')}}"><img src="{{asset($setting['logo']??'')}}" alt="site-logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="menu-toggle"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav main-menu ml-auto">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{route('blogs')}}">Blog</a></li>

                        <li><a href="{{route('results')}}">results</a></li>

                        <li><a href="{{route('index')}}#contact_here">contact us</a></li>
                    </ul>

                </div>
            </nav>
        </div>
    </div><!-- header-bottom end -->
</div>
