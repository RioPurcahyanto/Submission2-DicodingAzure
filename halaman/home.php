<div class="halaman">
	<h2>Welcome to this site</h2>
	<p>Please upload your file in button below</p>
	<br><br><br>
	<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

	<p> about this feature: upload image from your local disk to my azure blob storage</p>
	<br /><br /><br /><br /><br />
	<p>NOTES:</p>
	<p>1. Upload foto melalui form diatas, aplikasi akan otomatis mengupload ke azure blob storage</p>
	<p>2. Jika belum ada history foto pada menu TENTANG, menu AZURE-BLOB masih bisa terbuka tetapi muncul pesan 'Unable to open file!'</p>
	<p>3. Jika anda memasukan file selain format image, maka akan muncul pesan 'File is not an image.Sorry, only JPG, JPEG, PNG & GIF files are allowed.Sorry, your file was not uploaded.'</p>
	<p>4. Anda bisa melihat nama file foto yang telah diupload pada menu TENTANG</p>
	<p>5. jika menu AZURE-BLOB di-klik,maka akan otomatis mengupload foto yang terakhir di submit namun dengan container yang berbeda</p>
	<p>6. Anda bisa langsung mendownload file yang telah diupload dengan klik tombol "Click Here To Download" pada Menu AZURE-BLOB</p>
	
