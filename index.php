<?php 
  require_once "+koneksi.php";
  session_start();
  if(@$_SESSION['level_adm']) { 
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="assets/bootstrap-4.1.3/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="assets/bootstrap/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/dist/css/Adminlte.min.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <!-- data tables -->
    <link rel="stylesheet" href="assets/DataTables/datatables.min.css">
    <!-- sweet alert -->
    <link rel="stylesheet" href="assets/sweetalert2/sweetalert2.min.css">
    <!-- <link rel="stylesheet" href="assets/sweetalert2/animate.css"> -->
    <!-- style css saya -->
    <link rel="stylesheet" href="assets/myCSS/StyleKP.css">
    <!-- Font -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Neucha" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Mukta" rel="stylesheet"> -->
    <link href="assets/Fonts/Mukta.css" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Share+Tech" rel="stylesheet"> -->

    <title>Amanah Husada</title>
  </head>
  <body>
    <div class="body">
      <div class="main-body">
        <nav class="navbar navbar-default">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="./">Apotek Amanah Husada</a>
            </div>
            
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="dropdown <?php if(@$_GET['page']=='obat' || @$_GET['page']=='pegawai' || @$_GET['page']=='supplier' || @$_GET['page']=='tambahdataobat' || @$_GET['page']=='obat_kadaluarsa' || @$_GET['page']=='riwayat_databrg') {echo "active";} ?>">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MASTER <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li class="<?php if(@$_GET['page']=='obat' || @$_GET['page']=='tambahdataobat' || @$_GET['page']=='riwayat_databrg') {echo"active";} ?>"><a href="?page=obat">Data Barang</a></li>
                    <li class="<?php if(@$_GET['page']=='pegawai') {echo"active";} ?>"><a href="?page=pegawai">Data Pegawai</a></li>
                    <li class="<?php if(@$_GET['page']=='supplier') {echo"active";} ?>"><a href="?page=supplier">Data Supplier</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="<?php if(@$_GET['page']=='obat_kadaluarsa') {echo"active";} ?>"><a href="?page=obat_kadaluarsa">Data Obat Kadaluarsa</a></li>
                  </ul>
                </li>

                <!-- Transaksi -->
                <li class="dropdown <?php if(@$_GET['page']=='penjualan' || @$_GET['page']=='pemesanan' || @$_GET['page']=='pembelian' || @$_GET['page']=='transaksi_penjualan' || @$_GET['page']=='transaksi_pemesanan' || @$_GET['page']=='tambahdata_pembelian') {echo "active";} ?>">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">TRANSAKSI <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li class="<?php if(@$_GET['page']=='penjualan' || @$_GET['page']=='transaksi_penjualan') {echo"active";} ?>">
                        <a href="?page=transaksi_penjualan">
                            Penjualan
                        </a>
                    </li>
                    <?php if($_SESSION['level_adm'] == 'manager' || $_SESSION['level_adm'] == 'apoteker') { ?>
                    <li class="<?php if(@$_GET['page']=='pembelian' || @$_GET['page']=='tambahdata_pembelian') {echo"active";} ?>">
                        <a href="?page=tambahdata_pembelian">
                            Pembelian
                        </a>
                    </li>
                    <li class="<?php if(@$_GET['page']=='pemesanan' || @$_GET['page']=='transaksi_pemesanan') {echo"active";} ?>">
                        <a href="?page=transaksi_pemesanan">
                            Pemesanan
                        </a>
                    </li>
                    <?php } ?>
                    <li role="separator" class="divider"></li>
                    <li class="<?php if(@$_GET['page']=='laporan_transaksi') {echo"active";} ?>">
                        <a href="?page=laporan_transaksi">
                            Laporan Transaksi
                        </a>
                    </li>
                  </ul>
                </li>
                <!-- Transaksi -->

                <!-- Retur -->
                <li class="dropdown <?php if(@$_GET['page']=='retur_penjualan' || @$_GET['page']=='transaksi_retur_penjualan' || @$_GET['page']=='retur' || @$_GET['page']=='transaksi_retur' || @$_GET['page']=='laporan_retur') {echo "active";} ?>">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">RETUR <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li class="<?php if(@$_GET['page']=='retur_penjualan' || @$_GET['page']=='transaksi_retur_penjualan') {echo"active";} ?>"><a href="?page=transaksi_retur_penjualan">Retur Penjualan</a></li>
                    <?php if($_SESSION['level_adm'] == 'manager' || $_SESSION['level_adm'] == 'apoteker') { ?>
                    <li class="<?php if(@$_GET['page']=='retur' || @$_GET['page']=='transaksi_retur') {echo"active";} ?>"><a href="?page=transaksi_retur">Retur Pembelian</a></li>
                    <?php } ?>
                    <li role="separator" class="divider"></li>
                    <li class="<?php if(@$_GET['page']=='laporan_retur') {echo"active";} ?>"><a href="?page=laporan_retur">Laporan Retur</a></li>
                  </ul>
                </li>
                <!-- Retur -->

                <li class="<?php if(@$_GET['page']=='data_kas') {echo"active";} ?>">
                  <a href="?page=data_kas">KAS </a>
                </li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li class="waktu">
                  <a>
                    <span>
                      <?php echo date('d / M / Y'); ?> -
                    </span>
                    <span id="jam">
                      
                    </span>
                  </a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo @$_SESSION['nama_adm']; ?> <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="" id="tombol_profil" data-toggle="modal" data-target="#profil" data-id="<?php echo @$_SESSION['id_pgw']; ?>">Profil</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="?page=logout&level=<?php echo @$_SESSION['level_adm'] ?>">Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

        <!-- jquery 3 -->
        <script src="assets/Jquery/jquery-3.3.1.min.js"></script>
        <!-- sweet alert -->
        <script src="assets/sweetalert2/sweetalert2.min.js"></script>
        <!-- auto format money -->
        <script src="assets/Auto-Format-Currency-With-jQuery/simple.money.format.js"></script>
        <!-- input mask robin -->
        <script src="assets/InputMask/jquery.inputmask.js"></script>
        <script src="assets/InputMask/jquery.inputmask.extensions.js"></script>
        <script src="assets/InputMask/inputmask.numeric.extensions.js"></script>
        <!-- <div class=""> -->
        <div class="container">
          <?php 
            if(@$_GET['page']=='') {
              include 'inc/home.php';
            }else if(@$_GET['page']=='obat') {
              include 'inc/data_obat.php';
            }else if(@$_GET['page']=='tambahdataobat') {
              include 'inc/tambah_dataobat.php';
            }else if(@$_GET['page']=='pegawai') {
              include 'inc/pegawai.php';
            }else if(@$_GET['page']=='supplier') {
              include 'inc/supplier.php';
            }else if(@$_GET['page']=='penjualan') {
              include 'inc/data_penjualan.php';
            }else if(@$_GET['page']=='transaksi_penjualan') {
              include 'inc/penjualan.php';
            }else if(@$_GET['page']=='pemesanan') {
              include 'inc/data_pemesanan.php';
            }else if(@$_GET['page']=='transaksi_pemesanan') {
              include 'inc/tambah_datapemesanan.php';
            }else if(@$_GET['page']=='pembelian') {
              include 'inc/pembelian_obat.php';
            }else if(@$_GET['page']=='retur') {
              include 'inc/data_retur.php';
            }else if(@$_GET['page']=='transaksi_retur') {
              include 'inc/tambah_dataretur.php';
            }else if(@$_GET['page']=='tambahdata_pembelian') {
              include 'inc/tambahdata_pembelian2.php';
            }else if(@$_GET['page']=='obat_kadaluarsa') {
              include 'inc/dataobat_exp3.php';
            }else if(@$_GET['page'] == 'logout') {
              include "inc/logout.php";
            } else if(@$_GET['page'] == 'laporan_transaksi') {
              include "inc/laporan_transaksi.php";
            } else if(@$_GET['page'] == 'laporan_retur') {
              include "inc/laporan_retur.php";
            } else if(@$_GET['page'] == 'transaksi_retur_penjualan') {
              include "inc/transaksi_retur_penjualan.php";
            } else if(@$_GET['page'] == 'retur_penjualan') {
              include "inc/data_returpenjualan.php";
            } else if(@$_GET['page'] == 'data_kas') {
              include "inc/data_kas.php";
            } else if(@$_GET['page'] == 'riwayat_databrg') {
              include "inc/riwayat_databrg.php";
            }
           ?>
        </div>
        <div class="modal fade" id="profil">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Profil Pegawai</h4>
              </div>
              <div class="modal_body modal_profil" id="modal_profil" style="padding: 10px;">
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer">
      <div class="pull-right">
        <b>Version</b> 1.0
      </div>
      <strong>Copyright &copy; 2018-2019 Apotek Amanah Husada.</strong> All rights
      reserved.
    </div>
    <!-- </div> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <!-- <script src="assets/bootstrap-4.1.3/js/bootstrap.min.js"></script> -->
    <script src="assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/DataTables/datatables.min.js"></script>

    <script>
      $(document).ready(function() {
        $('#example1').DataTable({
          "pageLength": 50
        });
        $('#example2').DataTable();
        $('#example3').DataTable({
          searching: false,
          paging: false
        });
      });

      $("#tombol_profil").click(function() {
        var id = $(this).data('id');
        $.ajax({
          url: "inc/detail_transaksi.php?page=profil_pegawai",
          type: "POST",
          data: "id="+id,
          success: function(data) {
            $("#modal_profil").html(data);
          }
        })
      });

      function checkTime(i) {
        if (i < 10) {
          i = "0" + i;
        }
        return i;
      }
      function startTime() {
        var today = new Date();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        // add a zero in front of numbers<10
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('jam').innerHTML = h + ":" + m + ":" + s;
        t = setTimeout(function() {
          startTime()
        }, 500);
      }
      startTime();
    </script>
  </body>
</html>
<?php
} else {
  echo "<script>window.location='login.php';</script>";
} ?>