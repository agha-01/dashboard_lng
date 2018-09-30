<?php $site_url="http://localhost/dashboard/"; ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="<?php echo $site_url; ?>assets/css/normalize.css">
    <link rel="stylesheet" href="<?php echo $site_url; ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $site_url; ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $site_url; ?>assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo $site_url; ?>assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo $site_url; ?>assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="<?php echo $site_url; ?>assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="<?php echo $site_url; ?>assets/scss/style.css">
    <link href="<?php echo $site_url; ?>assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">
    <link href="<?php echo $site_url; ?>assets/css/lightbox.min.css" rel="stylesheet">


    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>


    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->


    <script src="<?php echo $site_url; ?>assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="<?php echo $site_url; ?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo $site_url; ?>assets/js/lightbox-plus-jquery.min.js"></script>

</head>
<body>



        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?php echo $site_url.'home/'.$lng ?>"><img src="<?php echo $site_url; ?>images/logo.png" alt="Logo"></a>

            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                     <li class="active">
                        <a href="<?php echo $site_url;?>home/<?php echo "$lng/";?>"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                   
                    <?php 
                        $sql = Controller::$conn->sidebar($lng);
                       
                            ?>
                          
                    
                    <!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="<?php echo $site_url; ?>#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                        <ul class="sub-menu children dropdown-menu">
                              <?php echo "<span style='color:#999;'>".$_SESSION["Dashboardemail"]."</span>"; ?>
                            <a class="nav-link" href="a_exit"><i class="fa fa-power -off"></i><h5>Cixis</h5></a>
                        </ul>
                    </li>
                </ul>

 
    
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
                <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <a href="<?php echo $site_url."mail/".$lng; ?>">
                         <button class="btn btn-success">mesaj gonder</button>
                        </a>
                    </div>
                    <div class="header_mesaj">
                        <a href="<?php echo $site_url."mesaj/".$lng;?>">
                            <button class="btn btn-primary">Gelenler
                                <span><i class="ti-email"></i></span>
                                <span class="count bg-primary">13</span>
                            </button>

                        </a>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="<?php echo $site_url; ?>#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="<?php echo $site_url; ?>images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <?php echo "<i>".$_SESSION["Dashboardemail"]."</i>"; ?>
                                <a class="nav-link" href="<?php echo $site_url; ?>a_exit"><i class="fa fa-power -off"></i>Cixis</a>
                        </div>
                    </div>

                    <!-- language start -->
                    <div class="language">
                        
                        <a href="<?php echo $site_url; ?>home/az" class="az"><span>az <i class="flag-icon flag-icon-az"></i></span></a>                        
                        <a href="<?php echo $site_url; ?>home/ru" class="ru"><span>ru <i class="flag-icon flag-icon-ru"></i></span></a>                       
                        <a href="<?php echo $site_url; ?>home/en" class="us"><span>en <i class="flag-icon flag-icon-us"></i></span></a>
                    </div>
                    
                    <!-- language end -->

                </div>
            </div>
        </header><!-- /header -->
        <!-- Header-->

<style>
    .admin{
        color: green;
    }
    .mesaj{
        background: #e74c3c !important;
        /*border-radius: 45px;*/
        color: white;
    }
    .language{
        float: right;
        margin-right: 40px;
        font-size: 18px;
        margin-top: 6px;
    }
    .header-left{
        float: left;
    }
    .header_mesaj{
        margin-left: 150px;
    }
    .header_mesaj span i{
        margin-left: 5px;
    }
    .bg-primary{
        position: absolute;
        top:10px;
        background: red !important;
        border-radius: 100%;
        min-width: 20px;
        min-height: 18px;
    }

</style>