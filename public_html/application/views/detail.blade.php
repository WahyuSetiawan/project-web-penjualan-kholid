@extends('part/template', $head)

@section('content')
<section id="page-title" class="page-title shop shop-single">
	<div class="container shop-content">
		<div class="row">

			<div class="col-xs-12 col-sm-12 col-md-12">
				<ol class="breadcrumb text-left">
					<li>
						<a href="index.html">Home</a>
					</li>
					<li class="active">shop</li>
				</ol>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-5">
				<div class="prodcut-images">
					<div class="product-img-slider">
						<img src="<?php if ($produk->gambar_utama){ echo base_url($produk->gambar_utama); } ?>">
						@foreach ($produk->gambar as $item)
						<img src="<?php if ($item->path){ echo base_url($item->path); } ?>">
						@endforeach

					</div>
					<div class="product-img-nav">
						<img src="<?php if ($produk->gambar_utama){ echo base_url($produk->gambar_utama); } ?>">
						@foreach ($produk->gambar as $item)
						<img src="<?php if ($item->path){ echo base_url($item->path); } ?>">
						@endforeach
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-7">
				<div class="product-title text-center-xs">
					<h3>
						<?php echo $produk->nama_produk ?>
					</h3>
				</div>

				<!-- .product-title end -->
				<div class="product-meta mb-30">
					<div class="product-price pull-left pull-none-xs">
						<p>Rp.
							<?php echo number_format($produk->harga_produk) ?>
						</p>
					</div>
				</div>
				<!-- .product-img end -->

				<hr class="mt-30 mb-30">
				<div class="product-details text-center-xs">
					<ul class="list-unstyled">
						<li>Kategori : <span>{{$produk->nama_kategori}} </span></li>
						<li>Code : <span>#P0{{$produk->id_produk}}</span></li>
						<li>Stok : <span>
								@if ($produk->tersedia == "0")
								Tersedia
								@else
								Tidak tersedia
								@endif
							</span></li>
					</ul>
				</div>
				<!-- .product-details end -->
				<div class="product-action">
					<form method="post" action="{{site_url('order/add_keranjang')}}">
						<div class="product-quantity">
							<span class="qua">Jumlah Pesan:</span>
							<span>
								<input form-control type="number" min="1" max="100" name="qty" value="1">
							</span><br>
							<span class="qua">Catatan Produk :</span><br>
							<span>
								<textarea name="catatan_produk" class="form-control" placeholder=" Warna merah"></textarea>
							</span>
							<br>
							<span>
								<button type="submit" name="beli" value="<?php echo $produk->id_produk ?>" class="btn btn-primary btn-black btn-block">Beli
									Produk Ini</button>
							</span>
						</div>
					</form>
					<hr>
				</div>

				<!-- .product-action end -->
				<hr class="mt-30 mb-30">
				<div class="product-share  text-center-xs">
					<h5 class="share-title">share product: </h5>
					<a class="share-facebook" href="#"><i class="fa fa-facebook"></i></a>
					<a class="share-twitter" href="#"><i class="fa fa-twitter"></i></a>
					<a class="share-google-plus" href="#"><i class="fa fa-google-plus"></i></a>
					<a class="share-pinterest" href="#"><i class="fa fa-pinterest"></i></a>
					<a class="share-dribbble" href="#"><i class="fa fa-dribbble"></i></a>
				</div>
				<!-- .product-share end -->
			</div>
		</div>



		<!-- .row end -->
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="product-tabs">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active">
							<a href="#description" aria-controls="description" role="tab" data-toggle="tab">description</a>
						</li>
						<!-- 	<li role="presentation">
							<a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">reviews(2)</a>
						</li> -->
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="description">
							<p>
								{{$produk->deskripsi_produk }}
							</p>
						</div>

						<!-- #details end -->
						<div role="tabpanel" class="tab-pane reviews" id="reviews">
							<ul class="product-review list-unstyled">
								<li class="review-comment">
									<h6>Mostafa Amin</h6>
									<p class="review-date">22/02/2016</p>
									<div class="product-rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i>
									</div>
									<div class="product-comment">
										<p>Lorem ipsum dolor sit amet, mauris suspendisse viverra eleifend tortor tellus suscipit, tortor aliquet at
											nulla
											mus, dignissim neque, nulla neque. Ultrices proin mi urna nibh ut, aenean sollicitudin etiam libero nisl,
											ultrices
											ridiculus in magna purus consequuntur, ipsum donec orci ad vitae pede, id odio.</p>
									</div>
								</li>
								<!-- .review-comment end -->
							</ul>
							<div class="form-review">
								<form>
									<input type="text" class="form-control" id="name" placeholder="Your Name" />
									<input type="email" class="form-control" id="email" placeholder="Your Email" />
									<select class="form-control">
										<option selected="" value="Default">Your Rating</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
									<textarea class="form-control" id="review" rows="2" placeholder="Review"></textarea>
									<button type="submit" class="btn btn-primary btn-black btn-block">Post Your review</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- .row end -->
		<br>

		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="widget-related-product">
					<div class="widget-title">
						<h4>Related Products</h4>
					</div>
					<div class="widget-content">
						<div class="row">

							<?php foreach ($related as $row): ?>

							<div class="col-xs-12 col-sm-6 col-md-3 product">
								<div class="product-img">
									<img src="<?php echo base_url().$row->gambar_utama ?>" alt="Product" style=" margin: 0 3px 2px 0; -o-object-fit: none; object-fit: cover;    width:100%;   height:250px;" />
									<div class="product-hover">
										<div class="product-action">
											<a class="btn btn-primary" href="<?php echo site_url('home/detail/'.$row->id_produk) ?>">Beli</a>
										</div>
									</div>
								</div>
								<div class="product-bio">
									<div class="prodcut-cat">
										<a href="<?php echo site_url('home/detail/'.$row->id_produk) ?>">
											<?php echo $row->nama_kategori ?></a>
									</div>
									<div class="prodcut-title" style="height: 100px;">
										<h3>
											<a href="<?php echo site_url('home/detail/'.$row->id_produk) ?>">
												<?php echo $row->nama_produk ?></a>
										</h3>
									</div>
									<div class="product-price">
										<span class="symbole">Rp. </span><span>
											<?php echo number_format($row->harga_produk) ?></span>
									</div>
								</div>
							</div>
							<?php endforeach ?>


						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- .product-related end -->
	</div>
	<!-- .container end -->
</section>
@endsection