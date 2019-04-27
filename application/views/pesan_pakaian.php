<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta http-equiv="ScreenOrientation" content="autoRotate:disabled">
  	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  	<meta name="theme-color" content="#00aeef">
  	<title data-react-helmet="true">Porinto Indonesia | Produk Custom Terbaik di Indonesia</title>  <meta data-react-helmet="true" name="title" content="Porinto Indonesia | Produk Custom Terbaik di Indonesia"/><meta data-react-helmet="true" name="description" content="Kami melayani pesanan produk custom seperti kaos dan tote bag. Lebih dari ribuan pelanggan di seluruh wilayah Indonesia yang telah puas dengan pelayanan kami."/><meta data-react-helmet="true" property="og:image" content="https://s3-ap-southeast-1.amazonaws.com/porinto-assets/logo/Porinto+-+Primary+Logogram+-+Blue.png"/><meta data-react-helmet="true" name="google-site-verification" content="AyRQ4YU7yxLHbTKfvX4d7kKMVPo0alNl_xmSaylyik0"/>    <link rel="preload" as="script" href="/js/bundle.js">
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" charset="UTF-8" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" />
  	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css" />

  	<link rel="shortcut icon" href="/img/icons/favicon.ico" type="image/x-icon">
  	<link rel="icon" href="/img/icons/favicon.ico" type="image/x-icon">
  	<link rel="stylesheet" href="/css/main.css">
  	<link rel="stylesheet" href="/css/styles.css">
  	<link rel="preload" href="https://s3-ap-southeast-1.amazonaws.com/porinto-assets/animation/loading.svg" as="image">
  	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/all.css">
	<script src="../assets/js/jquery.min.js"></script>
	<script src="../assets/js/popper.min.js"> </script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../assets/js/caman.full.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../assets/css/style/theme.css">
</head>

