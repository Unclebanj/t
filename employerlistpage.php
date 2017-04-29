<?php
session_start();
require_once 'connection.php';

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
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	 <script>
	 function home(){
	  window.location.href = 'home.php';
	  }
	  </script>
	 </head>
	 <body>
	 <div class ="about_header"> 
	   <img src = "images/ku logo.jpg" alt = "logo"/>
        <h4>KU TALENT</h4>
         </div>
         <nav>
	   <ul>
	    <li title = "Back to welcome page"><a href ="welcome.php">Back</a></li>
		  <li title = "Contacting KU Talent"><a href ="contact.php">Contact Us</a></li>
		   <li title = "Follow Us"><a href ="follow.php">Follow Us</a></li>
              <li><a href = "logout.php">Sign Out</a></li>
	   </ul>
	   </nav>
         <div class="containers">
             <div class="row">
                  <div class="col3">
                   <div class="emphistory" >
                    <table style="margin-left:5em;">
                       <tr>
                        <th style="color:gray">Employer Description</th>
                        </tr>
                       </table>
                       
                       <?php
                   if($_POST) {   
                  $emp = $_POST['but'];
                  $empsql = "SELECT History FROM employer where employerID = $emp;";
     
                 $data = $conn->query($empsql);
    
              while($rows = $data->fetch_array(MYSQLI_ASSOC)){
              print '<div style= " padding:2em;">';
              print  $rows['History']; 
              print '<br>';
              print '</div>';
             }
                   
                   }
                       ?>
                    </div>
                      </div>
               <div class="col6">
            <div class="emplist">
                     <form method="post" action="employerlist.php">
         <table>
	 <tr>
	 <th>Employers List</th>
	 </tr>
	  <tr>
	   <td><button  name="but" value="2">PWC</button></td>
	   </tr>
	     <tr>
	 <td><button name="but" value="3">IBM</button></td>
	  </tr>
	   <tr>
	   <td><button name="but" value="1">Sparta Global</button></td>
	  </tr>
	 <tr>
	 <td><button name="but" value="4">TicketMaster</button></td>
	 </tr>
              <tr>
	 <td><button name="but" value="5">Oracle</button></td>
	 </tr>
              <tr>
	 <td><button name="but" value="6">HESA</button></td>
	 </tr>
     <tr>
	 <td><button name="but" value="7">Extreme Games Limited</button></td>
	 </tr>
     <tr>
	 <td><button name="but" value="8">McKinsey and Company</button></td>
	 </tr>
     <tr>
	 <td><button name="but" value="9">Vodafone LTD</button></td>
	 </tr>
     <tr>
	 <td><button name="but" value="10">Danone</button></td>
	 </tr>
        <tr>
	 <td><button name="but" value="11">Bacs</button></td>
	 </tr>
        <tr>
	 <td><button name="but" value="12">AKQA</button></td>
	 </tr>
     <tr>
	 <td><button name="but" value="13">Rawside</button></td>
	 </tr>
	 </table>
     </form>
      </div>
            </div>
                   <div class="row">
        <div class="col9">
             <div class="empdetails" >
              <h5>View Employer Details</h5>
                 <?php
                 if(isset($_POST['but'])){
                     $emp1 = $_POST['but'];
                  $empsql = "SELECT Address, Email, Telephonenumber FROM employer where employerID = $emp1";
     
                 $data = $conn->query($empsql);
    
               while($rows = $data->fetch_array(MYSQLI_ASSOC)){
              print '<div style= "margin-left:5em;">';
              print '<strong>Address:</strong> ' . $rows['Address']; 
              print '<br><br>';
              print '<strong>Email:</strong> ' . $rows['Email'];
              print '<br><br>';
              print '<strong>Telephone Number:</strong> ' . $rows['Telephonenumber']; 
              print '</div>';
             }
                 }
                 ?>
             </div>
             </div>
                   </div>
         </div>
         </div>
         </body>
         </html>