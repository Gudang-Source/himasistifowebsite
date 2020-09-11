    
<!-- Top Bar Start -->
<div class="topbar">
    <!-- LOGO -->
    <?php
    $this->load->view('etcdashboard/logo');
    ?>
    <nav class="navbar-custom">
        <ul class="navbar-right list-inline float-right mb-0">
            <!-- full screen -->
            <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                <a class="nav-link waves-effect" href="#" id="btn-fullscreen">Layar Penuh
                    <i class="mdi mdi-arrow-expand-all noti-icon"></i>
                </a>
            </li>
        </ul>
        <ul class="list-inline menu-left mb-0">
            <li class="float-left">
                <button class="button-menu-mobile open-left waves-effect">
                    <i class="mdi mdi-menu"></i>
                </button>
            </li>
        </ul>
    </nav>
</div>
<!-- Top Bar End -->
<?php
$this->load->view('etcdashboard/menu');
?>