@extends('part/template', $head)

@section('content')
<section id="page-title" class="page-title shop shop-single" style="padding-bottom: 0px;">
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

			<div class="col-xs-12  col-sm-12  col-md-12">
				<div class="cart-table table-responsive">
					<table class="table table-bordered">
						<thead>
							<tr class="cart-product">
								<th class="cart-product-item">Product</th>
								<th class="cart-product-price">Harga</th>
								<th class="cart-product-quantity">Quantity</th>
								<th class="cart-product-total">Total</th>
							</tr>
						</thead>


						<tbody>

							<?php foreach ($head['cart']->contents() as $items) { ?>
								<tr class="cart-product">
									<td class="cart-product-item"><div class="cart-product-remove">
										<a href="<?php echo site_url('order/cancel_cart/'.$items['rowid']) ?>"><i class="fa fa-close"></i></a>
									</div>
									<div class="cart-product-img">
										<img src="<?php echo base_url($items['image']) ?>" alt="product"/ style="height: 60px;">
									</div>
									<div class="cart-product-name">
										<h6><?php echo $items['name']; ?></h6>
									</div></td>
									<td class="cart-product-price">Rp. <?php echo number_format($items['price']); ?> </td>
									<td class="cart-product-quantity">
										<div class="product-quantity">
											<input type="number" value="<?php echo $items['qty'] ?>" min="1" id="pro1-qunt">
										</div>
									</td>
									<td class="cart-product-total">Rp. <?php echo number_format($items['price']*$items['qty']); ?> </td>
								</tr>
							<?php } ?>

							<tr class="cart-product-action">
								<td  colspan="4">
									<div class="row clearfix">
										<!-- .col-md-6 end -->

										<?php if (!$head['session']->userdata('id_konsumen')) 
										{ ?>
											<div class="col-xs-12 col-sm-6 col-md-6 text-right">
												<button type="button" class="btn btn-primary text-center btn-sm" data-toggle="modal" data-target=".login-modal-lg">Proses Checkout</button>
											</div>
										<?php } ?>
										<!-- .col-md-6 end -->
									</div></td>
								</tr>
							</tbody>
						</table>
					</div>
					<!-- .cart-table end -->
				</div>

			</div>
		</div>
	</section>

	<?php if ($head['session']->userdata('id_konsumen')) { ?>

		<section id="page-title" class="page-title shop shop-single" style="padding-bottom: 0px;">
			<div class="container shop-content">
				<div class="py-5 text-center">
					<h2>Checkout Pesanan</h2>
					<p class="lead">
						Silahkan Isi data dengan benar, kesalahan inputan alamat Paket pengiriman bukan tanggung jawab kami.
					</p>
				</div>

				<div class="row">
					<div class="col-md-4 order-md-2 mb-4">
						<h4 class="mb-3">Ringkasan Pesanan</h4>
						<ul class="list-group mb-3">
							<li class="list-group-item d-flex justify-content-between lh-condensed">
								<div>
									<h6 class="my-0">Total Pesanan</h6>
								</div>
								<span class="text-muted">Rp. <?php echo number_format($head['cart']->total()); ?></span>
							</li>
							<li class="list-group-item d-flex justify-content-between lh-condensed">
								<div>
									<h6 class="my-0">Total Ongkir</h6>
								</div>
								<span class="text-muted tot-ongkir">Rp. 0</span>
							</li>


							<li class="list-group-item d-flex justify-content-between">
								<span>Total Pembayaran</span>
								<b>Rp. <strong style="color: black" class="tot-bayar"><?php echo number_format($head['cart']->total()); ?> </strong></b>
							</li>
<!-- 							<li class="list-group-item d-flex justify-content-between">
								<form class="form-inline">
									<input type="text" id="coupon" placeholder="Coupon Code"/>	
									<button type="submit" class="btn btn-info btn-sm">Apply Coupon</button>
								</form>
							</li> -->
						</ul>
					</div>
					<div class="col-md-8 order-md-1">
						<h4 class="mb-3">Alamat Pengiriman</h4>
						<form class="needs-validation" action="<?php echo site_url('order/cart_checkout') ?>" method="post">
							<div class="row">
								<div class="col-md-6 mb-3">
									<label for="firstName">Nama Penerima</label>
									<input type="text" class="form-control" id="nama" placeholder="" name="nama_penerima" value="" required>
								</div>
								<div class="col-md-6 mb-3">
									<label for="lastName">No Hp Penerima</label>
									<input type="text" class="form-control" id="nohp" placeholder="" name="nohp" value="" required>
								</div>
								<div class="col-md-12 mb-3">
									<label for="address">Alamat Penerima</label>
									<input type="text" class="form-control" id="address" name="alamat" placeholder="1234 Main St" required>
								</div>
							</div>
							<hr>			
							<div class="row">
								<div class="col-md-4 mb-3">
									<label for="country">Provinsi</label><br>
									<select class="custom-select d-block w-100 prov" id="provinsi" name="provinsi" required>
										<option value="">Pilih Provinsi</option>
										<?php

										$curl = curl_init();
										curl_setopt_array($curl, array(
											CURLOPT_URL => "http://api.rajaongkir.com/starter/province",
											CURLOPT_RETURNTRANSFER => true,
											CURLOPT_ENCODING => "",
											CURLOPT_MAXREDIRS => 10,
											CURLOPT_TIMEOUT => 30,
											CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
											CURLOPT_CUSTOMREQUEST => "GET",
											CURLOPT_HTTPHEADER => array(
												"key: 68581a285abb094d9176a1b2afa2d979"
											),
										));

										$response = curl_exec($curl);
										$err = curl_error($curl);

										curl_close($curl);

										if ($err) {
											echo "cURL Error #:" . $err;
										} else {
											$data = json_decode($response, true);
											for ($i=0; $i < count($data['rajaongkir']['results']); $i++){
												echo "<option class='test' data-prov='".$data['rajaongkir']['results'][$i]['province']."' value='".$data['rajaongkir']['results'][$i]['province_id']."'>".$data['rajaongkir']['results'][$i]['province']."</option>";
											}
										}

										?>
									</select>
									<input type="hidden" class="nama_prov" name="provinsi">
								</div>
								<div class="col-md-4 mb-3">
									<label for="state">Kota</label><br>
									<select class="custom-select d-block w-100 nm_kota" id="kota" name="kota" required><br>
										<option value="">Choose...</option>
									</select>
									<input type="hidden" class="nama_kota" name="kota">

								</div>
								<div class="col-md-3 mb-3">
									<label for="zip">Kode Pos</label>
									<input type="text" class="form-control" id="zip" placeholder="" name="kode_pos" required>
								</div>
							</div>

							<div class="row">
								<div class="col-md-4 mb-3">
									<label for="country">Kurir Pengiriman</label><br>
									<select class="custom-select d-block w-100 kurir" id="kurir"  name="kurir" required>
										<option value="">Pilih Kurir</option>
										<option value="jne">JNE</option>
										<option value="pos">POS</option>
										<option value="tiki">TIKI</option>
									</select>

								</div>
								<div class="col-md-4 mb-3">
									<label for="state">Paket Pengiriman</label><br>
									<select class="custom-select d-block w-100 paket" id="paket" name="paket_pengiriman"  required>
										<option value="">Pilih Kurir Dahulu</option>
									</select>
									<input type="hidden" name="jongkir" class="jongkir">
								</div>
								<div class="col-md-4 mb-3">
									<label for="state">Transfer Ke bank</label><br>
									<select class="custom-select d-block w-100" id="bank" name="bank" required>
										<option value="">Choose...</option>

										<?php foreach ($bank as $row) { ?>
											<option value="<?php echo $row->id_bank ?>"><?php echo $row->nama_bank ?></option>
										<?php } ?>

									</select>
								</div>
							</div>
							<hr class="mb-4">
							<button class="btn btn-primary btn-lg btn-block" type="submit">Proses Pembayaran</button>
						</form>
					</div>
				</div>
			</div>
		</section>



		<script type="text/javascript">

			$(document).ready(function() {

				$('.nm_kota').change(function(event) {
					var nama_prov = $('.nm_kota option:selected').attr('data-kota');
					$('.nama_kota').val(nama_prov);
				});

				$('#provinsi').change(function() {
					var id_provinsi = $('#provinsi').val();
					var nama_prov = $('.prov option:selected').attr('data-prov');
					$('.nama_prov').val(nama_prov);
					$('.nama_kota').val('');
					$.ajax({
						url: '<?php echo site_url('Raja_ongkir/get_kota') ?>/'+id_provinsi,
						type: 'get',
					})
					.done(function(obj) {
						$('#kota').html(obj);
					})
					.fail(function() {
						console.log("error");
					})			
				});

				$('.kurir').change(function() {
					var destination = $('#kota').val();
					var courier = $('#kurir').val();

					$.ajax({
						url: '<?php echo site_url('Raja_ongkir/get_pengiriman') ?>',
						type: 'POST',
						data: {destination: destination,courier : courier},
					})
					.done(function(obj) {
						$('#paket').html(obj);
					})
					.fail(function() {
						console.log("error");
					})
					.always(function() {
						console.log("complete");
					});
				});

				$('.paket').change(function(event) {
					var ong = $('.paket option:selected').attr('ongkir');
					$('.jongkir').val(ong);
					


					var a = "<?php echo $head['cart']->total(); ?>";
					var jumlah = parseInt(ong)+parseInt(a);

					var	number_string = jumlah.toString(),
					sisa 	= number_string.length % 3,
					rupiah 	= number_string.substr(0, sisa),
					ribuan 	= number_string.substr(sisa).match(/\d{3}/g);
					if (ribuan) {
						separator = sisa ? '.' : '';
						rupiah += separator + ribuan.join('.');
					}	
					$('.tot-ongkir').text(ong);
					$('.tot-bayar').text(rupiah);
				});
			});



		</script>

	<?php } ?>

	@endsection