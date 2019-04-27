<!DOCTYPE html>
<html>
<head>
	<title>Lihat Bahan Baku</title>
	  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="../assets/css/dataTables.bootstrap4.min.css">
   <link rel="stylesheet" type="text/css" href="../assets/css/all.css">
   <script src="../assets/js/jquery.min.js"></script>
   <script src="../assets/js/popper.min.js"> </script>
   <script src="../assets/js/bootstrap.min.js"></script>
   <script src="../assets/js/jquery.dataTables.min.js"></script>
   <script src="../assets/js/dataTables.bootstrap4.min.js"></script>
   <link rel="stylesheet" type="text/css" href="../assets/css/style/theme.css">  
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
      			<a class="nav-link" href="../manager/tambahBahanBaku">Tambah Bahan Baku</a>
    		</li>
    		<li class="nav-item">
     			 <a class="nav-link" href="">Lihat Semua Bahan Baku</a>
    		</li>
    		<li class="nav-item">
     			 <a class="nav-link" href="../manager/lihatSemuaPesanan">Lihat Semua Pesanan</a>
    		</li>
    		<li class="nav-item">
     			 <a class="nav-link" href="../manager/logout">Logout</a>
    		</li>
  		</ul>
	</nav>
    <div class="container modal-content" style="margin-top: 50px; padding-top: 30px; background-color: white">
    
        <table id="bahan-baku" style="margin-top: 50px" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Bahan Baku</th>
                    <th>Stok</th>
                </tr>
            </thead>
            <tbody>
            
            </tbody>
        </table>
    </div>
    <script type="text/javascript">
        var table = $("#bahan-baku").DataTable();
        $.ajax({
            url: 'getBahanBaku',
            success: function(result){
                var json = $.parseJSON(result);
                var num = 1;
                $.each(json, function(key, value){
                    table.row.add([
                        num++,
                        value.nama,
                        value.stok
                        ]).draw(false);
                });
            }
        });

        
    </script>
</body>
</html>