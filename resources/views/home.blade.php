<x-app-layout>
    <x-slot name="style">
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    </x-slot>

{{---------------------
        $slot
    --------------------}}

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('img/hero-1.png') }}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('img/hero-2.png') }}" alt="Second slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!--slider end-->
    <section class="trend">
        <div class="container">
            <div class="row">

                <div class="col-md-7">
                    <div class="t_img_text">
                        <img src="{{ asset('img/trend_woman.jpg') }}" alt="woman_trend" class="img-fluid ">
                        <h3>Hot Collection</h3>
                        <h1>New Trend For Women</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur mollis <br> neque eu erat aliquet posuere. Curabitur quis placerat nulla,<br>nec vulputate arcu</p>
                        <button type="button" class="btn" data-toggle="button" aria-pressed="false">
                            <a href="{{ route('shop') }}" >Shop Now</a>
                        </button>
                    </div>
                </div>

                <div class=" col-md-5 ">
                    <div class="t_img">
                        <div class="hovereffect">
                            <img src="{{ asset('img/trend_man1.jpg') }}" alt="trend_man" class="img-fluid" >
                            <div class="overlay">
                                <a class="info" href="#">View Collection</a>
                            </div>
                        </div>
                        <div class="b_img">
                            <div class="hovereffect">
                                <img src="{{ asset('img/trend_man2.jpg') }}" alt="trend_man" class="img-fluid">
                                <div class="overlay">
                                    <a class="info" href="{{ route('shop') }}">View Collection</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--featured item start-->
    <section class="feature">
        <div class="container">
            <!--1st row start-->
            <div class="row">
                <div class="col-lg-5 col-sm-4  cm5">
                    <div class="box1">
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4  f_text">
                    <h4>Featured Items</h4>
                </div>
                <div class="col-lg-5 col-sm-4  cm5">
                    <div class="box1">
                    </div>
                </div>
            </div>
            <!--1st row end-->

            <!--2nd row start-->
            <div class="row">
                <div class="   offset-lg-4 col-lg-3 offset-md-3 col-md-4 offset-sm-2  col-sm-4  col-col-10  ">
                    <nav class="navbar navbar-expand">
                        <div class="fe_menu" >
                            <ul class="navbar-nav">
                                <li class="nav-item  active">
                                    <a class="nav-link" href="#">All</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Men</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Women</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">kids</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <!--2nd row end-->
            <!--3rd row start-->
            <div class="row">

                @each('components.product', $products, 'product')
            </div>
            <!--3rd row end-->
        </div>
    </section>
    <!--featured item end-->
    <!--comments start-->
    <section class="comments">
        <div class="container">
            <div class="row">
                <div class="col-md-6 cp">
                    <div class="p_comments">
                        <img src="{{ asset('img/new.png') }}" alt="comments" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6 cp">
                    <div class="p_comments">
                        <img src="{{ asset('img/img_1.png') }}" height="400px" alt="comments" class="img-fluid">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--comments end-->
    <!--trending item start-->
    <section class="trend_item">
        <div class="container">
            <!--1st row start-->
            <div class="row">
                <div class="col-lg-5 col-sm-4 cm5">
                    <div class="box1">
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4 f_text">
                    <h4>Trending Items</h4>
                </div>
                <div class=" col-lg-5 col-sm-4 cm5">
                    <div class="box1">
                    </div>
                </div>
            </div>
            <!--1st row end-->

            <!--2nd row start-->
            <div class="row">
                @each('components.product', $products, 'product')
            </div>
            <div class="row ">
                <div class=" col text-center ">
                    <a type="submit" class="btn trending_button" data-toggle="button" herf="{{ route('shop') }}" >LOAD MORE</a>
                </div>
            </div>
            <!--3rd row end-->
        </div>

    </section>
    <!--trending item end-->
    <!--appraisal start-->
    <section class="appraisal">
        <div class="container">

            <div class="row ">
                <div class="col-md-1 mx-auto text-center ">
                    <div class="app_icon">
                        <img src="{{asset('img/app_icon.png')}}" alt="icon" class="img-fluid">
                    </div>
                </div> .
            </div>

            <div class="row ">
                <div class="col-lg-6 col-sm-8 mx-auto text-center">
                    <div class="app_text">
                        <p>“Nunc vulputate odio vitae sapien euismod rhoncus. Vestibulum ante orci,  efficitur a augue. Quisque placerat laoreet lorem”</p>
                    </div>
                </div>
            </div>

            <div class="row ">
                <div class="col-md-2 mx-auto text-center">
                    <div class="profile">
                        <img src="{{asset('img/profile.jpg')}}" alt="man" class="img-fluid">
                        <br><br>
                        <h5>MD SHAHIN ALAM</h5>
                        <h6>CEO of TTCM</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--appraisal end-->

    <!--blog start-->
    <section class="blog">
        <div class="container">
            <!--1st row start-->
            <div class="row">
                <div class="col-lg-5 col-sm-4 cm5">
                    <div class="box1 ">
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4 f_text">
                    <h4>Latest Blog</h4>
                </div>
                <div class="col-lg-5 col-sm-4 cm5">
                    <div class="box1 ">
                    </div>
                </div>
            </div>
            <!--1st row end-->
            <!--2nd row start-->
            <div class="row">
                <!--blog singal1 start-->
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="bi_img_head">
                                <img src="{{asset('img/blog1.jpg')}}" alt="woman" class="img-fluid rounded mx-auto d-block">
                                <h2>Some Headline Here</h2>
                                <p>Vivamus ultrices ut erat ut ullamcorper. Sed sem est, pellentesque auctor malesuada in, sollicitu-<br>pulvinar metus. Aliquam scelerisque aliquet faucibus</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 blog_btn  ">
                            <button type="submit" class="btn bl_btn">READ MORE</button>
                        </div>
                    </div>
                </div>
                <!--blog singal1 end-->
                <!--blog singal2 start-->
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="bi_img_head">
                                <img src="{{asset('img/blog2.jpg')}}" alt="woman" class="img-fluid rounded mx-auto d-block">
                                <h2>Some Headline Here</h2>
                                <p>Vivamus ultrices ut erat ut ullamcorper. Sed sem est, pellentesque auctor malesuada in, sollicitu-<br>
                                    pulvinar metus. Aliquam scelerisque aliquet faucibus</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 blog_btn">
                            <button type="submit" class="btn bl_btn">READ MORE</button>
                        </div>
                    </div>
                </div>
                <!--blog singal2 end-->
                <!--blog singal3 start-->
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="bi_img_head">
                                <img src="{{asset('img/blog3.jpg')}}" alt="woman" class="img-fluid rounded mx-auto d-block ">
                                <h2>Some Headline Here</h2>
                                <p>Vivamus ultrices ut erat ut ullamcorper. Sed sem est, pellentesque auctor malesuada in, sollicitu-<br>pulvinar metus. Aliquam scelerisque aliquet faucibus</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 blog_btn">
                            <button type="submit" class="btn bl_btn">READ MORE</button>
                        </div>
                    </div>
                </div>
                <!--blog singal3 end-->
            </div>
            <!--2nd row end-->
        </div>

    </section>
    <section class="brand">
        <div class="container">
            <!--1st row start-->
            <div class="row">
                <div class="col-lg-5 col-sm-4  cm5">
                    <div class="box1">
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4 f_text">
                    <h4>Shop By Brand</h4>
                </div>
                <div class="col-lg-5 col-sm-4 cm5">
                    <div class="box1 ">
                    </div>
                </div>
            </div>
            <!--1st row end-->
            <!--2nd row start-->
            <div class="row justify-content-around">
                <div class="col-lg-12 ">
                    <div class="brand_img">
                        <ul class="list-inline">
                            <li class="list-inline-item"><img src="{{asset('img/brand.png')}}" alt="brand"></li>
                            <li class="list-inline-item"><img src="{{asset('img/brand.png')}}" alt="brand"></li>
                            <li class="list-inline-item"><img src="{{asset('img/brand.png')}}" alt="brand"></li>
                            <li class="list-inline-item"><img src="{{asset('img/brand.png')}}" alt="brand"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--2nd row end-->
        </div>
    </section>
    <!--blog end-->
    {{---------------------
            $slot
        --------------------}}
</x-app-layout>
