<link rel="stylesheet" href="{{ asset('assets/client/src/css/style.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/client/src/css/about.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/client/src/css/blog.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/client/src/css/contact.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/client/src/css/features.css') }}">
<link rel="stylesheet" href="{{ asset('assets/client/src/css/product.css') }}">
<link rel="stylesheet" href="{{ asset('assets/client/src/css/shop.css') }}" />

<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
<link rel="icon"
    href="https://scontent.fhan14-1.fna.fbcdn.net/v/t39.30808-6/291746184_769150660950106_9022025498033681382_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=tR1lQVhHFa8AX9uy8Xi&tn=D7p54ZetywhaBBwA&_nc_ht=scontent.fhan14-1.fna&oh=00_AT_hze_CJRwfkb1_EgSvXI8UXvhbmKbSP84cbclCGPfYaw&oe=62DC17E8" />
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;500;600;700;800&display=swap"
    rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- <link rel="stylesheet" href="https://fonts.adobe.com/fonts/poppins#details-section+poppins-thin"> -->
<link rel="stylesheet" href="https://www.dafontfree.net/playfair-display-bold/f59120.html">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


<header>

    <div id="header">

        <div class="sub-nav" id="nav" style="background-color: rgb(255, 255, 255); top: 0px; padding: 10px 0px 5px; box-shadow: gray 0px 2px 10px;">
            <div class="nav">
                <div class="photo-logo">
                    <a href="{{ asset('') }}"><img src="{{ asset('assets/client/src/img/logo.webp') }}"
                            style="cursor: pointer;" alt="" /></a>
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
