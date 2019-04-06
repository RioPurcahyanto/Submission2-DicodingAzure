<div class="halaman">
	<h2>Tentang Kami</h2>
	<p>This is supporting website for Dicoding - Azure - Rio's Submission2</p><br />
	<p>Here is list of uploaded file</p>
	
</div>

<?php
 	$files = glob("D:\home\site\wwwroot\halaman\*.{jpg,gif,png}", GLOB_BRACE);
	usort( $files, function( $a, $b ) { return filemtime($b) - filemtime($a); } );
// 	print_r($files);
	$filename = basename($files); 
	print($filename);
?>
