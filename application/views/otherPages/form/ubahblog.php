<!DOCTYPE html>
<html lang="en">
<title>Halaman Ubah Blog - HIMASISTIFO</title>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <link rel="shortcut icon" href="<?php echo base_url('assetshz/images/si.png')?>">

    <?php
    $this->load->view('etcdashboard/css');
    ?>

    <!-- Summernote css -->
    <link href="<?php echo base_url('assetsvt/plugins/summernote/summernote-bs4.css')?>" rel="stylesheet" />    
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
                                    <h4 class="page-title text-center">Formulir Ubah Blog</h4>
                                </div>
                            </div> <!-- end row -->
                        </div>
                        <!-- end page-title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                        <div class="m-b-30">
                                        <?php echo form_open_multipart('Blog/ubahblog');?>
                                        <input type="hidden" name="id" class="form-control form-control-user" 
                                        value="<?php if(isset($blog->id)){echo $blog->id;}?>">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Judul Postingan</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="judul_postingan" value="<?php echo $blog->judul_postingan;?>"/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Gambar Postingan</label>
                                            <div class="col-sm-10">
                                            <?php 
                                            $query = $this->db->get('blog');
                                            foreach ($query->result_array() as $row =>$key){?>
                                                <img src="<?php echo base_url('upload/blog/'); echo $key['gambar'];?>" width="400px" height="250px">
                                            <?php } ?>
                                                <input class="form-control" type="file" name="gambar" value="<?php echo $blog->gambar;?>"/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Isi Postingan</label>
                                            <div class="col-sm-10">
                                                <textarea class="summernote" type="text" name="isi_postingan" value="<?php echo $blog->isi_postingan;?>"></textarea>
                                            </div>
                                        </div>
                                        <div class="text-center m-t-15">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Kirim</button>
                                            <a href="<?php echo site_url('Blog/index')?>" class="btn btn-warning waves-effect waves-light">Kembali</a>
                                        </div>
                                        <?php echo form_close(); ?>
                                        </div>
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
    <!--Summernote js-->
    <script src="<?php echo base_url('assetsvt/plugins/summernote/summernote-bs4.min.js')?>"></script>
    <script>
        jQuery(document).ready(function(){
            $('.summernote').summernote({
                height: 300,                 // set editor height
                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor
                focus: true                 // set focus to editable area after initializing summernote
            });
        });
    </script>
</body>
</html>