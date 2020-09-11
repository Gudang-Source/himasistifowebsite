<!DOCTYPE html>
<html lang="en">
<title>Halaman Login - HIMASISTIFO</title>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php
    $this->load->view('etc/css');
    ?>
</head>

    <body>

        <!-- Begin page -->
        <div class="accountbg"></div>
            <div class="home-btn d-none d-sm-block">
                <a href="<?php echo site_url('welcome')?>" class="text-white"><i class="fas fa-home h2"></i></a>
            </div>
        <div class="wrapper-page">
            <div class="card card-pages shadow-none">    
                <div class="card-body">
                    <div class="text-center m-t-0 m-b-15">
                            <a href="#" class="logo logo-admin"><img src="<?php echo base_url('assetshz/images/si.png')?>" alt="" height="160"></a>
                    </div>
                    <h5 class="font-18 text-center">Selamat Datang di Halaman Login</h5>

                    <!--form-->
                    <form class="form-horizontal m-t-30" action="<?php echo site_url('UserPages/auth')?>" method="post">

                        <div class="form-group">
                            <div class="col-12 validate-input" data-validate="Username is required">
                                    <label>Username</label>
                                <input class="form-control" type="text" name="username"  placeholder="Username" autofocus>
                                <?php echo form_error('username'); ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-12 validate-input" data-validate="Password is required">
                                    <label>Kata Sandi</label>
                                <input class="form-control" type="password" name="password" placeholder="Kata Sandi">
                                <?php echo form_error('password'); ?>
                            </div>
                        </div>
                        <div class="form-group text-center m-t-40">
                            <div class="col-12">
                                <button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit">Masuk</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- END wrapper -->

        <?php
        $this->load->view('etc/js');
        ?>
        
    </body>

</html>