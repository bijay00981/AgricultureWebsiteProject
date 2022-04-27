<?php


// If upload button is clicked ...

	$connection = mysqli_connect("localhost", "root", "");
    $db=mysqli_select_db($connection,'crop');
    if (isset($_POST['Delete'])) {
        $cropname=$_POST['cropname'];
       
		// Get all the submitted data from the form
		$sql = "DELETE FROM `cropimg` WHERE cropname = '$cropname'";

		// Execute query
		$sql_run=mysqli_query($connection, $sql);
    }
?>
<!DOCTYPE html> 
<html>
    <head>
        <meta charset="utf-8">
        <title>Dashboard Municipality</title>
        <link rel="stylesheet" href="../css/trial2.css">
       
    </head>
    <body >
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
        <form method="POST" action="trial2.php">
        <label for="">Crop name </label>
        <input type="text" placeholder="cropname" name="cropname"><br><br>
        
        <input type="submit" name="Delete" value="Delete" >
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