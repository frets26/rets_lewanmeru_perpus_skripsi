                    <?php if(! defined('BASEPATH')) exit('No direct script acess allowed');?>
                    <div class="content-wrapper">
                      <section class="content-header">
                        <h1>
                          <i class="fa fa-edit" style="color:black;">Daftar Data User</i>  
                        </h1>
                      </section>
                      <section class="content">
                        <?php if(!empty($this->session->flashdata())){ echo $this->session->flashdata('pesan');}?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="box">
                                    <div class="box-header with-border">
                                        <a href="user/tambah"><button class="btn btn-primary"><i class="fa fa-plus" style="color:black;"> Tambah User</i style="color:black;">  </button style="color:black;"></a>

                                            </div>
                                            <!-- /.box-header -->
                                            <div class="box-body">
                                            <div class="table-responsive">
                                                <br/>
                                                <table id="example1" class="table table-bordered table-striped table" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th bgcolor="gray " style="color: white;">No</th>
                                                            <th bgcolor="gray " style="color: white;">ID</th>
                                                            <th bgcolor="gray " style="color: white;">Foto</th>
                                                            <th bgcolor="gray " style="color: white;">Nama</th>
                                                            <th bgcolor="gray " style="color: white;">User</th>
                                                            <th bgcolor="gray " style="color: white;">Jenkel</th>
                                                            <th bgcolor="gray " style="color: white;">Telepon</th>
                                                            <th bgcolor="gray " style="color: white;">Level</th>
                                                            <th bgcolor="gray " style="color: white;">Alamat</th>
                                                            <th bgcolor="gray "bgcolor="gray " style="color: white;">Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                <?php $no=1;foreach($user as $isi){?>
                                                    <tr>
                                                        <td><?= $no;?></td>
                                                        <td><?= $isi['anggota_id'];?></td>
                                                        <td>
                                                            <center>
                                                                <?php if(!empty($isi['foto'] !== "-")){?>
                                                                <img src="<?php echo base_url();?>assets_style/image/<?php echo $isi['foto'];?>" alt="#" 
                                                                class="img-responsive" style="height:auto;width:100px;"/>
                                                                <?php }else{?>
                                                                    <!--<img src="" alt="#" class="user-image" style="border:2px solid #fff;"/>-->
                                                                    <i class="fa fa-user fa-3x" style="color:#333;"></i>
                                                                <?php }?>
                                                            </center>
                                                        </td>
                                                        <td><?= $isi['nama'];?></td>
                                                        <td><?= $isi['user'];?></td>
                                                        <td><?= $isi['jenkel'];?></td>
                                                        <td><?= $isi['telepon'];?></td>
                                                        <td><?= $isi['level'];?></td>
                                                        <td><?= $isi['alamat'];?></td>
                                                        <td style="width:20%;">
                                                            <a href="<?= base_url('user/edit/'.$isi['id_login']);?>"><button class="btn btn-success"><i style="color:black;"class="fa fa-edit"></i>Edit</button></a>
                                                            <a href="<?= base_url('user/del/'.$isi['id_login']);?>" onclick="return confirm('Anda yakin user akan dihapus ?');">
                                                            <button class="btn btn-danger"><i style="color:black;"class="fa fa-trash"></i>Hapus</button></a>
                                                            <a href="<?= base_url('user/detail/'.$isi['id_login']);?>" target="_blank"><button class="btn btn-primary">
                                                                <i  class="fa fa-print"style="color:black;"></i style="color:black;" >Cetak Kartu</button></a>
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
