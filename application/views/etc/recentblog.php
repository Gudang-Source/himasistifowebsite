<div class="container-fluid">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card m-b-30">
                <div class="card-body text-center">
                    <h4 class="mt-0 header-title text-center">Berita Terbaru</h4>
                    <br>
                    <?php
                    $this->db->order_by('waktu', 'DESC');
                    $query = $this->db->get('blog',1);
                    foreach ($query->result_array() as $row =>$key){
                    ?>
                        <img class="d-block img-fluid mx-auto" src="<?php echo base_url('upload/blog/'); echo $key['gambar'];?>" width="400px" height="250px">
                        <div class="card-body">
                            <h4 class="card-title font-16 mt-0"><a href="<?php echo site_url('Blog/gotoblog/'.$key['id'])?>"><?php echo $key['judul_postingan'];?></a></h4>
                            <p class="card-text">
                            <?php 
                            $this->load->helper('text');
                            echo word_limiter($key['isi_postingan'], 10);?>
                            </p>
                            <a class="btn btn-primary" href="<?php echo site_url('Blog/gotoblog/'.$key['id'])?>">
                            Baca lebih lanjut
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div> <!-- end col --> 
    </div>
</div>