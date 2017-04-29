<?php
session_start();
require_once 'connection.php';
     if($_POST){
     if(isset($_POST['editusers'])){
     $edituser = $_POST['editusers'];
     
     if(isset($_POST['sub'])){
      $output = "SELECT * from student where StudentID ='$edituser'";
      $koutput = "SELECT * from kustaff where StaffID ='$edituser'";   
         
      if($_POST['staff']=="student"){
      $result = $conn->query($output);
         
     $row = $result->num_rows;
     if($row == 1){
     $db = $result->fetch_array(MYSQLI_ASSOC);

         $_SESSION['userid'] = $db;
      header('Location:edituser.php');
    }
      }
    
    else if($_POST['staff']== "kustaff"){
      $resulty = $conn->query($koutput);
         
     $roww = $resulty->num_rows;
     if($roww == 1){
     $db = $resulty->fetch_array(MYSQLI_ASSOC);

         $_SESSION['userid'] = $db;
      header('Location:edituser.php');
    
     }
    }
    else{
         header('Location: validate.php');
    }
  }
}
}
     
?>
<?php
if(isset($_POST['feedback'])){
    header('Location:feedback.php');
}

        if(isset($_POST['stats']) && isset($_POST['status'])){
            
              $stats= "UPDATE cv SET Status='{$_POST['stats']}' WHERE Filenumber='{$_SESSION['filenumber']}'";
    
              $result = $conn->query($stats);
              if($result=== TRUE){
              
              echo '<div style=color:green;>';
              header('Location: download.php?updated=Record updated successfully. Click <a href="feedback.php">Feedback</a> or <a href="download.php">Exit</a>');
             } 
             else {
                  echo "Error updating record: " . $conn->error;
                  }  
        }
           ?> 

     
