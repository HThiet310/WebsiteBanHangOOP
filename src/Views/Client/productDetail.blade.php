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
                <img id="img" src="{{asset('assets/client/src/img/product-3.webp')}}" width="100%" alt="">
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
            <p>Lightweight Jacket</p>
            <h4>$58.79</h4>
            <p>Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligu
                la. Mauris consequat ornare feugiat.</p>


            <div class="option-product">
                <form action="" onsubmit=" return validate()">
                    <table>
                        <tr>
                            <td>
                                Size
                            </td>
                            <td>
                                <select id="size">
                                    <option value="0">Choose an option</option>
                                    <option value="1">Size S</option>
                                    <option value="2">Size M</option>
                                    <option value="3">Size L</option>
                                    <option value="4">Size XL</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Color</td>
                            <td>
                                <select id="color">
                                    <option value="0">Choose an option</option>
                                    <option value="1">Red</option>
                                    <option value="2">Blue</option>
                                    <option value="3">White</option>
                                    <option value="4">Gray</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <button>-</button>
                                <input type="number" min="0">
                                <button>+</button>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="" value="ADD TO CART" id="a">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>



            <div class="icon-product">
                <i class='bx bxs-heart'></i>
                <i class='bx bxl-facebook-circle'></i>
                <i class='bx bxl-twitter'></i>
                <i class='bx bxl-google-plus'></i>
            </div>
            <div class="close">
                <i class='bx bx-x-circle bx-tada'></i>
            </div>
        </div>
    </div>



</div>
<script src="src/js/product.js"></script>
@endsection
