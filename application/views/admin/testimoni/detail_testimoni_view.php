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
            <button class="btn btn-info dropdown-toggle" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">mohamed</button>
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
        				<h3>Detail Testimoni <?php echo $nama ?></h3>
        			</div>
        			<div class="col-lg-12">
        				<form action="<?php echo base_url('admin/save_wisata'); ?>" class="form-horizontal" method="POST">
                            <div class="form-group">
        						<label for="nama" class="col-sm-3">Nama</label>
        						<div class="col-sm-12">
        							<input type="text" id="nama" class="form-control" name="nama" value="<?php echo $nama ?>" disabled>
        						</div>
        					</div><!-- .form-group -->
                            <div class="form-group">
        						<label for="email" class="col-sm-3">Email</label>
        						<div class="col-sm-12">
        							<input type="email" id="email" class="form-control" name="email" disabled value="<?php echo $email ?>">
        						</div>
        					</div><!-- .form-group -->
                            <div class="form-group">
        						<label for="wisata_id" class="col-sm-3">Wisata</label>
        						<div id="wisata_id" class="col-sm-12">
                                <input type="text" id="nama" class="form-control" name="nama" value="<?php echo $wisata_id ?>" disabled>
        						</div>
        					</div><!-- .form-group -->
							<div class="form-group">
        						<label for="profesi_id" class="col-sm-3">Profesi</label>
        						<div id="profesi_id" class="col-sm-12">
                                <input type="text" id="nama" class="form-control" name="nama" value="<?php echo $profesi_id ?>" disabled>
        						</div>
        					</div><!-- .form-group -->
                            <div class="form-group">
        						<label for="rating" class="col-sm-3">Rating</label>
        						<div class="col-sm-12">
        							<input  type="number" id="rating" class="form-control" name="bintang" value="<?php echo $rating ?>" disabled>
        						</div>
        					</div><!-- .form-group -->
                            <div class="form-group">
        						<label for="komentar" class="col-sm-3">Komentar</label>
        						<div class="col-sm-12">
        							<textarea name="komentar" id="komentar" class="form-control" cols="30" rows="5" disabled> <?php echo $komentar?> </textarea>
        						</div>
        					</div><!-- .form-group -->
                            <br>
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
