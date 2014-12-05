<?php
include "base.php";
header( 'content-type: text/html; charset=utf-8' );

if(!empty($_POST['email']) && !empty($_POST['password']))
{
    $password = mysql_real_escape_string($_POST['password']);
    $email = mysql_real_escape_string($_POST['email']);
    
     
     $checkusername = mysql_query("SELECT * FROM users WHERE email = '".$email."'");
    
     if(mysql_num_rows($checkusername) == 1)
     {
        echo "<h1>Erreur</h1>";
        echo "<p>Cette adresse est déjà présente.<br />";
        echo "Veuillez reessayer avec une adresse differente.</p>";
     }
     else
     {
        $registerquery = mysql_query("INSERT INTO users (passwd, email) VALUES('".$password."', '".$email."')");
        if($registerquery)
        {
            echo "<h1>Cool</h1>";
            echo "<p>Votre compte a bien été créé.<br />";
            echo "Veuillez vous <a href=\"login.php\">connecter ici</a>.</p>";
        }
        else
        {
            echo "<h1>Erreur</h1>";
            echo "<p>Votre enregistrement a échoué. Veuillez réessayer.</p>";    
        }       
     }
}
else
{
    ?>
     
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Page</title>

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
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Enregistrez-vous !</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="signup.php" method="POST" name="signupform" id="signupform">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-lg btn-block">Submit</button>                                
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
<?php
}
?>