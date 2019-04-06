<html>
<head>
	<title>WEB APP --- AZURE</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<!-- 
Author : riopurcahyanto 
Site : bmpnjtest.azureweb.net
-->
<div class="content">
	<header>
		<h1 class="judul">bmpnj-test.azureweb.net</h1>
		<h3 class="deskripsi">Web Application</h3>
	</header>
 
	<div class="menu">
		<ul>
			<li><a href="index.php?page=home">HOME</a></li>
			<li><a href="index.php?page=tentang">TENTANG</a></li>
			<li><a href="index.php?page=azurestorage">AZURE-BLOB</a></li>
			<li><a href="index.php?page=azurevision">AZURE-VISION</a></li>
			
		</ul>
	</div>
 
	<div class="badan">
 
 
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'home':
				include "halaman/home.php";
				break;
			case 'tentang':
				include "halaman/tentang.php";
				break;
			case 'azurestorage':
				include "halaman/azure-blob.php";
				break;
			case 'azurevision':
				include "halaman/computer_vision.html";
				break;
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "halaman/home.php";
	}
 
	 ?>
 
	</div>
</div>
</body>
</html>
