<!DOCTYPE html>
<html lang="en">
<title>Halaman Pendaftaran Panitia - HIMASISTIFO</title>

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
                        <div class="card-body">
                            <h4 class="mt-0 header-title text-center">Formulir Pendaftaran Panitia</h4>
                            <br>
                            <?php
                                $query = $this->db->get('status')->row_array();
                                if($query['hidupataumati'] == 0){
                            ?>
                            <h4 class="text-center">SEDANG TUTUP</h4>
                            <?php } else{ ?>
                            <?php echo form_open_multipart('UserPages/registpanitia');?>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="name" placeholder="John Doe" autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nomor Induk Mahasiswa</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="nim" placeholder="1757301000">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Kelas</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="kelas" placeholder="1 SI A">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Alamat Email</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="email" name="email" placeholder="john@doe.com">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Kontak</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="kontak" placeholder="ID Line atau Nomor WhatsApp">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Divisi Yang Diinginkan</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="divisi" placeholder="Nama Divisi">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Panitia Sedang Berlangsung</label>
                                <div>
                                    <textarea class="form-control" name="panitiasdg" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Curiculum Vitae (CV)</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" name="cv" required/>
                                </div>
                            </div>
                            <div class="text-center m-t-15">
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Kirim</button>
                            </div>
                            <!-- </form> -->
                            <?php echo form_close(); ?>
                            <?php } ?>
                            </div> <!-- end row --> 
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->   
        </div>
        <!-- end container-fluid -->

<?php
$this->load->view('etc/footer');
?>

<?php
$this->load->view('etc/js');
?>

</body>

</html>