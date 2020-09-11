<!DOCTYPE html>
<html lang="en">
<title>Halaman Makna Logo - HIMASISTIFO</title>

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
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body"><br>
                            <h4 class="mt-0 header-title text-center"><u>Makna Logo HIMASISTIFO</u></h4>
                            <br>
                            <div class="rounded float-left">
                            <img src="<?php echo base_url('assetshz/images/si.png');?>" class="img-fluid"></img></div><br><br><br>
                            <?php
                            $query = $this->db->get('tentanghima'); 
                            foreach ($query->result_array() as $row =>$key){
                            ?>
                            <p class="text-left font-14"><?php echo $key['maknalogo']; ?></p>
                            <?php } ?>
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


</body>

</html> 