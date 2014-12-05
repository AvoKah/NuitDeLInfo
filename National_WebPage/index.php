<?php
include "base.php";

$page = "";
$page_name = "";
if (isset($_GET['p']))
    $page = $_GET['p'];

switch ($page) {
    case "home":
    case "login":
    case "find":
        $page_name = " - " . ucfirst($page);
        $page = $page . ".php";
        break;
    default:
        $page = "home.php";
}

$is_connected = !empty($_SESSION['LoggedIn']) && !empty($_SESSION['email']);
    

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>La Nuit de L'info - <?php echo $page_name; ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;>
            <div class="navbar-header" >
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Nuit de l'info</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                La Nuit de L'info <?php echo $page_name; ?>
                </a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                                                        
                    
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <?php
                            if ($is_connected)
                                echo "<a href='login.php?LoggedOut=true'>";
                            else
                                echo "<a href='login.php'>";
                            ?>
                            <i class="fa fa-sign-out fa-fw"></i>
                            <?php echo $is_connected ? "Logout" : "Login"; ?>
                            </a>
                        </li>
                        <?php
                        if (!$is_connected)
                            echo "<li><a href='signup.php'><i class='fa fa-save fa-fw'></i>Enregistrez-vous</a>";
                        ?>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li class="sidebar-search" style="margin-top: -50px; margin-bottom: 50px;">
                                                                                                                    <form role="form" action="index.php?p=find" method="POST" name="loginform" id="loginform">
                            <div class="input-group custom-search-form">
                                
                                <input type="text" class="form-control" placeholder="Search..." name="search_input">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                                
                            </div>
                        </form>
                            <!-- /input-group -->
                        </li>
                        
                        <li>
                            <img src="images/nonepidemic-small.png" style="margin-top: -50px; margin-left: 20px;"/>
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                              
                        <li>
                            <a href="index.php?p=find"><i class="fa fa-edit fa-fw"></i> Tables</a>
                        </li>
                        <li>
                            <a href="login.php"><i class="fa fa-sign-out fa-fw"></i>Se connecter</a>
                        </li>
                        <li>
                            <a href="signup.php"><i class="fa fa-save fa-fw"></i>S'enregistrer</a>
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <?php
        include $page;
        ?>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

</body>

</html>
