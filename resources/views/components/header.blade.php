<header>
    <!--header top start-->
    <div class="header_top">
        <div class="container">

            <nav class="navbar navbar-expand-lg  h_top" >
                <a class="navbar-brand f_shiping" href="#">Free Shipping on All orders Over $75!</a>

                <button class="navbar-toggler btn_top " type="button" data-toggle="collapse" data-target="#nav_top" aria-controls="nav_top" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fab fa-buffer"></i>
                </button>

                <div class="collapse navbar-collapse top_menu" id="nav_top">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ">
                            <a  class="logo-link d-b" href="{{ route('login') }}">
                                @if (auth()->check())
                                    My Account
                                @else
                                    Login
                                @endif
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Wishlist</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="nav_topMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Currency
                            </a>
                            <div class="dropdown-menu" aria-labelledby="nav_topMenuLink">
                                <a class="dropdown-item " href="#">Usd</a>
                                <a class="dropdown-item bg-light" href="#">Eur</a>
                                <a class="dropdown-item" href="#">EGP</a>
                                <a class="dropdown-item bg-light" href="#">AUD</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="notification-link" href="{{ route('cart') }}">
                                <i class="fa fa-shopping-cart" style="font-size:15px; color: purple"></i>  My Carft
                                @auth
                                    @if ($product_count = auth()->user()->carts()->firstOrCreate(['status' => 'N'])->products->sum('pivot.quantity'))
                                        <span class='badge'>{{ $product_count }}</span>
                                    @endif
                                @endauth
                                @guest
                                    {{-- if product is set and is not 0 --}}
                                    @if(request()->cookie('products') && $product_count = array_sum(json_decode(request()->cookie('products'), true)))
                                        <span class='badge'>{{ $product_count }}</span>
                                    @endif
                                @endguest
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!--header top end-->

    <!--header form start-->
    <div class="container">
        <nav class="navbar justify-content-center h_form" >
            <div class="wrapper">
                <form class="ml-auto form-inline" action="{{ route('shop') }}" method="GET">
                    <input class="form-control py-2 rounded-pill mr-1 pr-5" type="search" name="search" placeholder="Search for products..." value="{{ $search ?? '' }}">
                    <span class="input-group-append">
                    <button class="btn rounded-pill border-0 ml-n5" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
                </form>
            </div>
        </nav>
    </div>
    <!--header form end-->

    <!--header bottom start-->
    <div class="header_bottom">
        <div class="container">
            <nav class="navbar navbar-expand-lg h_bottom">
                <a class="navbar-brand logo" href="{{ route('home') }}">
                    <img src="{{ asset('img/logo.png') }}" class="img-fluid logo" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#custom_nav" aria-controls="custom_nav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-angle-double-down hbi"></i>
                </button>
                <div class="collapse navbar-collapse menu" id="custom_nav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Woman</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Man</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Footwear</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Accessories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sales</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!--header bottom end-->
</header>
