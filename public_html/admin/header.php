<?php  session_start();  ?>

 <?php   
      if(empty($_SESSION['login']))
{
  header("location:index.php");
}


  ?>


<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard V.1 | Kiaalap - Kiaalap Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
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
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- dropzone CSS
        ============================================ -->
    <link rel="stylesheet" href="css/dropzone/dropzone.css">
    <!-- educate icon CSS
        ============================================ -->
    <link rel="stylesheet" href="css/educate-custon-icon.css">
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

   <style type="text/css">
       .produit
{
    background: url("img/product_64px.png");
    background-repeat: no-repeat;
    background-size: 20px;
    background-position: 5%;
    padding: 13px;
}

 .payement
{
    background: url("img/card_payment_80px.png");
    background-repeat: no-repeat;
    background-size: 20px;
    background-position: 5%;
    padding: 13px;
}
 .commande
{
    background: url("img/command_50px.png");
    background-repeat: no-repeat;
    background-size: 20px;
    background-position: 5%;
    padding: 13px;
}
 .livraison
{
    background: url("img/free_shipping_80px.png");
    background-repeat: no-repeat;
    background-size: 20px;
    background-position: 5%;
    padding: 13px;
}
.stock
{
    background: url("img/warehouse_80px.png");
    background-repeat: no-repeat;
    background-size: 20px;
    background-position: 5%;
    padding: 13px;
}
.client
{
    background: url("img/customer_80px.png");
    background-repeat: no-repeat;
    background-size: 20px;
    background-position: 5%;
    padding: 13px;
}
.vente
{
    background: url("img/sell_64px.png");
    background-repeat: no-repeat;
    background-size: 20px;
    background-position: 5%;
    padding: 13px;
}

.annonce
{
    background: url("img/billboard_64px.png");
    background-repeat: no-repeat;
    background-size: 20px;
    background-position: 5%;
    padding: 13px;
}
.rapport
{
    background: url("img/report_file_80px.png");
    background-repeat: no-repeat;
    background-size: 20px;
    background-position: 5%;
    padding: 13px;
}
.statistique
{
    background: url("img/statistics_80px.png");
    background-repeat: no-repeat;
    background-size: 20px;
    background-position: 5%;
    padding: 13px;
}
.rapport
{
    background: url("img/report_file_80px.png");
    background-repeat: no-repeat;
    background-size: 20px;
    background-position: 5%;
    padding: 13px;
}

.commentaire
{
    background: url("img/send_comment_80px.png");
    background-repeat: no-repeat;
    background-size: 20px;
    background-position: 5%;
    padding: 13px;
}

.updatemembere
{
    background: url("img/EditProfile_48px.png");
    background-repeat: no-repeat;
    background-size: 20px;
    background-position: 5%;
    padding: 10px;
}
 .deletemembere
{
    background: url("img/DeleteUser Male_48px.png");
    background-repeat: no-repeat;
    background-size: 20px;
    background-position: 5%;
    padding: 10px;
}
    </style>
   </style>

</head>

<body>