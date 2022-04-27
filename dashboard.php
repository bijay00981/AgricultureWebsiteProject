
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
                        <li><a class="active"  href="trial2.php">Home</a></li>
                       
                    </ul>   
                </div>
            </nav>
        </section>
        
        <section class="vegetablesection">
            <h1>Crops</h1>
            <div class="ed">
             <span class="add"><a href="form.php">Add</a></span><span class="delete"><a href="delete.php">Delete</a> </span>
            </div>
            <?php
                    $size = 0;
                    $connection = mysqli_connect("localhost","root","");
                    $db=mysqli_select_db($connection,"crop");
                    $query="SELECT * FROM `cropimg`";
                    $query_run=mysqli_query($connection,$query);
                    while($row=mysqli_fetch_array($query_run)){
                        $size+=1;
                        if($size<11){
                        ?>
           
        <div class="first">  
        <?php
           
                if($size==1){
                    ?>
            <a href=".." ><?php echo "<img src='{$row['image']}'style='width:100px;height:100px'>";?>
                <div class="dec1"><?php echo $row['cropname']  ?></div>
              
            </a> 
            <?php
                } 
            ?> 
        </div>
        <div class="secound" >
        <?php
                if($size==2){
                    ?>
            <a href=".."class="img2"><?php echo "<img src='{$row['image']}'style='width:100px;height:100px'>";?>
                <div class="dec1"><?php echo $row['cropname'] ?></div>
            </a> 
            <?php
                } 
            ?>  
        </div>
       
        <div class="third">
        <?php
                if($size==3){
                    ?>
            <a href=".."><?php echo "<img src='{$row['image']}'style='width:100px;height:100px'>";?>
                <div class="dec1"><?php echo $row['cropname'] ?></div>
            </a> 
            <?php
                } 
            ?>      
        </div>  
        <div class="fourth">
        <?php
                if($size==4){
                    ?>
            <a href=".."><?php echo "<img src='{$row['image']}'style='width:100px;height:100px' >";?>
                <div class="dec1"><?php echo $row['cropname'] ?></div>
            </a> 
            <?php
                } 
            ?>     
                    
        </div>
        <div class="fifth">
        <?php
                if($size==5){
                    ?>
            <a href=".."><?php echo "<img src='{$row['image']}'style='width:100px;height:100px'>";?>
                <div class="dec1"><?php echo $row['cropname'] ?></div>
            </a> 
            <?php
                }
            ?>        
                  
        </div>
        
        <div class="sixth">
        
        <?php
                if($size==6){
                    ?>
            <a href=".."><?php echo "<img src='{$row['image']}'style='width:100px;height:100px'>";?>
                <div class="dec1"><?php echo $row['cropname'] ?></div>
            </a> 
            <?php
                } 
            ?>      
        </div>
        <div class="seventh">
        
        <?php
                if($size==7){
                    ?>
            <a href=".."><?php echo "<img src='{$row['image']}'style='width:100px;height:100px'>";?>
                <div class="dec1"><?php echo $row['cropname'] ?></div>
            </a> 
            <?php
                } 
            ?>      
                     
        </div>
        <div class="eight">
        <?php
                if($size==8){
                    ?>
            <a href=".."><?php echo "<img src='{$row['image']}'style='width:100px;height:100px'>";?>
                <div class="dec1"><?php echo $row['cropname'] ?></div>
            </a> 
            <?php
                } 
            ?>         
        </div>
        <div class="ninth">
       
        <?php
                if($size==9){
                    ?>
            <a href=".."><?php echo "<img src='{$row['image']}'style='width:100px;height:100px'>";?>
                <div class="dec1"><?php echo $row['cropname'] ?></div>
            </a> 
            <?php
                } 
            ?>        
                    
        </div>
        <div class="tenth">
        <?php
                if($size==10){
                    ?>
            <a href=".."><?php echo "<img src='{$row['image']}'style='width:100px;height:100px'>";?>
                <div class="dec1"><?php echo $row['cropname'] ?></div>
            </a> 
            <?php
                } 
            ?>       
                 
        </div>
        <?php }  } ?>
          
    </section>
        
    
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