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
                                
                                @guest
                                @if (!Auth::user())
                                <a href="/">
                                    <i class="flaticon-bag"></i>
                                    <span>0</span>
                                </a>
                                @endif
                                @else
                                <?php 
                                $pesanan_utama = \App\Models\Order::where('user_id', Auth::user()->id)->where('status',0)->first();
                                 if(!empty($pesanan_utama))
                                    {
                                     $notif = \App\Models\Order_Item::where('order_id', $pesanan_utama->id)->count(); 
                                    }
                                ?>
                                <a href="/">
                                    <i class="flaticon-bag"></i>
                                    @if(!empty($notif))
                                    <span>{{ $notif }}</span>
                                    @endif
                                </a>
                                @endguest


                            </div>
                            <a href="/">Keranjang</a>
                        </div>
                        <div class="up-item">
                            @guest
                            @if (Route::has('login'))
                            <a href="{{ route('login') }}">Masuk</a>
                            @endif
                            atau
                            @if (Route::has('register'))
                            <a href="{{ route('register') }}">Daftar</a>
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
                <li><a href="/" name="women">Pakaian Wanita</a></li>
                <li><a href="/" name="men">Pakaian Pria</a></li>
                <li><a href="/" name="belt">Sepatu Wanita</a></li>
                <li><a href="/" name="hat">Sepatu Pria</a></li>
                <li><a href="/" name="shoes">Jam Tangan</a></li>
                <li><a href="/">Kontak</a></li>
            </ul>
        </div>
    </nav>
</header>
<!-- Header section end -->
