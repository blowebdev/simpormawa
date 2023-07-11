<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themedesigner.in/demo/myadmin/myadmin/blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 May 2016 05:20:24 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>assets/images/unipdu.png">
    <title>SIMORMAWA</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="<?php echo base_url() ?>assets/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet"
        type="text/css" />
    <script src="<?php echo base_url() ?>assets/chart/canvasjs.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url() ?>assets/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="<?php echo base_url() ?>assets/https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>
    <!-- Preloader -->
    <!-- <div class="preloader">
    <div class="cssload-speeding-wheel"></div>
  </div> -->
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" style="margin-bottom: 0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg "
                    href="<?php echo base_url() ?>assets/javascript:void(0)" data-toggle="collapse"
                    data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <div class="top-left-part"><a class="logo" href="<?php echo base_url() ?>assets/index.html"><i
                            class="glyphicon glyphicon-users"></i>&nbsp;<span class="hidden-xs">SIMORMAWA</span></a>
                </div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i
                                class="icon-arrow-left-circle ti-menu"></i></a></li>


                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">

                    <li class="dropdown"> <a class="dropdown-toggle profile-pic" data-toggle="dropdown"
                            href="<?php echo base_url() ?>assets/#"> <img
                                src="<?php echo base_url(); ?>upload/<?php echo $this->session->userdata('username')['logo']; ?>" alt="user-img" width="36"
                                class="img-circle"><b class="hidden-xs"><?php //echo ; ?></b> </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a
                                    href="#"><?php echo level_user($this->session->userdata('username')['level'])."<b><br>".$this->session->userdata('username')['nama']; ?></b></a>
                            </li>
                            <li><a href="<?php echo base_url() ?>logout"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <div class="navbar-default sidebar nicescroll" role="navigation">
            <div class="sidebar-nav navbar-collapse ">
                <ul class="nav" id="side-menu">


                    <!--  <li class="nav-small-cap">
           <p>Selamat datang <b><?php echo $this->session->userdata('username')['username']; ?></b> <br>
            Status : Aktif
           </p>
         </li> -->
                    <li class="nav-small-cap">Menu Aplikasi</li>
                    <li> <a href="<?php echo base_url() ?>dashboard" class="waves-effect"><i class="ti-home fa-fw"></i>
                            Dashboard</a> </li>
                    <li> <a href="<?php echo base_url() ?>proposal" class="waves-effect"><i
                                class=" ti-clipboard fa-fw"></i> Data Proposal
                            <?php if($this->session->userdata('username')['level']==1) :  
            $total_proposal = $this->db->query("SELECT * FROM `tb_proposal` WHERE status=1")->num_rows();
          ?>
                            <span class="badge bg-danger"><?php echo $total_proposal ?></span>
                            <?php elseif($this->session->userdata('username')['level']==1) : 
            $total_proposal = $this->db->query("SELECT * FROM `tb_proposal` WHERE status=2")->num_rows();
          ?>
                            <span class="badge bg-danger"><?php echo $total_proposal ?></span>
                            <?php endif; ?>
                        </a> </li>
                    <li> <a href="<?php echo base_url() ?>users" class="waves-effect"><i class="ti-user fa-fw"></i> Data
                            Users</a> </li>
                    <li> <a href="<?php echo base_url() ?>dana" class="waves-effect"><i
                                class="  ti-credit-card fa-fw"></i> Data Dana</a> </li>
                    <li> <a href="<?php echo base_url() ?>logout" class="waves-effect"><i class="icon-logout fa-fw"></i>
                            Logout</a> </li>
                    <!-- /.nav-second-level -->
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- Page Content -->
        <?php include $halaman.".php"; ?>
        <!-- /#page-wrapper -->
        <footer class="footer text-center"> <?php echo date('Y') ?> &copy; </footer>
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="<?php echo base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/nicEdit.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="<?php echo base_url() ?>assets/bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <script src="<?php echo base_url() ?>assets/bower_components/datatables/jquery.dataTables.min.js"></script>
    <!--Nice scroll JavaScript -->
    <script src="<?php echo base_url() ?>assets/js/jquery.nicescroll.js"></script>

    <!--Wave Effects -->
    <script src="<?php echo base_url() ?>assets/js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url() ?>assets/js/myadmin.js"></script>
    <script src="<?php echo base_url() ?>assets/js/ckeditor.js"></script>


    <script type="text/javascript">
    $(document).ready(function() {
        $('#myTable').DataTable();
        // new nicEditor().panelInstance('area1');
        new nicEditor({
            iconsPath: '<?php echo base_url(); ?>assets/js/nicEditorIcons.gif'
        }).panelInstance('halaman_pengesahan');
        new nicEditor({
            iconsPath: '<?php echo base_url(); ?>assets/js/nicEditorIcons.gif'
        }).panelInstance('halaman_proposal');


        ClassicEditor.create(document.querySelector('#halaman_agenda')).catch(error => {
            console.error(error);
        });
        ClassicEditor.create(document.querySelector('#halaman_anggaran')).catch(error => {
            console.error(error);
        });
    });
    </script>
</body>

<!-- Mirrored from themedesigner.in/demo/myadmin/myadmin/blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 May 2016 05:20:24 GMT -->

</html>