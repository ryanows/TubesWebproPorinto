<!DOCTYPE html>
<html>
<head>
	<title>Home Tukang Jahit</title>
	 <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	 <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">
	 <link rel="stylesheet" type="text/css" href="assets/css/all.css">
	 <script src="assets/js/jquery.min.js"></script>
	 <script src="assets/js/popper.min.js"> </script>
	 <script src="assets/js/bootstrap.min.js"></script>
	 <script src="assets/js/jquery.dataTables.min.js"></script>
	 <script src="assets/js/dataTables.bootstrap4.min.js"></script>
	 <link rel="stylesheet" type="text/css" href="assets/css/style/theme.css">
</head>

<body>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		  <a class="navbar-brand" href="Tukang_Jahit/profil" >
	  	</a>
 		 <ul class="navbar-nav">
    		<li class="nav-item">
     	 		<a class="nav-link" href="">Home</a>
    		</li>
    		<li class="nav-item">
     			 <a class="nav-link" href="member/logout">Logout</a>
    		</li>
  		</ul>
	</nav>
	<div class="container modal-content" style="margin-top: 50px; padding-top: 30px; background-color: white">
		
		<table id="pesanan" style="margin-top: 50px" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Pemesan</th>
					<th>Tanggal Pemesanan</th>
					<th>Aksi</th>
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
										<input type="color" name="warna" readonly="true" value="#ffffff" class="form-control" style="height: 40px">
									</div>
									<div class="form-group">
										<label>Catatan</label>
										<textarea  type="text" class="form-control" readonly="true" id="note" placeholder="Note" cols = "40" crows "50" > </textarea>
									</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4">
								<div class="template">
									<img id="template-front" src="assets/img/template-front.png" style="max-height: 387px;">
									
									<img id="overlay-front" class="overlay" style="max-height: 100px; max-width: 100px;" src="">
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4">
								<div class="template">
									<img id="tshirt-template" src="assets/img/template-back.png" style="max-height: 387px">
									<img id="overlay-back" class="overlay" style="max-height: 100px; max-width: 100px;" src="">
								</div>
							</div>
						</div>
					</div>
	      		</div>
	      		<!-- Modal footer -->
	      		<div class="modal-footer">
	      			<button type="button" id="btn-proses" class="btn btn-green">Proses</button>
	        		<button type="button" class="btn btn-red" data-dismiss="modal">Close</button>
	      		</div>

	    	</div>
	  	</div>
	</div>
	<script type="text/javascript">
		var table = $("#pesanan").DataTable();
		$.ajax({
			url: "pesanan/getPesanan?tk=true&username=<?php echo $this->session->userdata('username') ?>",
			success: function(result){
				var json = $.parseJSON(result);
				var num = 1;
				$.each(json, function(key, value){
					table.row.add([
						num++,
						value.nama_member,
						value.tanggal,
						"<button class='btn btn-green btn-small' data-toggle='modal' data-target='#detail' onclick='setModal("+value.id+")'>Detail</button>"
					]).draw(false);
				});
			}
		});

		//$("#btn-proses").attr("onclick", "setStatus("+6+",2)");
		function setModal(id){
			$.ajax({
			url: "pesanan/getPesanan?id="+id,
			success: function(result){
				var json = $.parseJSON(result);
				var data = json[0];
				
				$("#jumlah").val(data.jumlah);
				$("#ukuran").val(data.ukuran);
				$("#bahan_baku").val(data.bahan_baku);
				$("#warna").val(data.warna);
				$("#note").val(data.catatan);
				$("#overlay-front").attr("src", "uploads/"+data.logo);
				$("#overlay-back").attr("src", "uploads/"+data.logo);

				$("#overlay-front").css("left", data.front_x+"px");
				$("#overlay-front").css("top", data.front_y+"px");
				$("#overlay-front").css("max-width", data.front_size+"px");
				$("#overlay-front").css("max-height", data.front_size+"px");

				$("#overlay-back").css("left", data.back_x+"px");
				$("#overlay-back").css("top", data.back_y+"px");
				$("#overlay-back").css("max-width", data.back_size+"px");
				$("#overlay-back").css("max-height", data.back_size+"px");

				if(data.status == "SEDANG DI PROSES"){
					$("#btn-proses").text("Sudah Selesai");
					$("#btn-proses").attr("onclick", "setStatus("+data.id+",3)");
				} else if(data.status == "MENUNGGU"){

					$("#btn-proses").attr("onclick", "setStatus("+data.id+",2)");
				} else {
					$("#btn-proses").hide();
				}
			}});
			
		}

		function setStatus(id, status){
			$.ajax({
				url: "pesanan/setStatus?id="+id+"&status="+status,
				success: function(result){
					var json = $.parseJSON(result);
					if(json.status == false){
						alert('Stok tidak mencukupi');
					} else {
						alert("Berhasil mengubah status");
					}
				}
			});
		}
	</script>
</body>
</html>