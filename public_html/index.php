<?php
$url = '';
if(isset($_GET['url'])){
	$url = explode('/', $_GET['url']);
}
if($url == ''){
	require "indexx.php";
}elseif ($url[0] == 'huile')
{
	$_GET['genre'] = 'huile';
	require 'categorie.php';
}
elseif ($url[0] == 'hydratation')
{
	$_GET['genre'] = 'hydratation';
	require 'categorie.php';
}
elseif ($url[0] == 'traitement')
{
	$_GET['genre'] = 'traitement';
	require 'categorie.php';
}
elseif ($url[0] == 'peau grasse')
{
	$_GET['genre'] = 'peau grasse';
	require 'categorie.php';
}
elseif ($url[0] == 'peau Normale')
{
	$_GET['genre'] = 'peau Normale';
	require 'categorie.php';
}
elseif ($url[0] == 'peau seche')
{
	$_GET['genre'] = 'peau seche';
	require 'categorie.php';
}
elseif ($url[0] == 'colorant')
{
	$_GET['genre'] = 'colorant';
	require 'categorie.php';
}
elseif ($url[0] == 'Parfum')
{
	$_GET['genre'] = 'Parfum';
	require 'categorie.php';
}
elseif ($url[0] == 'antiseptiques')
{
	$_GET['genre'] = 'antiseptiques';
	require 'categorie.php';
}
elseif ($url[0] == 'anti-bactériennes')
{
	$_GET['genre'] = 'anti-bactériennes';
	require 'categorie.php';
}
elseif ($url[0] == 'Cheveux')
{
	$_GET['genre'] = 'Cheveux';
	require 'categorie.php';
}
elseif ($url[0] == 'savons conservateur')
{
	$_GET['genre'] = 'savons conservateur';
	require 'categorie.php';
}

elseif ($url[0] == 'colorant')
{
	$_GET['genre'] = 'colorant';
	require 'categorie.php';
}

elseif ($url[0] == 'savons conservateur')
{
	$_GET['genre'] = 'savons conservateur';
	require 'categorie.php';
}

elseif ($url[0] == 'savons conservateur')
{
	$_GET['genre'] = 'savons conservateur';
	require 'categorie.php';
}

else 
{
	echo "not found";
}


?>