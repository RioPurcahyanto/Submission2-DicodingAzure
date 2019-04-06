<div class="halaman">
	<h2>Tentang Kami</h2>
	
	<p>This is supporting website for Dicoding - Azure - Rio's Submission2</p>

</div>

<?php
$dir = "./halaman/uploads/";

// Sort in ascending order - this is default
$a = scandir($dir);

// Sort in descending order
$b = scandir($dir,1);

print_r($a);
print_r($b);
?>

