<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <style>
            body {text-align: center;}
            </style>
        <title>Detail Form | PHP</title>
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>       
    <div class="container">
        <div class="title">Farmer Form </div>
        
        <form action="registration.php" method="post">
            <div class ="user-details">
                <div class="fullName">
                    <span class="details">Full Name</span>
                    <input type="text" placeholder="Enter your Full name" required name="fullName" />    
                </div>
                <div class="birthDate">
                    <span class="details">Birth date</span>
                    <input type="text" placeholder="Enter in B.S." required name="birthDate" />    
                </div>
                <div class="familyCount">
                    <span class="details">Family Count</span>
                    <input type="text" placeholder="Enter your Family Count" required name="familyCount" />    
                </div>
                <div class="Contact">
                    <span class="details">Contact</span>
                    <input type="text" placeholder="Enter your contact" required name="Contact" />    
                </div>
                <div class="farmingCrops">
                    <span class="details">Farming Crops</span>
                    <input type="text" placeholder="Enter Farming crops" required name="farmingCrops" />    
                </div>
                <div class="productionRate">
                    <span class="details">Production Rate</span>
                    <input type="text" placeholder="Enter your Production Rate" required name="productionRate" />    
                </div>
                <div class="marketRate">
                    <span class="details">Market Rate</span>
                    <input type="text" placeholder="Enter your Market Rate" required name="marketRate" />    
                </div>
                <div>
                        <span class="gender">Gender</span>
                    </div>
                    <div>
                        <select name="dropdown" id="dropdown" name="gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
            
                <div class="button1">
                        <input type="reset" value="Cancel" name="cancel">    
                    </div>
                    <div class="button2">
                        <input type="submit" value="Create" name="create">    
                    </div> 

            </div>
        </form>
    </div>
    </body>
</html>