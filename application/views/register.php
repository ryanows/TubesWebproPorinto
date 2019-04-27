<!DOCTYPE html>
<html>
<head>
	<title>Halaman Register!</title>
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
</head>

<body>
	<div id="main">
    <div class="wrapper"><nav class="layout-navbar navbar navbar-static-top">
    	<div class="page-container container"><div class="col-sm-6 col-sm-offset-3 col-xs-12">
    		<div class="row"><div class="hidden-sm hidden-md hidden-lg"><div class="col-xs-2">
    			<div class="menu-icon-container">
    				<span class="glyphicon glyphicon-menu-hamburger">
    				</span>
    			</div>
    		</div>
    		<div class="col-xs-8"><div class="centered-logo-container">
    			<a href="/"><img rel="preload" class="layout-logo navbar-brand" src="https://s3-ap-southeast-1.amazonaws.com/porinto-assets/logo/Porinto-Common.png"/>
    			</a>
    		</div>
    	</div>
    	<div class="col-xs-2"></div></div>
    	<div class="hidden-xs"><div class="col-xs-10"><div class="flex-container">
    		<div class="menu-icon-container">
    			<span class="glyphicon glyphicon-menu-hamburger">
    			</span>
    		</div>
    		<div class="layout-logo-container">
    			<a href="/"><img rel="preload" class="layout-logo navbar-brand" src="https://s3-ap-southeast-1.amazonaws.com/porinto-assets/logo/Porinto-Common.png"/>
    			</a>
    		</div>
    	</div>
    </div>
    <div class="col-xs-2">
    </div></div></div></div></div>
</nav>
<div class="layout-content-container container"><div class="app-container"><div class="app-content">
	<div class="content-container row"><div class="page-container col-sm-6 col-sm-offset-3 col-xs-12">
		<div class="page-content-container"><div class="menu-header row">
			<div class="col-xs-12">
				<h4 class="menu-title">Daftar Member Porinto</h4>
			</div></div><div class="menu-container row"><div class="col-xs-12">
			<div class="styles__contentContainer___3YOG9">
				<p>Dapatkan keuntungan khusus Member Porinto, di antaranya: 
				</p>
				<ul class="styles__benefitList___3-i3e"><li><div class="styles__benefitContainer___2G3Q9">
					<div class="styles__benefitHeader___1uZxw"><span>1. Order Tracking</span></div>
					<div class="styles__benefitContent___3E2SS"><span>Dengan menjadi Member Porinto, kamu bisa mencari dan melacak order kamu dengan mudah.
					</span>
				</div>
			</div>
		</li>
		<li>
			<div class="styles__benefitContainer___2G3Q9"><div class="styles__benefitHeader___1uZxw"><span>2. Easy Reorder
			</span></div>
			<div class="styles__benefitContent___3E2SS">
				<span>Kamu tidak perlu melakukan design ulang karena sebagai Member Porinto kamu bisa menyimpan design kamu.
				</span>
			</div>
		</div>
	</li>
</ul>
</div>
<hr/>	
<!-- 	<nav class="navbar navbar-expand-sm bg-dark navbar-dark"> -->
<!-- 		  <a class="navbar-brand" href="#" >
		    <img src="<?php echo base_url() ?>assets/img/sentanu.png" alt="logo" class="logo-circle"> -->
	  	<!-- </a>
	</nav>
	<div class="modal-dialog text-center">
		<div class="col-sm-8 main-section">
			<div class="modal-content"> -->
<!-- 				<div class="col-12 user-img">
					<img src="<?php echo base_url() ?>assets/img/omg.png" class="logo-circle">
				</div> -->
				
				<form action="register/register" method="post" class="col-12">
					<div class="form-group">
						<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required="true">
					</div>
					<div class="form-group">
						<input type="text" name="username" class="form-control" placeholder="Username" required="true">
					</div>
					<div class="form-group">
						<input type="password" name="password" class="form-control" placeholder="Password" required="true">
					</div>
					<div class="form-group">
						<input type="password" name="repassword" class="form-control" placeholder="Re-Password" required="true">
					</div>
					<div class="form-group">
						<label class="forget">Account type:</label>
						<select name="account_type" class="form-control">
							<option value="member">Member</option>
						</select>
					</div>
					<button class="btn btn-red form-control">Register</button>
					<?php if($this->session->flashdata()){ ?>
					<div class="alert alert-danger">
						<strong> <?php echo $this->session->flashdata('register'); ?></strong>
					</div>
					<?php } ?>
				</form>
				<div class="col-12 forgot">
					<a href="login">Have Account?</a>
				</div>
				
			</div>
			
		</div>
	</div>
</body>
</html>