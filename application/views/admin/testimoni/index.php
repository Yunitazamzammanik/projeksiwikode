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
          <h3>SIWIKODE</h3>
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
      <div class="row">
        <div class="col-md-12">
            <div class="widget p-lg">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="m-b-lg">Daftar Testimoni</h4>
                    </div>
                    <div class="col-md-6">
                        <a href="<?php echo base_url('admin/add_new_testimoni');?>" class="btn btn-primary btn-block" style="background-color:#0d6efd" < style="width:200px;float:right"><i class="fa fa-plus"></i>  Tambah</a>
                    </div>
                </div>
                <br>
                <table class="table table-hover">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Wisata</th>
                        <th>rating</th>
                        <th>komentar</th>
                        <th>Action</th>
                    </tr>
                        <?php
                        $count = 0;
                        foreach ($testimoni->result() as $row) :
                        $count++;?>
                        
                    <tr>
                        <td><?php echo $count ?></td>
                        <td><?php echo $row->nama ?></td>
                        <td><?php echo $row->wisata_id; ?></td>
                        <td><?php echo $row->rating ?></td>
                        <td><?php echo $row->komentar ?></td>
                        <td colspan="3">
                            <a href="<?php echo site_url('admin/get_edit_testimoni/'.$row->id); ?>" class="btn btn-warning btn-sm" style="background-color:#dc3545"><i class="fa fa-edit"></i> Edit</a>
                            <a href="<?php echo site_url('admin/detail_testimoni/'.$row->id); ?>" class="btn btn-primary btn-sm"  style="background-color:#20c997"><i class="fa fa-info-circle"></i> Detail</a>
                            <a href="<?php echo site_url('admin/delete_testimoni/'.$row->id); ?>" class="btn btn-danger btn-sm" style="background-color:#d63384"><i class="fa fa-trash"></i> Delete</a>
                        </td>

                    </tr>
                    <?php endforeach?>
                </table>
            </div><!-- .widget -->
        </div><!-- END column -->
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
