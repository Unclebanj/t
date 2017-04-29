<?php
session_start();
require_once('connection.php');
if(!isset($_SESSION['username'])){
  header('Location:accesslogin.php');
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
      <script>
     function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
     }
   window.onclick = function(event) {
   if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
   function email(){
  alert("kutalent@kingston.ac.uk");  
   }
   function phone(){
     alert(" +44(0)208417 7445");  
   }
    
      </script>
	 </head>
	 <body>
	 <div class ="header"> 
	   <img src = "images/ku logo.jpg" alt ="logo"/>
         <h4> KU TALENT</h4>
		</div>
       <nav>
         <ul>
             <h3 style="color:gray;">STUDENT FEEDBACK</h3> 
             <div style="text-align:center;margin:3em;">
            <div class="dropdown"> 
              <button onclick="myFunction()" class="dropbtn">Contact KU Talent</button>
                <div id="myDropdown" class="dropdown-content">
                    <a href="#" onclick="phone()">Phone</a>
                    <a href="#" onclick="email()">Email</a>
                    <a href="contact.php">Contact Page</a>
                </div>
                 </div>
            </div>
           </ul>
         </nav>
         <div id= "status1">
            <img src="feedbackimg.php" alt=""/>
             <br>
             <?php
             $_SESSION['current'] = date("d-m-y");
              $_SESSION['time'] = date("h:i:sa");
             print '<div style="color:gray;float:right;">';
             print $_SESSION['current']. '  ' . $_SESSION['time'];
             print '</div>';
             if(isset($_SESSION['id'])){
                 $id=  $_SESSION['id'];
             }
            if(isset($_SESSION['filenumber'])){
                
    
             $status = "SELECT Status from cv where StudentID ='$id' and Filenumber = '{$_SESSION['filenumber']}'";
             $result = $conn->query($status);
             if($result->num_rows > 0) {
           
            while($rows = $result->fetch_assoc()) {
            $_SESSION['status']= $rows["Status"];
            }
             print 'Status: '. $_SESSION['status'];
           }
        }
             ?>
         </div>
         <div id= "viewfeedback">
         <h3 style="color:gray;">FEEDBACK</h3>
             <?php
              if(isset($_SESSION['id'])){
    
             $feedback = "SELECT Filenumber, Description, Date, StaffID from feedback where StudentID ='{$_SESSION['id']}'";
             $res = $conn->query($feedback);
             if($res->num_rows > 0) {
           
            while($row = $res->fetch_assoc()) {
            echo '<div style="border:1px solid #aaa; border-radius:5px; border-style:outset; border-color:transparent; height:150px; border-style:outset; margin-top:2em; background:linear-gradient(cadetblue,white);">';
            print '<br>';
            print '<strong>Date:</strong> '.$row["Date"]. '<strong> Produced By Staff: </strong>' .'K'.$row['StaffID']; 
            print '<br>';
            print 'CV Number: '. $row["Filenumber"];
            print '<br>';
            print $row["Description"];
            print '<br>';
            }     
           }        
         }
             ?>
         </div>
		</body>
		</html>