<body>
	<nav class="navbar navbar-expand-sm bg-primary">
		  <a class="navbar-brand" href="#"></a>
 		 <ul class="navbar-nav">
    		<li class="nav-item">
     	 		<a class="nav-link" href="../member">Home</a>
    		</li>
    		<li class="nav-item">
      			<a class="nav-link" href="pesanPakaian">Pesan Pakaian</a>
    		</li>
    		<li class="nav-item">
     			 <a class="nav-link" href="lihatPesanan">Lihat Pesanan</a>
    		</li>
    		<li class="nav-item">
     			 <a class="nav-link" href="logout">Logout</a>
    		</li>
  		</ul>
	</nav>
	<div class="container-fluid">
		<div class="text-center row">
			<div class="col">
				<div class="" style="padding-top: 100px">
					<div class="container-fluid">
						<!--form method="post" action="addPesanan"> -->
						<?php echo form_open_multipart('member/addPesanan'); ?>
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-4">
								
									<div class="form-group">
										<input type="text" class="form-control"  name="jumlah" placeholder="Jumlah">
									</div>
									<div class="form-group">
										<select name="ukuran" class="form-control">
											<option>--Pilih Ukuran--</option>
											<option value="S">S</option>
											<option value="M">M</option>
											<option value="L">L</option>
											<option value="XL">XL</option>
											<option value="XXL">XXL</option>
										</select>
									</div>
									<div class="form-group">
										<select name="bahan_baku" class="form-control">
											<option>--Pilih Bahan Baku--</option>
											<?php
												foreach($bahan_baku as $bahan){
													echo "<option value='$bahan->id'>$bahan->nama (Stok: $bahan->stok)</option>";
												}
											?>
										</select>
								
									</div>
									<div class="form-group">
										<input type="color" name="warna" value="#ffffff" class="form-control" style="height: 40px">
									</div>
									<div class="form-group">
										<label for="browse-img" class="btn btn-primary form-control">Pilih Gambar</label>
				  						<input type="file" style="visibility: hidden" id="browse-img" name="img" class="form-control"></input>
				  					</div>
									<div class="form-group" style="margin-top: -50px">
										<select name="tukang_jahit" class="form-control">
											<option>--Pilih Tukang Jahit--</option>
											<?php
												foreach($tukang_jahit as $tukang){
													echo "<option value='".$tukang['id']."'>".$tukang['nama']."</option>";
												}
											?>
										</select>
									</div>
									<div class="form-group">
										<textarea  type="text" class="form-control"  name="note" placeholder="Note" cols = "40" crows "50" > </textarea>
									</div>
									<div class="form-group">	
					  					<button type="submit" class="btn btn-primary form-control">Pesan</button>	
					  					<?php echo $this->session->flashdata('status'); ?>
					  				</div>
								
							</div>
							<div class="col-lg-3 col-md-3 col-sm-3">
								<div class="template">
									<img id="template-front" src="../assets/img/template-front.png" style="max-height: 387px;">
									
									<img id="overlay-front" class="overlay" style="max-height: 100px; max-width: 100px;" src="">
								</div>
								
								<div class="slidercontainer">
									<input type="range" name="front-x" min="0" max="300" value="0" class="slider" id="front-x">
									
									<input type="range" name="front-size" min="0" max="300" value="100" class="slider" id="front-size">
									<input type="checkbox" class="form-control" name="front-invisible"> <p>Sembunyikan</p>
								</div>
							</div>
							<div class="col-lg-1 col-md-1 col-sm-1">
								<input type="range" style="transform: rotate(90deg); width: 378px; margin-top: 193px; margin-left: -200px" name="front-y" min="-300" max="300" value="0" class="slider" id="front-y">
							</div>
							<div class="col-lg-3 col-md-3 col-sm-3">
								<div class="template">
									<img id="tshirt-template" src="../assets/img/template-back.png" style="max-height: 387px">
									<img id="overlay-back" class="overlay" style="max-height: 100px; max-width: 100px;" src="">
								</div>
								<div class="slidercontainer">
									<input type="range" name="back-x" min="0" max="300" value="0" class="slider" id="back-x">
									
									<input type="range" name="back-size" min="0" max="300" value="100" class="slider" id="back-size">
									<input type="checkbox" class="form-control" name="back-invisible"> <p>Sembunyikan</p>
								</div>
							</div>
							<div class="col-lg-1 col-md-1 col-sm-1">
								<input type="range" style="transform: rotate(90deg); width: 387px; margin-top: 193px; margin-left: -200px" name="back-y" min="-300" max="300" value="0" class="slider" id="back-y">
							</div>
						</div>
						</form>

					</div>
					
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		var front_x = document.getElementById("front-x");
		var front_y = document.getElementById("front-y");
		var front_size = document.getElementById("front-size");

		var back_x = document.getElementById("back-x");
		var back_y = document.getElementById("back-y");
		var back_size = document.getElementById("back-size");

		
		front_x.oninput = function(){
			$("#overlay-front").css("left", this.value+"px");
		}
		front_y.oninput = function(){
			$("#overlay-front").css("top", this.value+"px");
		}
		front_size.oninput = function(){
			$("#overlay-front").css("max-height", this.value+"px");
			$("#overlay-front").css("max-width", this.value+"px");
		}
		back_x.oninput = function(){
			$("#overlay-back").css("left", this.value+"px");
		}
		back_y.oninput = function(){
			$("#overlay-back").css("top", this.value+"px");
		}
		back_size.oninput = function(){
			$("#overlay-back").css("max-height", this.value+"px");
			$("#overlay-back").css("max-width", this.value+"px");
		}
		function readURL(input){
			if(input.files && input.files[0]){
				var reader = new FileReader();
				reader.onload = function(e){
					$("#overlay-front").attr("src", e.target.result);
					$("#overlay-back").attr("src", e.target.result);
				}
				reader.readAsDataURL(input.files[0]);
			}
		}
		$("#browse-img").change(function(){
			readURL(this);
		});
	</script>
</body>
</html>