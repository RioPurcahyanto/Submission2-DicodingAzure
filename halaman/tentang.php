<div class="halaman">
	<h2>Tentang Kami</h2>
	
	<p>This is supporting website for Dicoding - Azure - Rio's Submission2</p>
	
</div>

<?php
 	$files = glob("D:\home\site\wwwroot\halaman\*.{jpg,gif,png}");
	print_r($files);
for ($n = 0; $n >= 0; $n++){
	$filePath = $files[$n];
}
	$fileToUpload = basename($filePath);
	print($filePath);
	print($fileToUpload);
?>
