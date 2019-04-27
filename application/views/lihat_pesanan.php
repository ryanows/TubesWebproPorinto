<!DOCTYPE html>
<html>
<head>
	<title>Lihat Pesanan</title>
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
		  <a class="navbar-brand" href="#">
	  	</a>
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

	<div class="container modal-content" style="margin-top: 50px; padding-top: 30px; background-color: white">
		
		<table id="pesanan" style="margin-top: 50px" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Tukang Jahit</th>
					<th>Tanggal Pemesanan</th>
					<th>Status</th>
					<th>Detail Pesanan</th>
				</tr>
			</thead>
			<tbody>
				
			</tbody>
		</table>
	</div>
	<div class="modal" id="detail">
	 	<div class="modal-dialog" style="max-width: 1500px">
	    	<div class="modal-content">
	      		<!-- Modal Header -->
	      		<div class="modal-header">
	        		<h4 class="modal-title" style="color: white">Detail Pesanan</h4>
	        		<button type="button" class="close" data-dismiss="modal" style="color: white">&times;</button>
	      		</div>
	      		<!-- Modal body -->
	      		<div class="modal-body">
	        		<div class="container-fluid">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-4">
								
									<div class="form-group">
										<label>Jumlah</label>
										<input type="text" class="form-control"  id="jumlah" placeholder="Jumlah" readonly="true">
									</div>
									<div class="form-group">
										<label>Ukuran</label>
										<input type="text" class="form-control"  id="ukuran" placeholder="Ukuran" readonly="true">
									</div>
									<div class="form-group">
										<label>Bahan Baku</label>
										<input type="text" class="form-control"  id="bahan_baku" placeholder="Bahan Baku" readonly="true">
									</div>
									<div class="form-group">
										<label>Warna</label>
										<input type="color" name="warna" disabled="true" readonly="true" value="#ffffff" class="form-control" style="height: 40px">
									</div>
									<div class="form-group">
										<label>Catatan</label>
										<textarea  type="text" class="form-control" readonly="true" id="note" placeholder="Note" cols = "40" crows "50" > </textarea>
									</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4">
								<div class="template">
									<img id="template-front" src="../assets/img/template-front.png" style="max-height: 387px;">
									
									<img id="overlay-front" class="overlay" style="max-height: 100px; max-width: 100px;" src="">
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4">
								<div class="template">
									<img id="tshirt-template" src="../assets/img/template-back.png" style="max-height: 387px">
									<img id="overlay-back" class="overlay" style="max-height: 100px; max-width: 100px;" src="">
								</div>
							</div>
						</div>
					</div>
	      		</div>
	      		<!-- Modal footer -->
	      		<div class="modal-footer">
	        		<button type="button" class="btn btn-red" data-dismiss="modal">Close</button>
	      		</div>

	    	</div>
	  	</div>
	</div>
	<script type="text/javascript">
		var table = $("#pesanan").DataTable();
		$.ajax({
			url: "../pesanan/getPesanan?username=<?php echo $this->session->userdata('username') ?>",
			success: function(result){
				var json = $.parseJSON(result);
				var num = 1;
				$.each(json, function(key, value){
					table.row.add([
						num++,
						value.nama_tukang_jahit,
						value.tanggal,
						value.status,
						"<button class='btn btn-green' data-toggle='modal' data-target='#detail' onclick='setModal("+value.id+")'>Detail</button>"
					]).draw(false);
				});
			}
		});

		function setModal(id){
			$.ajax({
				url: "../pesanan/getPesanan?id="+id,
				success: function(result){
					var json = $.parseJSON(result);
					var data = json[0];
					
					$("#jumlah").val(data.jumlah);
					$("#ukuran").val(data.ukuran);
					$("#bahan_baku").val(data.bahan_baku);
					$("#warna").val(data.warna);
					$("#note").val(data.catatan);
					$("#overlay-front").attr("src", "/web/uploads/"+data.logo);
					$("#overlay-back").attr("src", "/web/uploads/"+data.logo);

					$("#overlay-front").css("left", data.front_x+"px");
					$("#overlay-front").css("top", data.front_y+"px");
					$("#overlay-front").css("max-width", data.front_size+"px");
					$("#overlay-front").css("max-height", data.front_size+"px");

					$("#overlay-back").css("left", data.back_x+"px");
					$("#overlay-back").css("top", data.back_y+"px");
					$("#overlay-back").css("max-width", data.back_size+"px");
					$("#overlay-back").css("max-height", data.back_size+"px");
				}
			});
			
		}
	</script>
</body>
</html>