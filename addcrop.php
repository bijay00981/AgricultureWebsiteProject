
<?php


// If upload button is clicked ...
if (isset($_POST['upload'])) {
	$cropname=$_POST['cropname'];
    $img=$_POST['imgupload'];
	$mp=$_POST['mp'];
	$db = mysqli_connect("localhost", "root", "", "crop");

		// Get all the submitted data from the form
		$sql = "INSERT INTO cropimg (cropname, image, marketprice) VALUES ('$cropname','$img',$mp)";

		// Execute query
		mysqli_query($db, $sql);
		
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/trial2.css">
</head>
<body>
<section class="header">
            <nav>
                <div class="innerheader">
                    <div class="logo">
                        <h1>Municipality</h1>
                    </div>
                    <ul class="nav" >    
                        <li><a class="active"  href="trial2.html">Home</a></li>
                        
                    </ul>   
                </div>
            </nav>
        </section>
<form method="POST" action="">
<label for="">Crop name </label>
        <input type="text" placeholder="cropname" name="cropname"><br><br>
		<label for="">Market price </label>
		<input type="text" placeholder="Market Price" name="mp"><br><br>
        <input type="file"  name="imgupload">
        <input type="submit" name="upload" value="upload" >
</form>
<div class="footer">
        <div class="footer-content">
            <div class="footer-section about"></div>
            <div class="footer-section link"></div>
            <div class="footer-section contact-form">
                <div class="muni">Municipality name</div>
                <div class="contno">Contact no:.....</div>
                <div class="adde">Address:.....</div>
                
            </div>

        </div>
        <div class="footer-bottom">
            &copy; Subham Kafle|Designed by Subham Kafle
        </div>
    </div>
           
    </body>
</html>
</body>
</html>