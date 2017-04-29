<?php
session_start();
require_once 'connection.php';
$conn = mysqli_connect($dbhost, $dbuser, $dbpw, $dbname);
 if(isset($_POST['del']))
             {
              $info = $_POST['del'];

                 $infosql = "DELETE from studentcontact where 
                 ContactID = " . $info;
                 
                    $conn->query($infosql);
                 
                     if($conn->query($infosql) === true)
                     {
                     $message = 'Contact has been removed';
                     }
                 
                     else{
                       echo 'An Error was encountered when deleting details!!!'; 
                     }
            }

if(!isset($_SESSION['username'])){
  header('Location:accesslogin.php');
}
                 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <title>KU Talent CV Website</title>
     <link href="maincssstyle.css" rel="stylesheet">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js">
      </script>
	 <script>
    $(document).ready(function(){
    $("#button").click(function(){
     $("#contact").fadeToggle();});
    }); 

	 </script>
	 
	 </head>
	 <body>
	 <img src = "images/logo.jpg" alt = "logo" style = "height:100px;"/>
         <h5 style = "font-size:20px;font-family:arial">Student Enquiries </h5>
         <div class="row">
         <nav>
	   <ul>
           <li><a href=download.php><button id="jobs" title="CV" onclick>View CV</button></a></li>
          <li><button id="button">Contact Administrator</button></li>           
	   </ul>
	   </nav>
         </div>
	 <hr>
          <p id="contact">
        Tel: 020(7)3482144<br> 
        Email: admin@kutalentkingston.ac.uk     
        </p>
         <div class="viewcontact">
         <table>
             <tr>
                 <th>ID</th>
                 <th>Student Name</th><br>
                  <th>Email</th><br>
                 <th>Issue</th><br>
             </tr>
             <?php
             
              $lsql = "SELECT ContactID, Studentname, Email, Issue FROM studentcontact;";
     
              $data = $conn->query($lsql);
    
              while($rows = $data->fetch_array(MYSQLI_ASSOC)){
              print '<tr>';
              print '<td width="30">' . $rows['ContactID'] ."</td>";   
              print '<td width="100">' . $rows['Studentname'] ."</td>"; 
              print '<td width="200">' . $rows['Email'] . "</td>";
              print '<td width="">' . $rows['Issue'] . "</td>";  
              print '</tr>';   
              }
              if(isset($_POST['reply'])){
               $mail = $_POST['reply'];
              }  
             if(isset($_POST['area'])){
             $reply = $_POST['area'];
             }
             
             function sendEmail($mail,$reply){
                 $subject = 'CV Enquiries';
                 $email_body = $reply;
                 $to = $mail;
                 $headers = "From:kutalent@kingston.ac.uk";
                 mail($to,$subject,$email_body,$headers);
            
             }
            

//             sendEmail($mail,$reply);

             ?>
         </table>
             <br>
             <form method="post" action="viewcontact.php">
                 <textarea style="width:500px; height:80px;" name="area" id="area" required></textarea>
                 <br>
                 <input type="text" name="reply" id="reply" placeholder="email" required/>
                  <input type="submit" name="submit" id="submit" value="Reply"/>
                 <br><br>
             </form>
             <form method="post" action="viewcontact.php">            
                CONTACT ID
             <input type="text" name="del" id="del"/>
                 <br><br>
            <input type="submit" name="enquiry" value="DELETE ENQUIRY"/>
             </form>
         </div>
         <hr>
         <footer>Kingston University  2017</footer>
    </body>
</html>