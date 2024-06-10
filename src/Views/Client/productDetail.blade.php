@extends('layouts.master')

@section('title')
    Product-list
@endsection

@section('content')
<div id="appp">
    <div class="grid">
        <div class="grid-left">
            <img src="src/img/product_Sub1.webp" width="80%" alt="">
            <img src="src/img/product_Sub2.webp" width="80%" alt="">
            <img src="src/img/product_Sub3.webp" width="80%" alt="">
        </div>
        <div class="grid-mid">


            <div class="img">
                <img id="img" src="{{ asset('assets/client/src/img/product-3.webp') }}" width="100%" alt="">
            </div>


            <div class="icon-next-pre">

                <i class='bx bx-exit-fullscreen'></i>

                <div class="next-pre">
                    <i class='bx bx-chevron-left' onclick="pre()"></i>
                    <i class='bx bx-chevron-right' onclick="next()"></i>
                </div>

            </div>



        </div>

        <div class="grid-right">
            <p>{{ $product['name'] }}</p>
            <h4>{{ $product['price_regular'] }}</h4>

            <p>Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligu
                la. Mauris consequat ornare feugiat.</p>



        </div>



    </div>
    <script src="src/js/product.js"></script>
@endsection
