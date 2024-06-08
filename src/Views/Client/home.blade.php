@extends('layouts.master')

@section('title')
    HomePage
@endsection

@section('content')
    <div class="background">
        <img src="{{ asset('assets/client/src/img/slide1.webp') }}" alt="">
    </div>
    <div id="main">

        <div id="content">

            <div data-aos="fade-up" class="content-text-img">
                <div class="content-img">
                    <img id="image1" src="{{ asset('assets/client/src/img/ads2.jpg') }}" alt="">
                </div>
                <div class="text-content">
                    <div class="text-content-1">
                        <h2>Women</h2>
                        <p>Spring 2018</p>
                    </div>
                    <div class="content-text-2">
                        <h3>Shop Now</h3>
                        <span></span>
                    </div>
                </div>
            </div>


            <div data-aos="fade-left" class="content-text-img">
                <div class="content-img">
                    <img id="image1" src="{{ asset('assets/client/src/img/ads2.jpg') }}" alt="">
                </div>
                <div class="text-content">
                    <div class="text-content-1">
                        <h2>Men</h2>
                        <p>Spring 2018</p>
                    </div>
                    <div class="content-text-2">
                        <h3>Shop Now</h3>
                        <span></span>
                    </div>
                </div>
            </div>


            <div data-aos="fade-up" class="content-text-img">
                <div class="content-img">
                    <img id="image1" src="{{ asset('assets/client/src/img/ads2.jpg') }}" alt="">
                </div>
                <div class="text-content">
                    <div class="text-content-1">
                        <h2>Accessories</h2>
                        <p>New Trend</p>
                    </div>
                    <div class="content-text-2">
                        <h3>Shop Now</h3>
                        <span></span>
                    </div>
                </div>
            </div>

        </div>

        <div class="product">
            <div class="text-product">
                <h3>Product Overview</h3>
                <div class="menu-filter-product">
                    <div class="menu-product">
                        <ul>
                            @foreach ($categories as $category)
                                <!-- Chưa truyền dữ liệu detail cho category -->
                                <li><a href="{{ url('categories/' . $category['id']) }}">{{ $category['name'] }}</a></li>
                            @endforeach

                        </ul>
                    </div>
                    <div class="filter-product">
                        <div class="filter">
                            <i class='bx bx-filter'></i> <span>Filter</span>
                        </div>
                        <div class="search-filter-product">
                            <i class='bx bx-search-alt-2'></i><span>Search</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="image-product">
                @foreach ($products as $product)
                <?php //print_r($product) ?>
                    <div class="item-image-product" data-aos="fade-up">
                        <div class="test">
                            <!-- test link ảnh tạm thời -->
                            <img src="{{ asset('assets/client/src/img/product-3.webp') }}" width="100%" alt="">
                        </div>
                        <p><a onclick="showProduct()" href="{{ url('products/' . $product['id']) }}">Quick View</a></p>
                        <div class="name-item-image-product">
                            <div class="price-name-item-image-product">
                                <p><a href="{{ url('products/' . $product['id']) }}">{{ $product['name'] }}</a></p>
                                <p>{{ $product['price_regular'] }}</p>
                            </div>
                            <div class="heart-name-item-image-product">

                                <i id="bxs" onclick="addHeart()" class='bx bxs-heart'></i>
                            </div>
                        </div>
                    </div>
                @endforeach
                


                {{-- <div class="item-image-product" data-aos="fade-down">
                    <div class="test"><img src=" {{ asset($product['img_thumbnail']) }}" width="100%"
                            alt=""></div>
                    <p><a onclick="showProduct()">Quick View</a></p>
                    <div class="name-item-image-product">
                        <div class="price-name-item-image-product">
                            <p>Esprit Ruffle Shirt</p>
                            <p>$16.64</p>
                        </div>
                        <div class="heart-name-item-image-product">

                            <i id="bxs" onclick="addHeart()" class='bx bxs-heart'></i>
                        </div>

                    </div>

                </div>

                <div class="item-image-product" data-aos="fade-right">
                    <div class="test"><img src="{{ asset('assets/client/src/img/product-3.webp') }}" width="100%"
                            alt=""></div>
                    <p><a onclick="showProduct()">Quick View</a></p>
                    <div class="name-item-image-product">
                        <div class="price-name-item-image-product">
                            <p>Esprit Ruffle Shirt</p>
                            <p>$16.64</p>
                        </div>
                        <div class="heart-name-item-image-product">

                            <i id="bxs" onclick="addHeart()" class='bx bxs-heart'></i>
                        </div>

                    </div>

                </div>


                <div class="item-image-product" data-aos="fade-left">
                    <div class="test"><img src="{{ asset('assets/client/src/img/product-4.webp') }}" width="100%"
                            alt=""></div>
                    <p><a onclick="showProduct()">Quick View</a></p>
                    <div class="name-item-image-product">
                        <div class="price-name-item-image-product">
                            <p>Esprit Ruffle Shirt</p>
                            <p>$16.64</p>
                        </div>
                        <div class="heart-name-item-image-product">

                            <i id="bxs" onclick="addHeart()" class='bx bxs-heart'></i>
                        </div>

                    </div>

                </div> --}}

            </div>


            <div class="btn-product">
                <a href="">LOAD MORE</a>
            </div>
        </div>

    </div>
@endsection
