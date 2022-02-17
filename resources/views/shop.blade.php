<x-app-layout>
    <x-slot name="style">
        <link rel="stylesheet" href="{{ asset('css/shop.css') }}">
    </x-slot>

    <x-slot name="js">
        <script src="{{ asset('js/shop.js') }}" defer></script>
    </x-slot>

    <x-slot name="search">
        {{ $search }}
    </x-slot>
    {{---------------------
            $slot
        --------------------}}
    <div class="container mt-5 mb-3">
        <div class="row">
            <div class="col-12 col-lg-3">
                <div class="row">
                    <div class="col-12">
                        <div class="card shadow">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold text-center">
                                    Categories
                                </h5>
                                <hr>

                                <div class="close-btn" onclick="t_aside()"></div>
                                <div class="filter">
                                    <div class="category">

                                        <ul style="list-style: none;">
                                            @foreach ($category as $item)
                                                <li style="color:{{$item->id == $cate ? '#3da8f3':''}}" onclick="updateQuery('category', {{$item->id}})">{{ ucfirst($item->title) }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <ul>
                                    <hr>
                                    <h5 class="card-title font-weight-bold text-center">
                                        Sort
                                    </h5>
                                    <hr>
                                    <div class="sort">

                                        <ul style="list-style: none;"><b>
                                            <li style="color:{{'ASC' == $sort ? 'black':''}}," onclick="updateQuery('sort', 'ASC')">Price: LOW to HIGH</li>
                                            <li style="color:{{'DESC' == $sort ? '#3da8f3':''}}" onclick="updateQuery('sort', 'DESC')">Price: HIGH to LOW</li></b>
                                        </ul>
                                    </div>
                                    <main class="_container">
                                        @if ($products->isNotEmpty())
                                            <div>
                                                <div class="filter-sort">
                                                    <button class="btn btn-dark btn-sm btn-block">Filter</button>
                                                    <button class="btn btn-dark btn-sm btn-block">Sort</button>
                                                </div>
                                            </div>
                                    @endif
                                </ul>
                                <hr>
                                <h5 class="card-title text-center font-weight-bold">Popular Tags</h5>
                                <hr>
                                <span class="badge badge-new badge-pill">All</span>
                                <span class="badge badge-new badge-pill">Men</span>
                                <span class="badge badge-new badge-pill">Women</span>
                                <span class="badge badge-new badge-pill">Kids</span>
                                <span class="badge badge-new badge-primary">T-shirts</span>
                                <span class="badge badge-new badge-pill">Pants</span>
                                <br>

                                <span class="badge badge-new badge-pill">Shoes</span>
                                <span class="badge badge-new badge-pill">Shorts</span>
                                <span class="badge badge-new badge-pill">socks</span>




                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-9 mt-4 mt-lg-0">
                {{--<div class="row">--}}
                {{--<div class="col-12">--}}
                {{--<div class=" mb-4 bg-light">--}}
                {{--<div class="">--}}
                {{--<input type="search" class="text-center form-control" placeholder="Search"--}}
                {{--style="width: 100%; margin: 0; padding: 0">--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}

                <div class="row mb-4">
                    <div class="col-12">
                        <div class="card shadow">
                            <div class="card-body">
                                <p class="m-0 text-center font-weight-bold h5">
                                    New Arrivals
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @if ($products->isNotEmpty())
                            @each('components.product', $products, 'product')

                    @else
                        <div style="display: grid;place-items:center">
                            <img style="max-width: 100%" src="{{ asset('assets/images/img_1.png') }}" alt="">
                        </div>
                    @endif
                </div>


            </div>
        </div>
    </div>
    {{---------------------
            $slot
        --------------------}}
</x-app-layout>
