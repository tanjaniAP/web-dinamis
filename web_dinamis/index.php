<!DOCTYPE html>
<html>
<head>
	<title>Membuat Halaman web dinamis dengan PHP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<div class="content">
	<header>
		<h1 class="judul">PRAKTIKUM WEB DINAMIS</h1>
		<h3 class="deskripsi">Membuat Halama Web Dinamis Dengan PHP</h3>
</header>
	<div class="menu">
	<ul>
		<li><a href="index.php?page=home.php">HOME</a></li>
		<li><a href="index.php?page=tentang.php">TENTANG</a></li>
		<li><a href="index.php?page=tutorial.php">TUTORIAL</a></li>
</ul>
</div>
<div class="badan">
<?php
if(isset($_GET['page'])){
	$page=$_GET['page'];
	switch($page){
		case 'home':
		include "halaman/home.php";
		break;
		case 'tentang':
		include "halaman/tentang.php";
		break;
		case 'tutorial':
		include "halaman/tutorial.php";
		break;
		default:
		echo "<center><h3>Maaf.Halaman tidak di temukan!</h3></center>";
		break;
	}
}else{
	include"halaman/home.php";
}
?></div>
</body>
</html>
