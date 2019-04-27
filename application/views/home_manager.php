<!DOCTYPE html>
<html>
<head>
	<title>Home Manager</title>
	 <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	 <link rel="stylesheet" type="text/css" href="assets/css/all.css">
	 <script src="assets/js/jquery.min.js"></script>
	 <script src="assets/js/popper.min.js"> </script>
	 <script src="assets/js/bootstrap.min.js"></script>
	 <link rel="stylesheet" type="text/css" href="assets/css/style/theme.css">
	 <style>
.grid-container {
  display: grid;
  grid-gap: 10px;
  background-color: black;
  padding: 10px;
}
.grid-item {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  padding: 20px;
  font-size: 30px;
}
.item1 {
  grid-column: 1 / span 2;
  grid-row: 1;
}
.item2 {
  grid-column: 3;
  grid-row: 1 / span 2;
}
.item5 {
  grid-column: 1 / span 3;
  grid-row: 3;
}
</style>
</head>

<body>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		  <a class="navbar-brand" href="#" >
      </a>
 		 <ul class="navbar-nav">
    		<li class="nav-item">
     	 		<a class="nav-link" href="">Home</a>
    		</li>
    		<li class="nav-item">
      			<a class="nav-link" href="manager/tambahBahanBaku">Tambah Bahan Baku</a>
    		</li>
    		<li class="nav-item">
     			 <a class="nav-link" href="manager/lihatSemuaBahanBaku">Lihat Semua Bahan Baku</a>
    		</li>
    		<li class="nav-item">
     			 <a class="nav-link" href="manager/lihatSemuaPesanan">Lihat Semua Pesanan</a>
    		</li>
    		<li class="nav-item">
     			 <a class="nav-link" href="manager/logout">Logout</a>
    		</li>
  		</ul>
	</nav>
</body>
</html>