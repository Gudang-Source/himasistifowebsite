<!DOCTYPE html>
<html lang="en">
<title>Halaman Dashboard - HIMASISTIFO</title>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <link rel="shortcut icon" href="<?php echo base_url('assetshz/images/si.png')?>">

    <?php
    $this->load->view('etcdashboard/css');
    ?>
        
</head>

<body>
<div class="wrapper">
        <?php
        $this->load->view('etcdashboard/header');
        ?>
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="page-title-box">
                        <div class="row align-items-center">
                            <div class="col-sm-12">
                            <h4 class="mt-0 header-title text-center">KABINET PEMBARUAN</h4>
                                <img class="d-block img-fluid mx-auto" src="<?php echo base_url('assetshz/images/si.png');?>">
                            <h4 class="display-5 mb-0 text-center"><i>Jaya Himaku, Bersama Bisa.</i></h4>
                            </div>
                            <div class="col-sm-12">
                                KONTEN SELANJUTNYA
                            </div>
                        </div> <!-- end row -->
                    </div>
                    <!-- end page-title -->
                </div>
                <!-- container-fluid -->
            </div>
            <!-- content -->
        <?php
        $this->load->view('etc/footer');
        ?>
        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->

    <?php
    $this->load->view('etcdashboard/js');
    ?>

    
</body>
</html>