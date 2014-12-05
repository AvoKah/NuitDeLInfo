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
        <title>Institut Nationnal de Veille Sanitaire</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="//code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="../../css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="../../css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- Date Picker -->
        <link href="../../css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="../../css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="../../css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="../../css/AdminLTE.css" rel="stylesheet" type="text/css" />

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
                      L'Institut Nationnal de Veille Sanitaire
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php"><i class="fa fa-dashboard"></i> Accueil</a></li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-7 connectedSortable">
                          <script id="feed-1417749629890816" type="text/javascript" src="http://rss.bloople.net/?url=http%3A%2F%2Fwww.invs.sante.fr%2Frss%2Ffeed%2Frapports_syntheses&limit=25&showtitle=false&type=js&id=1417749629890816"></script>
                        </section><!-- /.Left col -->

                        <!-- Right col -->
                        <section class="col-lg-5 connectedSortable">                            
                          <img src="./INVS.jpg"/>
                          <h1>À propos de l'INVS</h1>

                          <p> Etablissement public, placé sous la tutelle du ministère chargé de la Santé, l’Institut de veille sanitaire (InVS) réunit les missions de surveillance, de vigilance et d’alerte dans tous les domaines de la santé publique.</p>

                          <p>Créé par la loi du 1er juillet 1998 relative au renforcement de la veille sanitaire et au contrôle de la sécurité sanitaire des produits destinés à l’homme, l’InVS a vu ses missions complétées et renforcées par la loi du 9 août 2004 relative à la politique de santé publique, afin de répondre aux nouveaux défis révélés par les crises sanitaires récentes et les risques émergents. </p>

                          <h3>la surveillance et l’observation permanentes de l’état de santé de la population</h3>

                          <p>L’InVS participe au recueil et au traitement des données sur l’état de santé de la population à des fins épidémiologiques, en s’appuyant notamment sur des correspondants publics et privés constituant le réseau national de santé publique ;
la veille et la vigilance sanitaires<p/>

                            <P>L’lnVS est chargé de rassembler, analyser et actualiser les connaissances sur les risques sanitaires, leurs causes et leur évolution ; de détecter de manière prospective les facteurs de risque susceptibles de modifier ou d’altérer la santé de la population ou de certaines de ses composantes, de manière soudaine ou diffuse ; d’étudier et de répertorier, pour chaque type de risque, les populations les plus fragiles ou menacées ;</p>
                            <h3>l'alerte sanitaire</h3>

                            <p>L’InVS doit informer sans délai le ministre chargé de la Santé en cas de menace pour la santé de la population ou de certaines de ses composantes, quelle qu’en soit l’origine, et lui recommander toute mesure ou action appropriée pour prévenir la réalisation ou atténuer l’impact de cette menace ;</p>

                            <p>L’InVS participe, dans le cadre de ses missions, à l’action européenne et internationale de la France, notamment à des réseaux internationaux de santé publique dédiés à la surveillance et à l‘alerte sanitaires.</p>

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
        <script src="../../js/plugins/morris/morris.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="../../js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="../../js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="../../js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="../../js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="../../js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- datepicker -->
        <script src="../../js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="../../js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="../../js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="../../js/AdminLTE/app.js" type="text/javascript"></script>

        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="../../js/AdminLTE/dashboard.js" type="text/javascript"></script>

        <!-- AdminLTE for demo purposes -->
        <script src="../../js/AdminLTE/demo.js" type="text/javascript"></script>

    </body>
</html>
