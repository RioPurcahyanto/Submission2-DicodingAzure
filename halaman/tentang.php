<div class="halaman">
	<h2>Tentang Kami</h2>
	
	<p>This is supporting website for Dicoding - Azure - Rio's Submission2</p>
	
</div>

<?php
 	$files = glob("D:\home\site\wwwroot\halaman\*.{jpg,gif,png}", GLOB_BRACE);
	usort( $files, function( $a, $b ) { return filemtime($a) - filemtime($b); } );
	print_r($files);
	$fileToUpload = $files[0];
	$filePath = $files[0];
	$fileToUpload = basename($filePath);
	print($filePath);
	print($fileToUpload);
?>
