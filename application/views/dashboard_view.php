<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<?php if($this->session->userdata('level') == 'Anggota'){ redirect(base_url('transaksi'));}?>
<!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
  <div class="content-wrapper">
    <section class="content-header">
      <h3>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard" style="color:black;">Dashboard</i></a></li>
      </ol>
      </h3>
    </section>
    <!-- Main content -->
      <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
              <div class="col-sm-12">
                <div class="col-lg-6 col-xs-6">
                  <div class="small-box bg-green">
                    <div class="inner">
                      <h3><?= $count_pengguna;?></h3>

                      <p>Anggota</p>
                    </div >
                    <div  class="icon" style="color: white;">
                      <i class="fa fa-users"></i>
                    </div>
                    <a href="transaksi/kembali" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>

                <div  class="col-lg-6 col-xs-6">
                   <!--small box-->
                  <div class="small-box bg-blue">
                    <div class="inner">
                      <h3><?= $count_buku;?></h3>

                      <p style="color: white;">Jenis Buku</p>
                    </div style="color: white;">
                    <div class="icon" style="color: white;">
                      <i class="fa fa-book" style="color: white;"></i>
                    </div>
                    <a href="data" class="small-box-footer"><i class="fa fa-arrow-circle-right" style="color: white;"></i></a>
                  </div>
                </div> 

                <div class="col-lg-6 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-red">
                    <div class="inner">
                      <h3><?= $count_pinjam;?></h3>

                      <p>Pinjam</p>
                    </div>
                    <div class="icon" style="color: white;">
                      <i class="fa fa-upload"></i>
                    </div>
                    <a href="transaksi" class="small-box-footer" ><i class="fa fa-arrow-circle-right" ></i></a>
                  </div>
                </div>
                <div class="col-lg-6 col-xs-6">
                  <div class="small-box bg-yellow">
                    <div class="inner">
                      <h3><?= $count_kembali;?></h3>

                      <p>Di Kembalikan</p>
                    </div>
                    <div class="icon" style="color: white;">
                      <i class="fa fa-download"></i>
                      </div>
                    <a href="user" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
        </section>


    </div>
    <!-- /.content -->
