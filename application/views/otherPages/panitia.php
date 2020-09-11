<!DOCTYPE html>
<html lang="en">
<title>Halaman Kelola Pendaftaran Panitia - HIMASISTIFO</title>

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
                                    <h4 class="page-title text-center">Panitia</h4>
                                </div>
                            </div> <!-- end row -->
                        </div>
                        <!-- end page-title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Tabel Data Pendaftaran Panitia</h4>
                                        <br>
                                        <?php 
                                            if($this->session->flashdata('msg')){
                                            echo $this->session->flashdata('msg');
                                            } 
                                        ?>
                                        <?php
                                            $query = $this->db->get('status')->row_array();
                                            if($query['hidupataumati'] == 0){
                                        ?>
                                        <form action="<?php echo site_url('UserPages/formbuka');?>" method="post">
                                            <input type="hidden" name="id" value="<?php echo $query['id'];?>"></input>
                                            <input type="hidden" name="hidupataumati" value="1"></input>
                                            <button type="submit" class="btn btn-outline-success">Buka Formulir Pendaftaran</button>
                                        </form>
                                        <?php } else{ ?>
                                        <form action="<?php echo site_url('UserPages/formtutup');?>" method="post">
                                            <input type="hidden" name="id" value="<?php echo $query['id'];?>"></input>
                                            <input type="hidden" name="hidupataumati" value="0"></input>
                                            <button class="btn btn-outline-danger">Tutup Formulir Pendaftaran</button>
                                        </form>
                                        <?php } ?>
                                        <br>
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Lengkap</th>
                                                <th>NIM</th>
                                                <th>Kelas</th>
                                                <th>Alamat Email</th>
                                                <th>Kontak</th>
                                                <th>Divisi yang Diinginkan</th>
                                                <th>Panitia Sedang Berlangsung</th>
                                                <th>CV</th>
                                                <th>Aksi</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $query = $this->db->query("SELECT * FROM panitia");
                                            foreach ($query->result_array() as $row =>$key){
                                            ?>
                                            <tr>
                                                <td><?php echo $row+1;?></td>
                                                <td><?php echo $key['name'];?></td>
                                                <td><?php echo $key['nim'];?></td>
                                                <td><?php echo $key['kelas'];?></td>
                                                <td><?php echo $key['email'];?></td>
                                                <td><?php echo $key['kontak'];?></td>
                                                <td><?php echo $key['divisi'];?></td>
                                                <td><?php echo $key['panitiasdg'];?></td>
                                                <td><?php echo $key['cv'];?></td>
                                                <td>
                                                <a href="<?php echo site_url('UserPages/delpanitia/'.$key['id'])?>" class="btn btn-danger btn-circle">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                                </td>
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