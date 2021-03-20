<?php

var_dump($_GET);

$url = '';
if(isset($_GET['url'])){
	$url = explode('/', $_GET['url']);
}

var_dump($url);

if($url == ''){
	echo "page d'accueil";
}elseif ($url[0] == 'article' AND !empty($url[1]))
{
	$idarticle = $url[1];
	require 'article.php';
	print $idarticle;
}else 
{
	echo "not found";
}

var_dump($url);
