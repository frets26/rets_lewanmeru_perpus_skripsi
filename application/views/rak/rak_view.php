<?php if(! defined('BASEPATH')) exit('No direct script acess allowed');?>
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      <i style="color:black;"class="fa fa-edit" style="color:black"> </i>  <?= $title_web;?>
    </h1>
  </section>
  <section class="content">
	<?php if(!empty($this->session->flashdata())){ echo $this->session->flashdata('pesan');}?>
	<div class="row">
	    <div class="col-md-12">
			<div class="row">
				<div class="col-sm-12">
					<div class="box">
						<div class="box-header with-border">
							<?php if(!empty($this->input->get('id'))){?>
							<h4 style="color:black;"> Edit Rak</h4>
							<?php }else{?>
							<h4 style="color:black;"> Tambah Rak</h4>
							<?php }?>
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<?php if(!empty($this->input->get('id'))){?>
							<form method="post" action="<?= base_url('data/rakproses');?>">
								<div class="form-group">
								<label for="">Nama Rak / Lokasi</label>
								<input type="text" name="rak"  value="<?=$rak->nama_rak;?>" id="rak" class="form-control" placeholder="Contoh : Rak Buku 1" >
								
								</div>
								<br/>
								<input type="hidden" name="edit" value="<?=$rak->id_rak;?>">
								<button type="submit" class="btn btn-primary"><i style="color:black;"class="fa fa-edit" style="color:black;">Edit Rak</i style="color:black;" style="color:black;"> </button >
							</form>
							<?php }else{?>

							<form method="post" action="<?= base_url('data/rakproses');?>">
								<div class="form-group">
								<label for="">Nama Rak / Lokasi</label>
								<input type="text" name="rak" id="rak" class="form-control" placeholder="Contoh : Rak Buku 1" >
								
								</div>
								<br/>
								<input type="hidden" name="tambah" value="tambah">
								<button type="submit" style="color:black;" class="btn btn-primary"> <i style="color:black;" class="fa fa-plus"></i style="color:black;"> Tambah Rak</button>
							</form>
							<?php }?>
						</div>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="box">
						<div class="box-header with-border">
						</div>
						<!-- /.box-header -->
						<div class="box-body">
						<div class="table-responsive">
							<table id="example1" class="table table-bordered table-striped table" width="100%">
								<thead>
									<tr>
										<th bgcolor="gray " style="color: white;">No</th>
										<th bgcolor="gray " style="color: white;">Rak Buku</th>
										<th bgcolor="gray " style="color: white;">Aksi</th>
									</tr>
								</thead>
								<tbody>
								<?php $no=1;foreach($rakbuku->result_array() as $isi){?>
									<tr>
										<td><?= $no;?></td>
										<td><?= $isi['nama_rak'];?></td>
										<td style="width:20%;">
											<a href="<?= base_url('data/rak?id='.$isi['id_rak']);?>"><button class="btn btn-success"><i style="color:black;" class="fa fa-edit"></i>Edit</button></a>
											<a href="<?= base_url('data/rakproses?rak_id='.$isi['id_rak']);?>" onclick="return confirm('Anda yakin Rak Buku ini akan dihapus ?');">
											<button class="btn btn-danger"><i class="fa fa-trash" style="color:black;"></i>Hapus</button></a>
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
    	</div>
    </div>
</section>
</div>
