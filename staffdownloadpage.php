<?php
session_start();
require_once 'connection.php';

if(!isset($_SESSION['username'])){
header('Location:accesslogin.php');
}
?>

<?php
 $query = "SELECT * FROM category inner join cv where category.CategoryID = cv.CategoryID and Status IS Null;";
     $results = $conn->query($query);
    $r = [];

   while($result = mysqli_fetch_object($results))
    {
   array_push($r, $result);
        
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
      <div class ="container">
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
          <input button type="button" name = "feedback" value ="Previous" onClick ="back()"/>
          <input button type="button" name = "help" value ="Help" onClick ="help()"/>
          <input button type="button" name = "logout" value ="Sign Out" onClick ="logout()"/>
	 </ul>
	 </nav>
        </div>
         <br>
             <div class = "three">
                 <br>
             <fieldset name="files">
                <legend>CV Folder</legend> 
                 <p style="margin-right:4em;"><strong>CVs To Download</strong></p>
                 
                 
                <?php
                 
             $lsql = "SELECT  * FROM cv where  Status is Null;";
     
              $data = $conn->query($lsql);
    
              while($rows=$data->fetch_array(MYSQLI_ASSOC)){
              print '<br>';
              print '<tr>';
              print '<div style= color:white;>';
              print $rows['Filenumber']. ' . ' . $rows['Filelink'];
              print '</div>';
              print '</tr>';
              }
                 
            
           ?>
                 </fieldset>
             </div>
         <div class ="nine">
     <fieldset style="background:linear-gradient(cadetblue, white);">
     <h1 style ="text-align:center;">Instant Access to Download CVs</h1>
         <div class ="downloadbutton">
          <?php
                 if(isset($_POST['cat'])){
                   $cat= $_POST['cat']; 
                 }
            if(isset($_POST['go'])){
             $lsql = "SELECT  * FROM cv where CategoryID = '$cat' and Status is Null;";
     
              $data = $conn->query($lsql);
    
              while($rows=$data->fetch_array(MYSQLI_ASSOC)){
               $_SESSION['filenumber'] = $rows['Filenumber'];  
             
              print '<br>';
              print '<table style="margin-left:25%;margin-right:25%;">';
              print '<tr>';
              print '<td><a href="'.$rows['Filelink'].'" download><button name="links" style="margin-left:0.5em;margin:0.5em; height:3em; background-color:aliceblue;" method="get" action="download.php" >'.$rows['Filenumber'].'.'.$rows['Filelink'].'</button></a></td>';
              print '</tr>'; 
               print '<tr>';
              print '<td>'.'<form method="post" action="editdb.php">
              <input type="text" name= "stats" placeholder="Enter CV status" required/><br>
              <input type="submit" name="status" value="STATUS" style="margin:0.5em;"/>
              </form>'.'</td>';
              print '</tr>';
              print '</table>';
              }
            
            }
             
             ?>
      <?= (isset($_GET['updated'])) ? $_GET['updated'] : ""; ?>
    
           </div>  
             </fieldset>

         </div>
              <div class="drow7">
                 <div class="two">
                     <div class="col3">
             <fieldset>
                   <legend>Categories</legend> 
                 <form method="post" action="download.php">
                <select name= "cat">
                 Select a Category 
         <?php foreach ($r as $cat): ?>
            <option name="cat" style="width:20em;" >
                 <?=  $cat->CategoryID ?>. <?= $cat->Categoryname ?> 
             </option>
         <?php endforeach; ?>          
         </select> 
      <input type="submit" name="go" value="GO"/>
                 </form>
                 </fieldset>
                 </div>
             </div>
             </div>
	 </body>
          </div>
	 </html>