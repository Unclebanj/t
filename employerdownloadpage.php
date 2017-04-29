<?php
session_start();
require_once 'connection.php';

if(!isset($_SESSION['username'])){
header('Location:accesslogin.php');
}

$query = "SELECT * FROM category";
     $results = $conn->query($query);
    $r = [];

   while($result = mysqli_fetch_object($results))
    {
   array_push($r, $result);
   }

if(isset($_POST['stat'])){
    $status = $_POST['stat'];
    $sql= "UPDATE cv SET Status='$status' WHERE Filenumber ='45'";
    
    $result = $conn->query($sql);
    
  if ($result === TRUE) {
    echo "Record updated successfully";
   } 
    else {
    echo "Error updating record: " . $conn->error;
    }   
}  

if(isset($_GET['cat'])){
    if($_GET['download'] != null){
    
    $sq = "SELECT FROM cv where CategortID = '{$_POST['cat']}'";
        $sconn->query($sq);
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
	 <script>
         function back(){
         window.location.href = 'welcome.php';
     }
         function contact(){
         window.location.href = 'contact.php';
     }
	 function logout(){
         window.location.href = 'logout.php';
     }
    function feedback(){
        window.location.href = 'feedback.php';
     }
    function help(){
      window.location.href = 'help.php';
     }
	 </script>
	 </head>
    <div class="container">
	 <body>

         <div class ="drow1">
   <div class = "header">
    <img src = "images/logo.jpg" alt = "logo"/> 
      <h4> KU TALENT</h4>
     </div>
  </div>
    <div class="drow2">
	  <nav>
	 <ul>
          <input button type="button" name = "logout" value ="Contact Student" onClick =""/>
          <input button type="button" name = "logout" value ="Sign Out" onClick ="logout()"/>
	 </ul>
	 </nav>
        </div>
         <div class ="ten">
               <h1 style ="text-align:center;color:black;">Access to View CVs</h1>

         <div class ="downloadbutton">     
  </div>
         <div id="downloads">
          <strong>CVs to View:</strong>
                    <?php 
                    $user= $_SESSION['username'];
                    $empview ="SELECT Filelink FROM cv INNER JOIN employer ON cv.CategoryID = employer.CategoryID WHERE Status ='Completed'AND Username ='$user';";
                  $result = $conn->query($empview);
                    
                while($r = $result->fetch_array(MYSQLI_ASSOC)){
                    print '<br>';
                    print '<div style= "height:2em;" >';
                    print '<a href="'.$r['Filelink']. '" download>'.$r['Filelink'].'</a>';
                    print '</div>';
            }    
                 ?>
         </div>
         </div>
	 </body>
    </div>
	 </html>