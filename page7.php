<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Crops</title>
    <link rel="stylesheet" href="style.css">
    

</head>
<body>
            <div class="icon">
              <h2 class="logo1">Ginger</h2>
              <img src="ginger.jpg">
            <div class="add">
               <img  src="add.jpg" >
              </div>
                
             </div>
         
        
    </div>
    <div class="desc"> 
      <h3>Crop description</h3>
      <p>The ginger plant has a thick, branched rhizome (underground stem) with a brown outer layer and yellow centre that has a spicy, citrusy aroma</p>
    </div>
    <div class="quantity">
      <span class="Qt">Quantity:</span>
    <p> 10</p>
    </div>
    
      <div classs="container">
        <div class="title">Market Price:</div>
        <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">crop type</span>
            <input type="text">
          </div>
          <div class="input-box">
            <span class="details">Rate</span>
            <input type="text">
        </div>
      </form>
      
      <?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
$db=mysqli_select_db($conn,'crop');

// Check connection
if ($db->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
      
      
    
    
    
   <div class="table-container">
     <h1 class="heading">Farmer Details</h1>
     <table class="table">
       <thead>
         <tr>
           <th>Farmer Name</th>
           <th>Family Count</th>
           <th>Product Rate</th>
           <th>Farmer Rate</th>
           <th>Option</th>
         </tr>
       </thead>
       <tbody>
         <tr>
           <td data-label="Farmer Name">Ram Thapa</td>
           <td data-label="Family Count">5</td>
           <td data-label="Product Rate">40</td>
           <td data-label="Farmer Rate">35</td>
           <td data-label="Option"><a href="option" class="btn">Delete</a></td>
         
          </tr>
          <tr>
            <td data-label="Farmer Name">Marco Botton Tuttofare</td>
            <td data-label="Family Count">4</td>
            <td data-label="Product Rate">50</td>
            <td data-label="Farmer Rate">40</td>
            <td data-label="Option"><a href="option" class="btn">Delete</a></td>
            
          
           </tr>
           <tr>
            <td data-label="Farmer Name">Mariah Maclachlan Better</td>
            <td data-label="Family Count">6</td>
            <td data-label="Product Rate">41</td>
            <td data-label="Farmer Rate">50</td>
            <td data-label="Option"><a href="option" class="btn">Delete</a></td>
            
          
           </tr>
           <tr>
            <td data-label="Farmer Name">Valerie Liberty Head Chef</td>
            <td data-label="Family Count">3</td>
            <td data-label="Product Rate">50</td>
            <td data-label="Farmer Rate">45</td>
            <td data-label="Option"><a href="option" class="btn">Delete</a></td>
            
          
           </tr>
       </tbody>
     </table>
   </div>
    
</body>
</html>