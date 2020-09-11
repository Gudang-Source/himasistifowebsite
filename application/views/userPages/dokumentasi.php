<!DOCTYPE html>
<html lang="en">
<title>Halaman Dokumentasi - HIMASISTIFO</title>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php
    $this->load->view('etc/css');
    ?>
</head>

<!-- Magnific popup -->
<link href="<?php echo base_url('assetshz/plugins/magnific-popup/magnific-popup.css');?>" rel="stylesheet" type="text/css">

<body>
    <?php
    $this->load->view('etc/header');
    ?>

    <div class="wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">

                            <h4 class="mt-0 header-title text-center">Dokumentasi HIMASISTIFO</h4>
                            <br>
                            <?php 
                            $querys = $this->db->get('judul');
                            foreach ($querys->result_array() as $row =>$key){ ?>
                            <h5 class="mt-0 text-center">
                                <?php echo $key['nama_kegiatan']; ?>
                            </h5>
                            
                            <?php
                            $query = $this->db->get('foto'); 
                            foreach ($query->result_array() as $row =>$foto){?>
                            <div class="popup-gallery">
                                <a class="float-left" href="<?php echo base_url('upload/dokumentasi/'); echo $foto['nama_foto'];?>" width="240">
                                    <div class="img-fluid d-block mx-auto">
                                        <img src="<?php echo base_url('upload/dokumentasi/'); echo $foto['nama_foto'];?>" width="240">
                                    </div>
                                    <br>
                                </a>
                            </div>
                            <?php } ?>
                            <?php } ?>
                            <br>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->   

        </div>
        <!-- end container-fluid -->
    </div>
    <!-- end wrapper -->

<?php
$this->load->view('etc/footer');
?>

<?php
$this->load->view('etc/js');
?>
<!-- Magnific popup -->
<script src="<?php echo base_url('assetshz/plugins/magnific-popup/jquery.magnific-popup.min.js');?>"></script>
<script src="<?php echo base_url('assetshz/assets/pages/lightbox.js');?>"></script>

</body>

</html> 