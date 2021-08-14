@extends('layout.template')

@section('content')
<!-- Hero section -->
<section class="hero-section">
	<div class="hero-slider owl-carousel">
		<div class="hs-item set-bg" data-setbg="img/bg.jpg">
			<div class="container">
				<div class="row">
					<div class="col-xl-6 col-lg-7 text-white">
						<span>/</span>
						<span>Product Baru</span>
						<h2>denim jackets</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
						<a href="#" class="site-btn sb-line">Lihat</a>
						<a href="#" class="site-btn sb-white">PESAN SEKARANG</a>
					</div>
				</div>
				<div class="offer-card text-white">
					<span>Diskon</span>
					<h2>30%</h2>
					<p>SHOP NOW</p>
				</div>
			</div>
		</div>
		<div class="hs-item set-bg" data-setbg="img/bg-2.jpg">
			<div class="container">
				<div class="row">
					<div class="col-xl-6 col-lg-7 text-white">
						<span>Product Baru</span>
						<h2>denim jackets</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
						<a href="#" class="site-btn sb-line">Lihat</a>
						<a href="#" class="site-btn sb-white">PESAN SEKARANG</a>
					</div>
				</div>
				<div class="offer-card text-white">
					<span>Diskon</span>
					<h2>70%</h2>
					<p>SHOP NOW</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="slide-num-holder" id="snh-1"></div>
	</div>
</section>
<!-- Hero section end -->

<!-- Features section -->
<section class="features-section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 p-0 feature">
				<div class="feature-inner">
					<div class="feature-icon">
						<img src="img/icons/1.png" alt="#">
					</div>
					<h2>Pembayaran Aman</h2>
				</div>
			</div>
			<div class="col-md-4 p-0 feature">
				<div class="feature-inner">
					<div class="feature-icon">
						<img src="img/icons/2.png" alt="#">
					</div>
					<h2>Produk Premium</h2>
				</div>
			</div>
			<div class="col-md-4 p-0 feature">
				<div class="feature-inner">
					<div class="feature-icon">
						<img src="img/icons/3.png" alt="#">
					</div>
					<h2>Gratis Pengiriman</h2>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Features section end -->

<!-- RELATED PRODUCTS section -->
	<section class="top-letest-product-section">
		<div class="container">
			<div class="section-title">
				<h2>PRODUCT TERPOPULER</h2>
			</div>
			<div class="product-slider owl-carousel">
				@forelse ($lastProducts as $product)
				<div class="product-item">
					<div class="pi-pic">
						<div class="tag-new">New</div>
						<img src="{{url('/img/product')}}/{{$product->gambar_product}}" alt="">
						<div class="pi-links">
							<a href="{{url('view')}}/{{$product->id}}" class="add-card"><i class="flaticon-bag"></i><span>Beli Product</span></a>
							<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
						</div>
					</div>
					<div class="pi-text">
						<h6>Rp. {{$product->harga}}</h6>
						<p>{{$product->name}}</p>
					</div>
				</div>
				@empty
			<div class="alert alert-danger">Tidak ada data Product!</div>
			@endforelse
			</div>
		</div>
	</section>
	<!-- RELATED PRODUCTS section end -->

<!-- Product filter section -->
<section class="related-product-section">
	<div class="container">
		<div class="section-title">
			<h2>PRODUK TERBAIK PENJUALAN</h2>
		</div>
		<ul class="product-filter-menu">
			<li><a href="#">TOPS</a></li>
			<li><a href="#">JUMPSUITS</a></li>
			<li><a href="#">LINGERIE</a></li>
			<li><a href="#">JEANS</a></li>
			<li><a href="#">DRESSES</a></li>
			<li><a href="#">COATS</a></li>
			<li><a href="#">JUMPERS</a></li>
			<li><a href="#">LEGGINGS</a></li>
		</ul>
		<div class="row">
			@forelse ($products as $product)
			<div class="col-lg-3 col-sm-6">
				<div class="product-item">
					<div class="pi-pic">
						<img src="{{url('/img/product')}}/{{$product->gambar_product}}" alt="">
						<div class="pi-links">
							<a href="{{url('view')}}/{{$product->id}}" class="add-card"><i class="flaticon-bag"></i><span>Beli Product</span></a>
							<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
						</div>
					</div>
					<div class="pi-text">
						<h6>Rp. {{$product->harga}}</h6>
						<p>{{$product->name}} </p>
					</div>
				</div>
			</div>
			@empty
			<div class="alert alert-danger">Tidak ada data Product!</div>
			@endforelse

		</div>
		<div class="text-center pt-5">
			<button class="site-btn sb-line sb-dark">LOAD MORE</button>
		</div>
	</div>
</section>
<!-- Product filter section end -->


<!-- Banner section -->
<section class="banner-section">
	<div class="container">
		<div class="banner set-bg" data-setbg="img/banner-bg.jpg">
			<div class="tag-new">NEW</div>
			<span>New Arrivals</span>
			<h2>STRIPED SHIRTS</h2>
			<a href="#" class="site-btn">SHOP NOW</a>
		</div>
	</div>
</section>
<!-- Banner section end  -->

@endsection
