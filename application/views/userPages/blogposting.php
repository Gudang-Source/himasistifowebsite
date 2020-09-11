<!DOCTYPE html>
<html lang="en">
<title>Halaman Berita - HIMASISTIFO</title>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php
    $this->load->view('etc/css');
    ?>
</head>

<body>
    <?php
    $this->load->view('etc/header');
    ?>

<div class="wrapper">
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <input type="hidden" name="id" class="form-control form-control-user" 
                        value="<?php if(isset($blog->id)){echo $blog->id;}?>">
                        <h3 class="mt-0 header-title"><?php echo $blog->judul_postingan;?></h4><br>
                            <img src="<?php echo base_url('upload/blog/'); echo $blog->gambar;?>" class="d-block img-fluid mx-auto">
                            <p><?php echo $blog->isi_postingan;?></p>
                    </div>
                </div>
            </div>
        </div> <!-- end col --> 
    </div>
    <!-- end container-fluid -->
</div>

<?php
$this->load->view('etc/footer');
?>

<?php
$this->load->view('etc/js');
?>

</body>

</html>