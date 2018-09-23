<?php $user = $this->session->userdata('user');
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Sistem Informasi</title>
    <link href="<?php echo base_url();?>assets/template/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/template/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/template/css/datepicker3.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/template/css/styles.css" rel="stylesheet">

      <!-- DataTables CSS -->
    <link href="<?php echo base_url();?>assets/template/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url();?>assets/template/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    
    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/Gallery-master/css/blueimp-gallery.min.css">
    <script src="<?php echo base_url();?>assets/Gallery-master/js/blueimp-gallery.min.js"></script>

    <!-- dropzone -->
    <script src="<?php echo base_url();?>/assets/dropzone/js/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/dropzone/js/dropzone.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/dropzone/js/basic.min.css">
    <script type="text/javascript" src="<?php echo base_url();?>/assets/dropzone/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/dropzone/js/dropzone.min.js"></script>
    <script src="<?php echo base_url();?>/assets/dropzone/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>/assets/dropzone/js/scripts.js"></script>

</head>
<body>
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span></button>
                <!-- <img style="margin-top: 2px;" width="13%" height="10%" src="<?php echo base_url();?>assets/template/images/Hypermart.jpg" alt="" /> -->
                
                <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                         <li><a onclick="edit_user('<?php echo $user['id_user']; ?>')"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url();?>/Controller_Masuk/keluar"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                    
                <!-- /.dropdown -->
            </ul>
                
                
            </div>
        </div><!-- /.container-fluid -->
    </nav>
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <div class="profile-sidebar">
            <!-- <div class="profile-userpic">
                <img src="<?php echo base_url();?>/assets/template/images/Hypermart.png" class="img-responsive" alt="">
            </div> -->
            <div class="profile-usertitle">
                <div class="profile-usertitle-name"><b><?php echo $user['nama_user']; ?></b></div>
                <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
         <ul class="nav menu">
            <li><a href="<?php echo base_url();?>de69812784f3efj044e61be7t84cfe52"><em class="fa fa-home">&nbsp;</em> Beranda</a></li>
            <?php if($user['hak_akses']=='ADMIN'){ ; ?>
            <li><a href="<?php echo base_url();?>de69812784f3efj044e61q1xzyda0952"><em class="fa fa-users">&nbsp;</em> User</a></li>

            <li><a href="<?php echo base_url();?>de69812784f2c02044e61be7t84cfe52"><em class="fa fa-database">&nbsp;</em> Data Bidan</a></li>

            <!-- <li><a href="<?php echo base_url();?>de69812784f3efj044aloqwwwwww9952"><em class="fa fa-database">&nbsp;</em> Data Tempat</a></li> -->
            <?php } ?>
            <!-- <li><a href="<?php echo base_url();?>b6cdac2ab744696e170350fe2e6f979f"><em class="fa fa-book">&nbsp;</em> </a></li>
            <li><a href="<?php echo base_url();?>ed3ceb87d825abdf4a52508302ef5037"><em class="fa fa-calendar-o">&nbsp;</em> </a></li>
            <li><a href="<?php echo base_url();?>de69812784f3efj044e61qwwzyda0952"><em class="fa fa-money">&nbsp;</em> </a></li> -->
            
           <!--  <li><a href="<?php echo base_url();?>de69812784f2c02044e61be7t84cfe52"><em class="fa fa-database">&nbsp;</em> Data Barang</a></li>
            <li><a href="<?php echo base_url();?>de69812784f3efj04aljbxkhi97bb952"><em class="fa fa-list">&nbsp;</em> Kategori</a></li> -->
        </ul>
    </div><!--/.sidebar-->

    </body>