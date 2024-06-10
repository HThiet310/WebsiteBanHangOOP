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
        @foreach ($categories as $category)
        <div data-aos="fade-left" class="content-text-img">
            <div class="content-img">
                <img id="image1" src="{{ asset($category['img_thumbnail']) }}" alt="">
            </div>
            <div class="text-content">
                <div class="text-content-1">
                    <h2>{{ $category['name'] }}</h2>
                </div>
                <div class="content-text-2">
                    <a href="{{ url('categories/' . $category['id']) }}">
                        <h3>Shop Now</h3>
                    </a>
                    <span></span>
                </div>
            </div>
        </div>

        @endforeach


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
            <div class="item-image-product" data-aos="fade-up">
                <div class="test">
                    <!-- test link ảnh tạm thời -->
                    <a href="{{ url('product/' . $product['id']) }}"><img src="{{ asset($product['img_thumbnail']) }}" width="280px" height="300px" alt=""></a>
                </div>
                <p><a onclick="showProduct()" href="{{ url('cart/add') }}?quantity=1&productID={{ $product['id'] }}" >Thêm vào giỏ hàng</a></p>
                <div class="name-item-image-product">
                    <div class="price-name-item-image-product">
                        <p><a href="{{ url('product/' . $product['id']) }}">{{ $product['name'] }}</a></p>
                        <p>{{ $product['price_regular'] }}</p>
                    </div>
                    <div class="heart-name-item-image-product">
                        <i id="bxs" onclick="addHeart()" class='bx bxs-heart'></i>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        @if ($totalPage > 1)
        <div class="d-flex justify-content-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    @if ($page > 1)
                    <li class="page-item">
                        <a class="page-link linkm" href="{{ url() }}?page={{ $page - 1 }}">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    @endif

                    <?php for ($i = 1; $i <= $totalPage; $i++) : ?>

                        <li class="page-item"><a class="page-link linkm" href="{{ url() }}?page={{ $i }}">
                                <?= $i ?>
                            </a>
                        </li>

                    <?php endfor ?>

                    <?php if ($page < $totalPage) : ?>

                        <li class="page-item">
                            <a class="page-link linkm" href="{{ url() }}?page={{ $page + 1 }}">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>

                    <?php endif ?>
                </ul>
            </nav>
        </div>
        @endif
    </ul>
</nav>


<div class="btn-product">
    <a href="{{ url('product') }}">LOAD MORE</a>
</div>
</div>

</div>
@endsection