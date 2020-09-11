<BR>
<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">
        <!--- Sidemenu -->
        <img class="d-flex rounded-circle mx-auto" src="<?php echo base_url('assetsvt/images/users/user-6.jpg')?>" height="96">
        <br>
        <h4 class="text-center"><span class="badge badge-primary">
        <?php
        $query = $this->db->get('user');
        foreach ($query->result_array() as $row =>$key){
            echo $key['nama'];}
        ?></h4>
        <!-- <a href="#" class="mt-0 text-center">Edit Profile</a> -->

        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">Menu</li>
                <li>
                    <a href="<?php echo site_url('Dashboard')?>" class="waves-effect">
                        <i class="icon-accelerator"></i> <span> Dashboard </span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('Dashboard/userlist')?>" class="waves-effect">
                        <i class="fa fa-user"></i> <span> Pengguna </span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('Dashboard/blog')?>" class="waves-effect">
                        <i class="fa fa-calendar"></i> <span> Blog </span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('Dashboard/panitia')?>" class="waves-effect">
                        <i class="mdi mdi-file-document"></i> <span> Panitia </span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('Dokumentasi/index')?>" class="waves-effect">
                        <i class="mdi mdi-camera"></i> <span> Dokumentasi </span>
                    </a>
                </li>
                <li>
                <a href="<?php echo site_url('Dashboard/tentanghima')?>" class="waves-effect">
                        <i class="icon-mail-open"></i> <span> Tentang HIMASISTIFO </span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="icon-share"></i><span> Struktur HIMASISTIFO <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li><a href="<?php echo site_url('Dashboard/strukturkepengurusan')?>"> Struktur Kepengurusan</a></li>
                        <li><a href="<?php echo site_url('Dashboard/profilekabinet')?>"> Profile Kabinet</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo site_url('Dashboard/logout')?>" class="waves-effect" id="sa-logout">
                        <i class="mdi mdi-logout" ></i> <span> Keluar </span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->
</div>
<!-- Left Sidebar End -->
        