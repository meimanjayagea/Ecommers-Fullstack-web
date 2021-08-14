@extends('layout.template')

@section('content')
	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4></h4>
			<div class="site-pagination">
				<a href="">Home</a> /
				<a href="">Shop</a>
			</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- product section -->
	<section class="product-section">
		<div class="container">
			<div class="back-link">
				<a href="{{url('/')}}"> &lt;&lt; Back to Home</a>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="product-pic-zoom">
						<img class="product-big-img" src="{{url('/img/single-product')}}/{{$product->gambar_product}}" alt="">
					</div>
					<div class="product-thumbs" tabindex="1" style="overflow: hidden; outline: none;">
						<div class="product-thumbs-track">
							<div class="pt active" data-imgbigurl="{{url('/img/single-product')}}/{{$product->gambar_satu}}"><img src="{{url('/img/single-product')}}/{{$product->gambar_satu}}" alt=""></div>
							<div class="pt" data-imgbigurl="{{url('/img/single-product')}}/{{$product->gambar_dua}}"><img src="{{url('/img/single-product')}}/{{$product->gambar_dua}}" alt=""></div>
							<div class="pt" data-imgbigurl="{{url('/img/single-product')}}/{{$product->gambar_tiga}}"><img src="{{url('/img/single-product')}}/{{$product->gambar_tiga}}" alt=""></div>
							<div class="pt" data-imgbigurl="{{url('/img/single-product')}}/{{$product->gambar_empat}}"><img src="{{url('/img/single-product')}}/{{$product->gambar_empat}}" alt=""></div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 product-details">
					<h2 class="p-title">{{$product->name}}</h2>
					<h3 class="p-price">Rp. {{$product->harga}}</h3>
					<h4 class="p-stock">Available: <span>{{$product->stock}} Item</span></h4>
					<div class="p-rating">
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o fa-fade"></i>
					</div>
					<div class="p-review">
						<a href="">3 reviews</a>|<a href="">Add your review</a>
					</div>
					<div class="fw-size-choose">
						<p>Size</p>
						
						<div class="sc-item">
							<input type="radio" name="size" id="xs-size" value="">
							<label for="xs-size">32</label>
						</div>
						
						<div class="sc-item">
							<input type="radio" name="size" id="s-size" value="">
							<label for="s-size">34</label>
						</div>
						
						<div class="sc-item">
							<input type="radio" name="size" id="m-size" value="">
							<label for="m-size">36</label>
						</div>
						
						<div class="sc-item">
							<input type="radio" name="size" id="l-size" value="">
							<label for="l-size">38</label>
						</div>
						
						<div class="sc-item">
							<input type="radio" name="size" id="xl-size" value="">
							<label for="xl-size">40</label>
						</div>
						
						<div class="sc-item">
							<input type="radio" name="size" id="xxl-size" value="">
							<label for="xxl-size">42</label>
						</div>
						
					</div>
					<div class="quantity">
						<p>Quantity</p>
                        <div class="pro-qty"><input type="text" value="1" name="jumlah_pesan" required></div>
                    </div>

					<a href="#" class=""></a>
					<form action="{{url('pesan')}}/{{$product->id}}" method="post">
                                                @csrf
                                                <button type="submit" class="site-btn"><i
                                                        class="fa fa-shopping-cart">
                                                    </i> BELI</button>
                                            </form>
					<div id="accordion" class="accordion-area">
						<div class="panel">
							<div class="panel-header" id="headingOne">
								<button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">information</button>
							</div>
							<div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="panel-body">
									<p>{{$product->keterangan}}</p>
								</div>
							</div>
						</div>
					</div>
					<div class="social-sharing">
						<a href=""><i class="fa fa-google-plus"></i></a>
						<a href=""><i class="fa fa-pinterest"></i></a>
						<a href=""><i class="fa fa-facebook"></i></a>
						<a href=""><i class="fa fa-twitter"></i></a>
						<a href=""><i class="fa fa-youtube"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- product section end -->


	<!-- RELATED PRODUCTS section -->
	<section class="related-product-section">
		<div class="container">
			<div class="section-title">
				<h2>RELATED PRODUCTS</h2>
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


@endsection
	
