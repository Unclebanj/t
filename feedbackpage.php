<?php
session_start();
require_once 'connection.php';
$conn = mysqli_connect($dbhost,$dbuser,$dbpw,$dbname);

if(isset($_POST['details']) && isset($_POST['date']) && isset($_POST['number'])) {

$sql = "INSERT IGNORE INTO feedback(Description,Date,StudentID,Filenumber,StaffID) VALUES('{$_POST['details']}','{$_POST['date']}','{$_POST['number']}','{$_SESSION['filenumber']}','{$_SESSION['id']}')";
    
$query = $conn->query($sql);


if ($query === TRUE){
    echo 'Your feedback have been forwarded to KU Talent successfully';
}

else{

    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>
    
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>KU Talent CV Website</title>
     <link href="maincssstyle.css" rel="stylesheet">
<script type = "text/javascript">
</script>
</head>
<body>
<div class ="feedback_header"> 
	   <img src = "ku logo.jpg" alt = "logo"/>
	    <h4>KU Talent Feedback</h4>
		</div>
     <nav>
	   <ul>
           <li title = "Home"><a href ="welcome.php">Home</a></li>
	    <li title = "Previous"><a href ="download.php">Back</a></li>
           <li title = "Logout"><a href ="logout.php">Sign Out</a></li>
	   </ul>
         </nav>
		<div class = "feedback_container">
		<form method="post" action="feedback.php">
		K Number
		<input type ="text" name = "number" placeholder = "Enter ID number"/>
		<h5>Date</h5>
		<input type ="date" name ="date" placeholder="Date"/>
		<h5>Details</h5>
		<textarea name = "details"  style = "height:200px; width:600px; margin:10px;"></textarea>
            <br>
		<button type="submit">Send</button>
		<button type="reset" >Cancel</button>
		</form>
            <footer style = "text-align:center;">Kingston University  www.kingston.ac.uk   2017</footer>
		</div>
</body>
</html>