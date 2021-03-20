



<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Connexion | Page de Connexion</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->


<?php
session_start();

function crypter($motpass)
{
$code = strlen($motpass);
$code = ($code * 4)*($code/3);
$sel = strlen($motpass);
$sel2 = strlen($code.$motpass);
$texte_hash = sha1($sel.$motpass.$sel2);
$texte_hash_2 = md5($texte_hash.$sel2);
$final = $texte_hash.$texte_hash_2;
substr($final , 7, 8);
$final = strtoupper($final);
return $final;
}


if (isset($_POST['connect']))
{
 $pseudo = $_POST['username'];
 $motpass = $_POST['password'];
 $con = new PDO("mysql:host=localhost;dbname=u788290378_buvoindi", "u788290378_idbuvoindi", "CherifBvoindi123");
 $final= crypter($motpass);
  $select = $con->prepare("SELECT login, password FROM admin WHERE login='$pseudo' and password='$final'");
 $select->setFetchMode(PDO::FETCH_ASSOC);
 $select->execute();
 $data=$select->fetch();
 $passe =$data['password'];

/*
$motpas = "souleu";
$code = strlen($motpas);
$code = ($code * 4)*($code/3);
$sel = strlen($motpas);
$sel2 = strlen($code.$motpas);
$texte_hash = sha1($sel.$motpas.$sel2);
$texte_hash_2 = md5($texte_hash.$sel2);
$final = $texte_hash.$texte_hash_2;
substr($final , 7, 8);*/
 if($data['login']!=$pseudo && $data['password']!=$final)
 {
  echo "<script>alert('invalid email or pass ou bloque')</script>";
 }
 elseif($data['login']==$pseudo &&  $data['password']==$final)
 {
    $_SESSION['login']=$data['login'];
  header("location:produits.php");
 }
}

?>



	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center m-b-md custom-login">
				<h3>Connecte toi</h3>
				<p>La meilleure et flexible Application By cherif!</p>
			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
                        <form action="<?php print htmlspecialchars($_SERVER['PHP_SELF']);   ?>" id="loginForm" method="post">
                            <div class="form-group">
                                <label class="control-label" for="username">Identifiant</label>
                                <input type="text" placeholder="Identifiant" title="Please enter you username" required="" value="" name="username" id="username" class="form-control">
                                <span class="help-block small">votre Identifiant unique</span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Mot de Passe</label>
                                <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                                <span class="help-block small">Votre unique mot de passe svp</span>
                            </div>
                            <div class="checkbox login-checkbox">
                                <label>
										<input type="checkbox" class="i-checks"> Se souvenir de moi </label>
                                <p class="help-block small">(Respecter les regles de securite)</p>
                            </div>
                            <button class="btn btn-success btn-block loginbtn" name="connect">Connexion</button>
                        </form>
                    </div>
                </div>
			</div>
			<div class="text-center login-footer">
				<p>Copyright © 2020. All rights reserved. Cherif Genius</p>
			</div>
		</div>   
    </div>
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
	
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="js/tab.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/icheck/icheck-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
    
</body>

</html>