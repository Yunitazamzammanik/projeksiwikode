<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('admin/_includes/head'); ?>
<body>
<!-- start admin -->
<section id="admin">
  <?php $this->load->view('admin/_includes/sidebar'); ?>
  <!-- start content -->
  <div class="content">
    <!-- start content head -->
    <div class="head">
      <!--  head top -->
      <div class="top">
        <div class="left">
          <button id="on" class="btn btn-info"><i class="fa fa-bars"></i></button>
          <button id="off" class="btn btn-info hide"><i class="fa fa-align-left"></i></button>
        </div>
        <div class="right">
          <div class="dropdown">
            <h3> SIWIKODE </h3>
            <div class="dropdown-menu" aria-labelledby="userDropdown">
             <a class="dropdown-item" href="#">profile</a>
             <a class="dropdown-item" href="#">sitting</a>
             <a class="dropdown-item" href="#">log out</a>
           </div>
          </div>
        </div>
      </div>
      <!-- end head top -->
      <!-- start head bottom -->
      <div class="bottom">
        <div class="left">
          <h1>Wisata</h1>
        </div>
        <div class="right">
          <h1>dashboard /</h1>
          <a href="#">Wisata</a>
        </div>
      </div>
      <!-- end head bottom -->
    </div>
    <!-- end content head -->
    <!-- start with the real content -->
    <div id="real">
    <div id="forms">
        <div class="wrap card">
        	<section class="app-content">
        		<div class="row">
        			<div class="col-md-12">
        				<h3>Edit <?php echo $nama ?></h3>
        			</div>
        			<div class="col-lg-12">
        				<form action="<?php echo base_url('admin/update_wisata'); ?>" class="form-horizontal" method="POST">
                            <input type="hidden" name="id" value="<?php echo $id ?>">
                            <div class="form-group">
        						<label for="nama" class="col-sm-3">Nama</label>
        						<div class="col-sm-12">
        							<input type="text" id="nama" class="form-control" name="nama" value="<?php echo $nama ?>" required>
        						</div>
        					</div><!-- .form-group -->
                            <div class="form-group">
        						<label for="deskripsi" class="col-sm-3">Deskripsi</label>
        						<div class="col-sm-12">
        							<textarea name="deskripsi" id="deskripsi" class="form-control" cols="30" rows="5" placeholder="Masukan Deskripsi Wisata"><?php echo $deskripsi ?></textarea>
        						</div>
        					</div><!-- .form-group -->
                            <div class="form-group">
        						<label for="jenis_wisata_id" class="col-sm-3">Jenis Wisata</label>
        						<div id="jenis_wisata_id" class="col-sm-12">
        							<select class="form-control" name="jenis_wisata_id" required>
										<option hidden>Pilih Jenis Wisata</option>
									<?php
									$count = 0;
									foreach ($jenis_wisata->result() as $row) :
									$count++;?>
										<option value="<?php echo $row->id; ?>" <?php if ($row->id == $id) echo "selected"; ?> ><?php echo $row->nama; ?></option>
									<?php endforeach?>
        							</select>
        						</div>
        					</div><!-- .form-group -->
                            <div class="form-group">
        						<label for="fasilitas" class="col-sm-3">Fasilitas</label>
        						<div class="col-sm-12">
        							<textarea name="fasilitas" id="fasilitas" class="form-control" cols="30" rows="5" placeholder="Masukan Fasilitas Wisata"><?php echo $fasilitas ?></textarea>
        						</div>
        					</div><!-- .form-group -->
                            <div class="form-group">
        						<label for="rating" class="col-sm-3">Rating</label>
        						<div class="col-sm-12">
        							<input  type="number" id="rating" class="form-control" placeholder="Masukan Jumlah Rating" name="bintang" value="<?php echo $bintang ?>">
        						</div>
        					</div><!-- .form-group -->
                            <div class="form-group">
        						<label for="kontak" class="col-sm-3">Kontak</label>
        						<div class="col-sm-12">
        							<input type="text" id="kontak" class="form-control" placeholder="089xxxxxxxxx" name="kontak" value="<?php echo $kontak ?>"  required>
        						</div>
        					</div><!-- .form-group -->
                            <div class="form-group">
        						<label for="alamat" class="col-sm-3">Alamat</label>
        						<div class="col-sm-12">
        							<textarea name="alamat" id="alamat" class="form-control" cols="30" rows="5" placeholder="Masukan Alamat Wisata"><?php echo $alamat ?></textarea>
        						</div>
        					</div><!-- .form-group -->
                            <div class="form-group">
        						<label for="latlong" class="col-sm-3">Latitude & Longitude</label>
        						<div class="col-sm-12">
        							<input type="text" id="latlong" class="form-control" placeholder="Masukan Koordinat Wisata" name="latlong" value="<?php echo $latlong ?>">
        						</div>
        					</div><!-- .form-group -->
        					<div class="form-group">
        						<label for="email" class="col-sm-3">Email</label>
        						<div class="col-sm-12">
        							<input  type="email" id="email" class="form-control" placeholder="siwikode@siwikode.com" name="email" value="<?php echo $email ?>" required>
        						</div>
        					</div><!-- .form-group -->
        					<div class="form-group">
        						<label for="web" class="col-sm-3">Situs WEB</label>
        						<div class="col-sm-12">
        							<input  type="text" id="web" class="form-control" name="web" placeholder="www.siwikode.com" value="<?php echo $web ?>">
        						</div>
        					</div><!-- .form-group -->
        					<div class="form-group">
        						<label for="jenis_kuliner_id" class="col-sm-3">Jenis Kuliner</label>
        						<div id="jenis_kuliner_id" class="col-sm-12">
        							<select class="form-control" name="jenis_kuliner_id">
										<option value="" hidden>Optional</option>
									<?php
									$count = 0;
									foreach ($jenis_kuliner->result() as $row) :
									$count++;?>
										<option value="<?php echo $row->id; ?>" <?php if ($row->id == $id) echo "selected"; ?>><?php echo $row->nama; ?></option>
									<?php endforeach?>
        							</select>
        						</div>
        					</div><!-- .form-group -->
                            <br>
                            <button type="submit" class="col-md-3 btn btn-primary btn-block" style="float:right">Edit</button>
        				</form>
        			</div>
        		</div><!-- END row -->
        	</section><!-- #dash-content -->
        </div><!-- .wrap -->
      </div>
    </div>
    <!-- end the real content -->
  </div>
  <!-- end content -->
</section>
<!-- end admin -->
<?php $this->load->view('admin/_includes/footer');?>
</body>
</html>
