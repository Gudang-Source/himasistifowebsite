<!DOCTYPE html>
<html lang="en">
<title>Halaman Visi & Misi - HIMASISTIFO</title>

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
                            <h4 class="mt-0 header-title"><u>Visi HIMASISTIFO</u></h4>
                            <br>
                            <?php
                            $query = $this->db->get('tentanghima'); 
                            foreach ($query->result_array() as $row =>$key){
                            ?>
                            <p class="text-center font-14"><?php echo $key['visi'];?></p>
    
                            </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->  

            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body"><br>
                        <h4 class="mt-0 header-title"><u>Misi HIMASISTIFO</u></h4>
                            <br>
                            <p class="text-center font-14"><?php echo $key['misi'];?></p>
                        </div>
                        <?php } ?>
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