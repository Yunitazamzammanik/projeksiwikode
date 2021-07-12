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
          <h1>Testimoni</h1>
        </div>
        <div class="right">
          <h1>dashboard /</h1>
          <a href="#">Testimoni</a>
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
        				<h3>Form Edit Testimoni</h3>
        			</div>
        			<div class="col-lg-12">
        				<form action="<?php echo base_url('admin/update_testimoni'); ?>" class="form-horizontal" method="POST">
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                            <div class="form-group">
        						<label for="nama" class="col-sm-3">Nama</label>
        						<div class="col-sm-12">
        							<input type="text" id="nama" class="form-control" placeholder="Masukan Nama" name="nama" value="<?php echo $nama ?>" required>
        						</div>
        					</div><!-- .form-group -->
                            <div class="form-group">
        						<label for="email" class="col-sm-3">Email</label>
        						<div class="col-sm-12">
        							<input  type="email" id="email" class="form-control" placeholder="siwikode@siwikode.com" name="email" value="<?php echo $email ?>"required>
        						</div>
        					</div><!-- .form-group -->
                            <div class="form-group">
        						<label for="wisata_id" class="col-sm-3">Wisata</label>
        						<div id="wisata_id" class="col-sm-12">
        							<select class="form-control" name="wisata_id" required>
										<option hidden>Pilih Wisata</option>
									<?php
									$count = 0;
									foreach ($wisata->result() as $row) :
									$count++;?>
										<option value="<?php echo $row->id; ?>" <?php if ($row->id == $wisata_id) echo "selected"; ?>><?php echo $row->nama; ?></option>
									<?php endforeach?>
        							</select>
        						</div>
        					</div><!-- .form-group -->
                            <div class="form-group">
        						<label for="profesi" class="col-sm-3">Profesi</label>
        						<div id="profesi" class="col-sm-12">
        							<select class="form-control" name="profesi_id" required>
										<option hidden>Pilih Profesi</option>
									<?php
									$count = 0;
									foreach ($profesi->result() as $row) :
									$count++;?>
										<option value="<?php echo $row->id; ?>" <?php if ($row->id == $id) echo "selected"; ?>><?php echo $row->nama; ?></option>
									<?php endforeach?>
        							</select>
        						</div>
        					</div><!-- .form-group -->
                            <div class="form-group">
        						<label for="rating" class="col-sm-3">Rating</label>
        						<div class="col-sm-12">
        							<input  type="number" id="rating" class="form-control" placeholder="Masukan Jumlah Rating" name="rating" value="<?php echo $rating ?>">
        						</div>
        					</div><!-- .form-group -->
                            <div class="form-group">
        						<label for="komentar" class="col-sm-3">Komentar</label>
        						<div class="col-sm-12">
        							<textarea name="komentar" id="komentar" class="form-control" cols="30" rows="5" placeholder="Masukan Deskripsi Wisata"><?php echo $komentar ?></textarea>
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
