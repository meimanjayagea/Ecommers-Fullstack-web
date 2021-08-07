<!-- Header section -->
<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 text-center text-lg-left">
                    <!-- logo -->
                    <a href="/" class="site-logo">
                        <img src="img/logo.png" alt="">
                    </a>
                </div>
                <div class="col-xl-6 col-lg-5">
                    <form class="header-search-form">
                        <input type="text" placeholder="Search on divisima ....">
                        <button><i class="flaticon-search"></i></button>
                    </form>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="user-panel">
                        <div class="up-item">
                            <div class="shopping-card">
                                <i class="flaticon-bag"></i>
                                <span>0</span>
                            </div>
                            <a href="/">Shopping Cart</a>
                        </div>
                        <div class="up-item">
                            @guest
                            @if (Route::has('login'))
                            <a href="{{ route('login') }}">Sign</a> In
                            @endif
                            or
                            @if (Route::has('register'))
                            <a href="{{ route('register') }}">Create Account</a>
                            @endif
                            @else
                            <div class="d-flex">
                                <p class="mx-2 btn">{{ Auth::user()->name }}</p>
                                <p><a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     keluar</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </p>
                            </div>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="main-navbar">
        <div class="container">
            <!-- menu -->
            <ul class="main-menu">
                <li><a href="/">Home</a></li>
                <li><a href="/">Women</a></li>
                <li><a href="/">Men</a></li>
                <li><a href="/">Jewelry
                        <span class="new">New</span>
                    </a></li>
                <li><a href="#">Shoes</a>
                    <ul class="sub-menu">
                        <li><a href="/">Sneakers</a></li>
                        <li><a href="/">Sandals</a></li>
                        <li><a href="/">Formal Shoes</a></li>
                        <li><a href="/">Boots</a></li>
                        <li><a href="/">Flip Flops</a></li>
                    </ul>
                </li>
                <li><a href="/">Pages</a>
                    <ul class="sub-menu">
                        <li><a href="/product">Product Page</a></li>
                        <li><a href="/category">Category Page</a></li>
                        <li><a href="/cart">Cart Page</a></li>
                        <li><a href="/checkout">Checkout Page</a></li>
                        <li><a href="/contact">Contact Page</a></li>
                    </ul>
                </li>
                <li><a href="/">Blog</a></li>
            </ul>
        </div>
    </nav>
</header>
<!-- Header section end -->
