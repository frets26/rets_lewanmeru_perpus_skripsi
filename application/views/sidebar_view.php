<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

<link rel="stylesheet" type="text/css" href="fontawesome_6/css/all.min.css/fontawesome.css">
<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <?php
            $d = $this->db->query("SELECT * FROM tbl_login WHERE id_login='$idbo'")->row();
            if(isset($d->foto)){
          ?>
          <br/>
          <img src="<?php echo base_url();?>assets_style/image/<?php echo $d->foto;?>" alt="#" c
          lass="user-image" style="border:2px solid #fff;height:auto;width:100%;"/>
          <?php }else{?>
            <!--<img src="" alt="#" class="user-image" style="border:2px solid #fff;"/>-->
            <i class="fa fa-user fa-4x" style="color:#fff;"></i>
          <?php }?>
        </div>
        <div class="pull-left info" style="margin-top: 5px;">
          <p><?php echo $d->nama;?></p>
          <p><?= $d->level;?>
          </p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
        <br/>
        <br/>
        <br/>
        <br/>
        </div>
        <ul class="sidebar-menu" data-widget="tree">
            <?php if($this->session->userdata('level') == 'Petugas'){?>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <li class="header"></li>
            <li class="<?php if($this->uri->uri_string() == 'dashboard'){ echo 'active';}?>">
                <style type="text/css">
                    i{font-size:100px}
                </style>
                <a href="<?php echo base_url('dashboard');?>">
                    <i  class=" fa fa-home"  style="color:blue;"></i> <span>Dashboard</span>
                </a>
          
            <li class="treeview <?php if($this->uri->uri_string() == 'data/kategori'){ echo 'active';}?>
                <?php if($this->uri->uri_string() == 'data/rak'){ echo 'active';}?>
                <?php if($this->uri->uri_string() == 'data'){ echo 'active';}?>
                <?php if($this->uri->uri_string() == 'data/bukutambah'){ echo 'active';}?>
                <?php if($this->uri->uri_string() == 'data/bukudetail/'.$this->uri->segment('3')){ echo 'active';}?>
                <?php if($this->uri->uri_string() == 'data/bukuedit/'.$this->uri->segment('3')){ echo 'active';}?>">
                <a href="#">
                    <i class="fa fa-file" style="color:blue;"></i>
                    <span>Data </span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right" style="color:blue;"></i>
                    </span>
                </a>
                <ul class="treeview-menu">

                      </li>
                        <li class="<?php if($this->uri->uri_string() == 'user'){ echo 'active';}?>
                            <?php if($this->uri->uri_string() == 'user/tambah'){ echo 'active';}?>
                             <?php if($this->uri->uri_string() == 'user/edit/'.$this->uri->  segment('3')){ echo 'active';}?>">
                            <a href="<?php echo base_url('user');?>" class="cursor">
                        <i class="fa fa-users" style="color:blue;"></i> <span>Data User</span>
                    </a>
                    </li>
                    <li class="<?php if($this->uri->uri_string() == 'data'){ echo 'active';}?>
                        <?php if($this->uri->uri_string() == 'data/bukutambah'){ echo 'active';}?>
                        <?php if($this->uri->uri_string() == 'data/bukudetail/'.$this->uri->segment('3')){ echo 'active';}?>
                        <?php if($this->uri->uri_string() == 'data/bukuedit/'.$this->uri->segment('3')){ echo 'active';}?>">
                        <a href="<?php echo base_url("data");?>" class="cursor">
                            <span class="fa fa-address-book" style="color:blue;" ></span> Data Buku
                            
                        </a>
                    </li>
                    <li class=" <?php if($this->uri->uri_string() == 'data/kategori'){ echo 'active';}?>">
                        <a href="<?php echo base_url("data/kategori");?>" class="cursor">
                            <span class="fa fa-bookmark" style="color:blue;"></span>Data Kategori Buku
                            
                        </a>
                    </li>
                    <li class=" <?php if($this->uri->uri_string() == 'data/rak'){ echo 'active';}?>">
                        <a href="<?php echo base_url("data/rak");?>" class="cursor">
                            <span class="fa fa-stack-overflow" style="color:blue;"></span> Rak Buku
                            
                        </a>
                    </li>
                </ul>
            </li>
            <li class="treeview 
                <?php if($this->uri->uri_string() == 'transaksi'){ echo 'active';}?>
                <?php if($this->uri->uri_string() == 'transaksi/kembali'){ echo 'active';}?>
                <?php if($this->uri->uri_string() == 'transaksi/pinjam'){ echo 'active';}?>
                <?php if($this->uri->uri_string() == 'transaksi/detailpinjam/'.$this->uri->segment('3')){ echo 'active';}?>
                <?php if($this->uri->uri_string() == 'transaksi/kembalipinjam/'.$this->uri->segment('3')){ echo 'active';}?>">
                <a href="#">
                    <i class="fa fa-hourglass" style="color:blue;"></i>
                    <span >Transaksi</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"style="color:blue;"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php if($this->uri->uri_string() == 'transaksi'){ echo 'active';}?>
                        <?php if($this->uri->uri_string() == 'transaksi/pinjam'){ echo 'active';}?>
                        <?php if($this->uri->uri_string() == 'transaksi/kembalipinjam/'.$this->uri->segment('3')){ echo 'active';}?>">
                        <a href="<?php echo base_url("transaksi");?>" class="cursor">
                            <span class="fa fa-upload" style="color:blue;"></span> Peminjaman
                            
                        </a>
                    </li>
                    <li class="<?php if($this->uri->uri_string() == 'transaksi/kembali'){ echo 'active';}?>">
                        <a href="<?php echo base_url("transaksi/kembali");?>" class="cursor">
                            <span class="fa fa-download" style="color:blue;"></span> Pengembalian

                        </a>
                        <li class="<?php if($this->uri->uri_string() == 'transaksi/denda'){ echo 'active';}?>">
                             <a href="<?php echo base_url("transaksi/denda");?>" class="cursor">
                        <i class="fa fa-usd"style="color:blue;"></i> <span>Denda</span>
                    
                         </a>
                        </li>
                    </li>
                </ul>
            </li>
            
            <?php }?>
            <?php if($this->session->userdata('level') == 'Anggota'){?>
                <li class="<?php if($this->uri->uri_string() == 'user/edit/'.$this->uri->segment('3')){ echo 'active';}?>">
                    <a href="<?php echo base_url('user/edit/'.$this->session->userdata('ses_id'));?>" class="cursor">
                        <i class="fa fa-user" style="color:blue;"></i>  <span>Data Anggota</span>
                    </a>
                </li>
                    <li class="<?php if($this->uri->uri_string() == 'data'){ echo 'active';}?>
                    <?php if($this->uri->uri_string() == 'data/bukudetail/'.$this->uri->segment('3')){ echo 'active';}?>">
                    <a href="<?php echo base_url("data");?>" class="cursor">
                        <i class="fa fa-search" style="color:blue;"></i>  <span>Cari Buku</span>
                    </a>
                </li>
                <li class="<?php if($this->uri->uri_string() == 'transaksi'){ echo 'active';}?>">
                    <a href="<?php echo base_url("transaksi");?>" class="cursor">
                        <i class="fa fa-upload" style="color:blue;"></i> <span>Data Peminjaman </span>
                    </a>
                </li>
                <li class="<?php if($this->uri->uri_string() == 'transaksi/kembali'){ echo 'active';}?>">
                    <a href="<?php echo base_url("transaksi/kembali");?>" class="cursor">
                        <i class="fa fa-download" style="color:blue;"></i> <span>Data Pengambilan</span>
                    </a>
                </li>
                <li class="">
                    <a href="<?php echo base_url('user/detail/'.$this->session->userdata('ses_id'));?>" target="_blank" class="cursor">
                        <i class="fa fa-print " style="   color:blue ;"></i> <span>Cetak kartu Anggota</span>
                    </a>
                </li>
            <?php }?>
        </ul>
        <div class="clearfix"></div>
        <br/>
        <br/>
    </section>
    <!-- /.sidebar -->
  </aside>
