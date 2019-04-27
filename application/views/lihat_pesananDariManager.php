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
    
        <table id="pesanan" style="margin-top: 50px" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pemesanan</th>
                    <th>Tukang Jahit</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Detail</th>
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
            url: '../pesanan/getPesanan',
            success: function(result){
                var json = $.parseJSON(result);
                var num = 1;
                $.each(json, function(key, value){
                    table.row.add([
                        num++,
                        value.nama_member,
                        value.nama_tukang_jahit,
                        value.tanggal,
                        value.status,
                        "<button class='btn btn-green' data-toggle='modal' data-target='#detail' onclick='setModal("+value.id+")'>Detail</button>",
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