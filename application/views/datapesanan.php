<!DOCTYPE html>
<html>
<head>
	<title>Data Pesanan</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <style type="text/css">
 	 	.form-group {
 	 		font-family: 'Pompiere', cursive;
			font-size: 30px;
			
 	 	}
 	 	body {
 	 		background-color:  	#CC3300;
 	 		color: white;
 	 	}
 	 </style>
</head>
<body>
	
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  	<a class="navbar-brand" href="#">Navbar</a>
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  	</button>
  	<div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      		<li class="nav-item">
        		<a class="nav-link" href="#">Link</a>
      		</li>
      		<li class="nav-item">
        	<a class="nav-link" href="#">Link</a>
      		</li>
      		<li class="nav-item">
       			 <a class="nav-link" href="#">Link</a>
      		</li>    
    		</ul>
  		</div>  
	</nav>
	<br/>

	<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<br/>
	

	<h2 class="font-weight-bold , text-center">Data Pesanan</h2>
	<table border="2" class="table table-bordered, table-responsive-sm">
		<tr class="thead-light">
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Pesanan</th>
			<th>Penejelasan Pesanan</th>
			<th>Opsi</th>		
		</tr>
	<!-- 	<?php 
		include "koneksi.php";
		$query_mysql = mysql_query("SELECT * FROM user")or die(mysql_error());
		$nomor = 1;
		while($data = mysql_fetch_array($query_mysql)){
		?>
		<tr >
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['alamat']; ?></td>
			<td><?php echo $data['pekerjaan']; ?></td>
			<td><?php echo $data['penjelasan']; ?></td>
			<td>
				<button type="button" class="btn btn-success">Edit</button>
				<button type="button" class="btn btn-danger">Delete</button>			
			</td>
		</tr>
		<?php } ?> -->
	</table>
	<a class="tombol" href="input.php"> <b><font color="white"> + Tambah Data Baru</font></b></a>
</body>
</html>