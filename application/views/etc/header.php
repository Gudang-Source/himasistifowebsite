    
    <div class="header-bg">
        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">
                    <?php
                    $this->load->view('etc/logo');
                    ?>
                    <div class="menu-extras topbar-custom navbar p-0">
                        <ul class="navbar-right ml-auto list-inline float-right mb-0">
                            <!-- full screen -->
                            <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                                <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                                Layar Penuh <i class="mdi mdi-arrow-expand-all noti-icon"></i> 
                                </a>
                            </li>

                            <li class="menu-item dropdown notification-list list-inline-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end container -->
            </div>
            <!-- end topbar-main -->
            <?php
            $this->load->view('etc/menu');
            ?>
        </header>
        <!-- End Navigation Bar-->
    </div>
    <!-- header-bg -->