<!-- header -->
<header id="site-header" class="header fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg stroke">
            <a class="navbar-brand mr-xl-5 mr-lg-3" href="{{ url('/') }}">
                <span class="fa fa-black-tie"></span> Reprise
            </a>
            <!-- if logo is image enable this
          <a class="navbar-brand" href="#index.html">
              <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
          </a> -->
            <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mx-lg-auto">
                    <li class="nav-item {{ Request::path() == '/' ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item {{ Request::path() == 'about' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('about') }}">About</a>
                    </li>
                    <li class="nav-item {{ Request::path() == 'service' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('service') }}">Service</a>
                    </li>

                    <li class="nav-item mr-lg-5 {{ Request::path() == 'contact' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('contact') }}">Contact</a>
                    </li>
                    <!--//search-right-->
                    <div class="search-right ml-xl-5 mr-xl-0 mr-lg-3 ">
                        <!--/search-form-->
                        <form action="#" method="GET" class="search-box position-relative">
                            <div class="input-search">
                                <input type="search" placeholder="Enter Keyword" name="search" required="required" autofocus=""
                                       class="search-popup">

                                <button type="submit" class="btn search-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </div>
                        </form>
                        <!--//search-form-->
                    </div>
                    <!--/search-right-->
                </ul>
            </div>
            <!-- toggle switch for light and dark theme -->
            <div class="mobile-position">
                <nav class="navigation">
                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox">
                            <div class="mode-container">
                                <i class="gg-sun"></i>
                                <i class="gg-moon"></i>
                            </div>
                        </label>
                    </div>
                </nav>
            </div>
            <!-- //toggle switch for light and dark theme -->
        </nav>
    </div>
</header>
<!-- //header -->
