<header>

    <div id="header">

        <div class="sub-nav" id="nav" style="background-color: rgb(255, 255, 255); top: 0px; padding: 10px 0px 5px; box-shadow: gray 0px 2px 10px;">
            <div class="nav">
                <div class="photo-logo">
                    <a href="{{ asset('') }}"><img src="{{ asset('assets/client/src/img/logo.webp') }}" style="cursor: pointer;" alt="" /></a>
                </div>
                <!-- dùng thẻ nav -->
                <nav>
                    <div class="list-menu">
                        <ul>
                            <li>
                                <a href="{{ asset('') }}" id="home"> Home
                                    <ul class="sub-menu">
                                        <li><a href="">Homepage 1</a></li>
                                        <li><a href="">Homepage 1</a></li>
                                        <li><a href="">Homepage 1</a></li>
                                    </ul>
                                </a>
                            </li>
                            <li><a href="{{ url('products') }}">Shop</a></li>
                            <li><a href="features.html">Features</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="{{ url('about') }}">About</a></li>
                            <li><a href="{{ url('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                </nav>
                <div class="list-icon" id="list-icon">
                    <div class="icons search" id="iconSearch">

                        <input type="text" id="input_search" placeholder="New Product..?">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <div class="icons cart">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>
                    <div class="icons heart">
                        <a href="signin.html"> <i class='bx bxs-user'></i></a>
                    </div>
                    <div class="toggle">
                        <i class='bx bx-sun'></i>
                    </div>
                </div>
            </div>



        </div>
        <div class="slider">

            <div class="title-slider">
                <div class="text-animation">
                    <h5>Men Collection 2018</h5>
                    <h3>NEW ARRIVALS</h3>
                    <button>SHOP NOW</button>
                </div>
            </div>

        </div>
        <div class="background">
            <img src="{{ asset('assets/client/src/img/slide1.webp') }}" alt="">
        </div>

    </div>

</header>