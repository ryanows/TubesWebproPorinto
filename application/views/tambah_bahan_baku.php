<!DOCTYPE html>
<html>
<head>
	<title>Home Manager</title>
	 <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	 <link rel="stylesheet" type="text/css" href="../assets/css/all.css">
	 <script src="../assets/js/jquery.min.js"></script>
	 <script src="../assets/js/popper.min.js"> </script>
	 <script src="../assets/js/bootstrap.min.js"></script>
<!-- 	 <link rel="stylesheet" type="text/css" href="../assets/css/style/theme.css"> -->
</head>

<body>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		  <a class="navbar-brand" href="#" >
	  	</a>
 		 <ul class="navbar-nav">
    		<li class="nav-item">
     	 		<a class="nav-link" href="../manager">Home</a>
    		</li>
    		<li class="nav-item">
      		    <a class="nav-link" href="tambahBahanBaku">Tambah Bahan Baku</a>
    		</li>
    		<li class="nav-item">
     			<a class="nav-link" href="lihatSemuaBahanBaku">Lihat Semua Bahan Baku</a>
    		</li>
    		<li class="nav-item">
     			<a class="nav-link" href="lihatSemuaPesanan">Lihat Semua Pesanan</a>
    		</li>
    		<li class="nav-item">
     			<a class="nav-link" href="logout">Logout</a>
    		</li>
  		</ul>
	</nav>
	<div class="container modal-content" style="margin-top: 50px; padding-top: 30px">
		<form method="post" action="addBahanBaku">
            <div class="form-group">
                <input type="text" name="nama" placeholder="Nama Bahan Baku" class="form-control">
            </div>
            <div class="form-group">
                <input type="number" name="stok" placeholder="Stok" class="form-control">
            </div>
            <button class="btn btn-blue form-control">Tambah</button>
            <?php
                if($this->session->flashdata()){
                    echo $this->session->flashdata('status');
                }
            ?>
        </form>
    </div>
</body>
</html>