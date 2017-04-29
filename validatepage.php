<html>
<head>
    <title>Validation</title>
    <link href="maincssstyle.css" rel="stylesheet">
    </head>
<body>
    <div class ="validate"> 
	   <img src = "ku logo.jpg" alt = "logo"/>
        <h3 style="text-align:center;">Validation Page</h3>
    </div>
    <hr>   
    <?php
     $error = 'Error!!!!. Data Entered is Incorrect. Please Try Again';
          echo '<div style="color:red">';
           echo $error;
    echo '</div>';
?> 
    </body>
</html>
