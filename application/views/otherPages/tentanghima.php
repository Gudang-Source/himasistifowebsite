<!DOCTYPE html>
<html lang="en">
<title>Halaman Kelola Tentang - HIMASISTIFO</title>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <link rel="shortcut icon" href="<?php echo base_url('assetshz/images/si.png')?>">

    <?php
    $this->load->view('etcdashboard/css');
    ?>

    <!-- DataTables -->
    <link href="<?php echo base_url('assetsvt/plugins/datatables/dataTables.bootstrap4.min.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assetsvt/plugins/datatables/buttons.bootstrap4.min.css')?>" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="<?php echo base_url('assetsvt/plugins/datatables/responsive.bootstrap4.min.css')?>" rel="stylesheet" type="text/css" />
        
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
                                    <h4 class="page-title text-center">Tentang HIMASISTIFO</h4>
                                </div>
                            </div> <!-- end row -->
                        </div>
                        <!-- end page-title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Tabel Kelola Tentang HIMASISTIFO</h4>
                                        <br>
                                        <?php 
                                            if($this->session->flashdata('msg')){
                                            echo $this->session->flashdata('msg');
                                            } 
                                        ?>
                                        <br>
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Visi</th>
                                                <th>Misi</th>
                                                <th>Makna Logo</th>
                                                <th>Aksi</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $query = $this->db->query("SELECT * FROM tentanghima");
                                            foreach ($query->result_array() as $row =>$key){
                                            ?>
                                            <tr>
                                                <td><?php echo $row+1;?></td>
                                                <td><?php echo $key['visi'];?></td>
                                                <td><?php echo $key['misi'];?></td>
                                                <td><?php echo $key['maknalogo'];?></td>
                                                <td>
                                                <a href="<?php echo site_url('TentangHima/formubah/'.$key['id'])?>" class="btn btn-warning btn-circle">Ubah</a>                                                </td>
                                            </tr>
                                            <?php }?>
                                            </tbody>
                                        </table>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
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
    
    <!-- Required datatable js -->
    <script src="<?php echo base_url('assetsvt/plugins/datatables/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('assetsvt/plugins/datatables/dataTables.bootstrap4.min.js')?>"></script>

    <!-- Buttons examples -->
    <script src="<?php echo base_url('assetsvt/plugins/datatables/dataTables.buttons.min.js')?>"></script>
    <script src="<?php echo base_url('assetsvt/plugins/datatables/buttons.bootstrap4.min.js')?>"></script>
    <script src="<?php echo base_url('assetsvt/plugins/datatables/jszip.min.js')?>"></script>
    <script src="<?php echo base_url('assetsvt/plugins/datatables/pdfmake.min.js')?>"></script>
    <script src="<?php echo base_url('assetsvt/plugins/datatables/vfs_fonts.js')?>"></script>
    <script src="<?php echo base_url('assetsvt/plugins/datatables/buttons.html5.min.js')?>"></script>
    <script src="<?php echo base_url('assetsvt/plugins/datatables/buttons.print.min.js')?>"></script>
    <script src="<?php echo base_url('assetsvt/plugins/datatables/buttons.colVis.min.js')?>"></script>

    <!-- Responsive examples -->
    <script src="<?php echo base_url('assetsvt/plugins/datatables/dataTables.responsive.min.js')?>"></script>
    <script src="<?php echo base_url('assetsvt/plugins/datatables/responsive.bootstrap4.min.js')?>"></script>

    <!-- Datatable init js -->
    <script src="<?php echo base_url('assetsvt/pages/datatables.init.js')?>"></script> 
</body>
</html>