<?php if(! defined('BASEPATH')) exit('No direct script acess allowed');?>
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      <i class="fa fa-edit" style="color:black"> </i>  <?= $title_web;?>
    </h1>
  </section>
  <section class="content">
    <?php if(!empty($this->session->flashdata())){ echo $this->session->flashdata('pesan');}?>
    <div class="row">
        <div class="col-md-12">
            <div class="box ">
                <div class="box-header with-border">
                    <?php if($this->session->userdata('level') == 'Petugas'){?>
                    <a href="data/bukutambah" ><button class="btn btn-primary">
                        <i class= " fa fa-plus" style="color:black;"> Tambah Buku</i > </button  style="color:black;"></a>
                    <?php }?>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <br/>
                    <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped table" width="100%">

                        <thead>
                            <tr >
                                <th bgcolor="gray " style="color: white;">No</th>
                                <th bgcolor="gray" style="color: white;">Sampul</th>
                                <th bgcolor="gray" style="color: white;">ISBN</th>
                                <th bgcolor="gray" style="color: white;">Title</th>
                                <th bgcolor="gray" style="color: white;">Penerbit</th>
                                <th bgcolor="gray" style="color: white;">Tahun Buku</th>
                                <th bgcolor="gray" style="color: white;">Stok Buku</th>
                                <th bgcolor="gray" style="color: white;">Dipinjam</th>
                                <th bgcolor="gray" style="color: white;">Tanggal Masuk</th>
                                <th bgcolor="gray" style="color: white;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no=1;foreach($buku->result_array() as $isi){?>
                            <tr>
                                <td><?= $no;?></td>
                                <td>
                                    <center>
                                        <?php if(!empty($isi['sampul'] !== "0")){?>
                                        <img src="<?php echo base_url();?>assets_style/image/buku/<?php echo $isi['sampul'];?>" alt="#" 
                                        class="img-responsive" style="height:auto;width:100px;"/>
                                        <?php }else{?>
                                            <!--<img src="" alt="#" class="user-image" style="border:2px solid #fff;"/>-->
                                            <i class="fa fa-book fa-3x" style="color:#333;"></i> <br/><br/>
                                            Tidak Ada Sampul
                                        <?php }?>
                                    </center>
                                </td>
                                <td><?= $isi['isbn'];?></td>
                                <td><?= $isi['title'];?></td>
                                <td><?= $isi['penerbit'];?></td>
                                <td><?= $isi['thn_buku'];?></td>
                                <td><?= $isi['jml'];?></td>
                                <td>
                                    <?php
                                        $id = $isi['buku_id'];
                                        $dd = $this->db->query("SELECT * FROM tbl_pinjam WHERE buku_id= '$id' AND status = 'Dipinjam'");
                                        if($dd->num_rows() > 0 )
                                        {
                                            echo $dd->num_rows();
                                        }else{
                                            echo '0';
                                        }
                                    ?>
                                </td>
                                <td><?= $isi['tgl_masuk'];?></td>
                                    <td <?php if($this->session->userdata('level') == 'Petugas'){?>style="width:17%;"<?php }?>>
                                
                                    <?php if($this->session->userdata('level') == 'Petugas'){?>
                                    <a href="<?= base_url('data/bukuedit/'.$isi['id_buku']);?>"><button class="btn btn-success"><i class="fa fa-edit"style="color:black;" ></i>Edit</button></a>
                                    <a href="<?= base_url('data/bukudetail/'.$isi['id_buku']);?>">
                                    <button  class="btn btn-primary"><i class="fa fa-sign-in " style="color:black;"></i> Detail Buku</button></a>
                                    <a href="<?= base_url('data/prosesbuku?buku_id='.$isi['id_buku']);?>" onclick="return confirm('Anda yakin Buku ini akan dihapus ?');">
                                    <button  class="btn btn-danger"><i class="fa fa-trash" style="color:black;"></i>Hapus</button></a>
                                    <?php }else{?>
                                        <a href="<?= base_url('data/bukudetail/'.$isi['id_buku']);?>">
                                        <button  class="btn btn-primary"><i class="fa fa-sign-in " style="color:black;"></i> Detail</button></a>
                                    <?php }?>
                                </td>
                            </tr>
                        <?php $no++;}?>
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
