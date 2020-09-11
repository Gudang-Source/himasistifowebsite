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
                            <h4 class="mt-0 header-title text-center">Berita HIMASISTIFO</h4>
                            <br>
                                <?php
                                $this->db->order_by('waktu', 'DESC');
                                $query = $this->db->get('blog');
                                foreach($query->result_array() as $row => $key){
                                ?>
                                    <div class="card-deck">
                                        <div class="card mb-4">
                                            <img class="img-fluid" src="<?php echo base_url('upload/blog/'); echo $key['gambar'];?>">
                                            <div class="card-body">
                                                <h4 class="card-title"><?php echo $key['judul_postingan'];?></h4>
                                                <p class="card-text">
                                                <?php 
                                                    echo word_limiter($key['isi_postingan'], 10);
                                                ?>
                                                </p>
                                                <a class="btn btn-primary" href="<?php echo site_url('Blog/gotoblog/'.$key['id'])?>">
                                                Baca lebih lanjut
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col --> 
            </div>
            <!-- end container-fluid -->
    </div>
</div>

<?php
$this->load->view('etc/footer');
?>

<?php
$this->load->view('etc/js');
?>

</body>

</html>