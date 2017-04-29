<?php
 $baseurl= "registeration.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cv website</title>
	</head>
<body>
    <h1 style="background-color:silver;">Confirmation</h1>
    <hr>
  <fieldset style="width:250px; height:150px;"> 
      <h2>New Record Has Been Created Successfully</h2>
 <?php   
     echo ("Thank You");
     
    
     echo  "<p><a href = $baseurl>Return To Form</a></p>";
    ?>
      <hr>
      
    </fieldset>
</body>
</html>