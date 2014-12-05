<?php

if(isset($_GET['disease']))
    $current = $_GET['disease'];
else
    $current = 1;

$db = new mysqli('mysql1.alwaysdata.com', 'n2i', 'root', 'n2i_user');
if ($db->connect_errno > 0) {
    die('Unable to connect to database [' . $db->connect_error . ']');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Page d'accueil</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="test.css" rel="stylesheet"/>
        <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="//code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- Date Picker -->
        <link href="css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.php" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Virus.info
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>

            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">


        <?php include("menu.php"); ?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        <?php
                            $sql = "SELECT `name` FROM `Disease` WHERE `id` = " . $current;
                            if (!$result = $db->query($sql)){
                                die ('There was an error running the query [' . $db->error . ']');
                            }
                            $name = $result->fetch_assoc();
                            echo $name['name'];
                        ?>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php"><i class="fa fa-dashboard"></i>Accueil</a></li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>
                                        <?php
                                            $sql = "SELECT `country_ids` FROM `Disease` WHERE `id` =" . $current;
                                            if (!$result = $db->query($sql)){
                                                 die ('There was an error running the query [' . $db->error . ']');
                                            }
                                            $number_hit = $result->fetch_assoc();
                                            $table = explode(";", $number_hit['country_ids'], -1);
                                            $nb = 0;
                                            foreach ($table as $nb_hit)
                                                $nb += 1;
                                            echo $nb;
                                        ?>
                                    </h3>
                                    <p>
                                        pays touchés
                                    </p>
                                </div>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>
                                        <?php
                                            $sql = "SELECT `number_hit` FROM `Disease` WHERE `id` =" . $current;
                                            if (!$result = $db->query($sql)){
                                                 die ('There was an error running the query [' . $db->error . ']');
                                            }
                                            $number_hit = $result->fetch_assoc();
                                            $table = explode(";", $number_hit['number_hit'], -1);
                                            $nb = 0;
                                            foreach ($table as $nb_hit)
                                                $nb += intval($nb_hit);
                                            echo $nb;
                                        ?>
                                    </h3>
                                    <p>
                                        Personnes atteintes
                                    </p>
                                </div>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        <?php
                                            $sql = "SELECT `advent_year` FROM `Disease` WHERE `id` = " . $current;
                                            if (!$result = $db->query($sql)){
                                                die ('There was an error running the query [' . $db->error . ']');
                                            }
                                            $name = $result->fetch_assoc();
                                            echo $name['advent_year'];
                                        ?>
                                    </h3>
                                    <p>
                                        Année d'arrivée
                                    </p>
                                </div>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <a href="https://www.croix-rouge.fr/Je-donne/Don-ponctuel?elk_dc_id=477&gclid=CN3YqM2irsICFTHMtAodhhQATA">
                                <div class="small-box bg-green">

                                        <div class="inner">
                                            <h3>
                                                Aidez!
                                            </h3>
                                            <p>
                                                Pour éradiquer les maladies
                                            </p>
                                        </div>

                                </div>
                            </a>
                        </div><!-- ./col -->
                    </div><!-- /.row -->

                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-7 connectedSortable">
                            <!-- Map box -->
                            <div class="box box-solid bg-light-blue-gradient">
                                <div class="box-header">
                                    <i class="fa fa-map-marker"></i>
                                    <h3 class="box-title">
                                        Pays touchés
                                    </h3>
                                </div>
                                <div class="box-body">
                                    <div id="world-map" style="height: 500px;"></div>
                                </div><!-- /.box-body-->
                            </div>
                            <!-- /.box -->
                        </section><!-- /.Left col -->

                        <!-- Right col -->
                        <section class="col-lg-5 connectedSortable">
                          <div class="description">
                            <h1>
                              
                            </h1>
                            <areatext>
                            <?php
                                $sql = "SELECT `description` FROM `Disease` WHERE `id` = " . $current;
                                if (!$result = $db->query($sql)){
                                    die ('There was an error running the query [' . $db->error . ']');
                                }
                                $name = $result->fetch_assoc();
                                echo $name['description'];
                            ?>
                            </areatext>
                          </div>
                        </section><!-- /.Right col -->


                    </div><!-- /.row (main row) -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->


        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="//code.jquery.com/ui/1.11.1/jquery-ui.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="js/plugins/morris/morris.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- datepicker -->
        <script src="js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="js/AdminLTE/app.js" type="text/javascript"></script>

        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        
        <script type="text/javascript">
            var visitorsData =
                <?php
                    echo "{ \n";

                    $sql = "SELECT `number_hit`, `country_ids` FROM `Disease` WHERE `id` = " . $current;
                    if (!$result = $db->query($sql)){
                        die ('There was an error running the query [' . $db->error . ']');
                    }
                    $res = $result->fetch_assoc();
                    $table_country_ids = explode(";", $res['country_ids'], -1);
                    $table_number_hits = explode(";", $res['number_hit'], -1);
                    
                    for ($i = 0; $i < count($table_country_ids) && $i < count($table_number_hits); $i = $i + 1)
                    {
                        $sql_country = "SELECT `acronym` FROM `Country` WHERE `id` = " . $table_country_ids[$i];
                        if (!$result_country = $db->query($sql_country)){
                            die ('There was an error running the query [' . $db->error . ']');
                        }
                        $res_country = $result_country->fetch_assoc();

                        echo $res_country['acronym'] . " : " . $table_number_hits[$i] . ",\n";
                    }
                    echo "};"
                ?>
        </script>
        <script src="js/AdminLTE/dashboard.js" type="text/javascript"></script>

        <!-- AdminLTE for demo purposes -->
        <script src="js/AdminLTE/demo.js" type="text/javascript"></script>

    </body>
</html>
