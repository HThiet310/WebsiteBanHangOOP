@extends('layouts.master')

@section('title')
    Product-list
@endsection

@section('content')
    <div id="main">

        <div class="product">

            <div class="text-product">
                <div class="menu-filter-product">
                    <div class="menu-product">
                        <ul>
                            <li><a href="">All Products</a></li>
                            <li><a href="">Women</a></li>
                            <li><a href="">Men</a></li>
                            <li><a href="">Bag</a></li>
                            <li><a href="">Shoes</a> </li>
                            <li><a href="">Watches</a></li>
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
            <div class="style"></div>

            @foreach ($products as $product)
                <div class="image-product">
                    <div class="item-image-product" data-aos="fade-up">
                        <div class="test">
                            <img src="{{ asset('assets/client/src/img/product-3.webp') }}" width="100%" alt="">
                        </div>
                        <p><a onclick="showProduct()" href="{{ url('product/' . $product['id']) }}">Quick View</a></p>
                        <div class="name-item-image-product">
                            <div class="price-name-item-image-product">
                                <p><a href="{{ url('product/' . $product['id']) }}">{{ $product['name'] }}</a></p>
                                <p>{{ $product['price'] }}</p>
                            </div>
                            <div class="heart-name-item-image-product">

                                <i id="bxs" onclick="addHeart()" class='bx bxs-heart'></i>
                            </div>

                        </div>

                    </div>

                </div>
            @endforeach

            <div class="btn-product" data-aos="zoom-in-right">
                <a href="">LOAD MORE</a>
            </div>
        </div>

    </div>
@endsection
