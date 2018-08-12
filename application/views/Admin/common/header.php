<div class="sidebar" data-color="purple" data-image="<?php echo base_url('assets/image/sidebar-1.jpg') ?>">
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text">
            Dashbord
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="active">
                <a href="<?php echo base_url();?>index.php/profile/index">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url();?>index.php/C_User/index">
                    <i class="material-icons">person</i>
                    <p>User</p>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url();?>index.php/C_Transaksi/index">
                    <i class="material-icons">content_paste</i>
                    <p>Transaksi</p>
                </a>
            </li>
             <li>
                <a href="<?php echo base_url();?>index.php/C_Transaksi/log">
                    <i class="material-icons">content_paste</i>
                    <p>Log Transaksi</p>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>index.php/home/logout">
                <i class="material-icons">library_books</i>
                    <p>Logout</p>
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="main-panel">
<nav class="navbar navbar-transparent navbar-absolute">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url();?>/C_User">  Dashboard </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="<?php echo base_url();?>/C_User" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="material-icons">dashboard</i>
                        <p class="hidden-lg hidden-md">Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="material-icons">person</i>
                        
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>index.php/home/logout" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="material-icons" title="Logout">power_settings_new</i>
                        <p class="hidden-lg hidden-md" title="logout">Profile</p>
                    </a>
                </li>
            </ul>
            <form class="navbar-form navbar-right" role="search">
                <div class="form-group  is-empty">
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="material-input"></span>
                </div>
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                    <i class="material-icons">search</i>
                    <div class="ripple-container"></div>
                </button>
            </form>
        </div>
    </div>
</nav>