<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php $this->load->view('template/header'); ?>
<body>
<div class="container-fluid">

<a href="<?= base_url()?>index.php/jenis_kuliner/add" class="btn btn-primary">add</a>


<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Data jenis_kuliner</h1>

<table class="table table-dark">
<thead>
                            <tr>
                                <th>ID</th>
                                <th>nama</th>
                                
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php
                                foreach($jenis_wisata->result() as $jenis_wisata){
                                    echo '
                                    <tr>
                                        <td>'.$jenis_wisata->id.'</td>
                                        <td>'.$jenis_wisata->nama_wisata.'</td>
                                      
                                        
                                        
                                        <td>
                                        <a href="'.base_url().'index.php/jenis/view/'.$jenis_wisata->id.'">View</a>
                                        <a href="'.base_url().'index.php/jenis/edit/'.$jenis_wisata->id.'">Edit</a>
                                        <a  onclick="return confirm(‘Yakin Hapus?’)" href="'.base_url().'index.php/jenis/delete/'.$jenis_wisata->id.'">Delete</a>
                                        </td>
                                        
                                    </tr>';
                                }
                            ?>
                        </tbody>
</table>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
<div class="container my-auto">
<div class="copyright text-center my-auto">
    <span>Copyright &copy; SIWIKODE 2021</span>
</div>
</div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->


</div>
</div>
</div>
</div>


</body>
</html>