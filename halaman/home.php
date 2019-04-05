<div class="halaman">
	<h2>Halaman Depan</h2>
	<p>Welcome to this site</p>
	<p>Please upload your file in button below</p>
	
	<form action = "phpQS.php" method = "POST" enctype = "multipart/form-data">
         <input type = "file" name = "image" />
         <input type = "submit"/>

         <ul>
            <li>Sent file: <?php echo $_FILES['image']['name'];  ?>
            <li>File size: <?php echo $_FILES['image']['size'];  ?>
            <li>File type: <?php echo $_FILES['image']['type'] ?>
         </ul>

      </form>
