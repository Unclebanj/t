<?php
session_start();
require_once 'connection.php';

if(isset($_SESSION['catdelete']))
             {
              $category = $_SESSION['catdelete'];
         
if(isset($_POST['delete']))    
              {
            $lsql = "SELECT Categoryname FROM category where CategoryID = '$category'"; 
     
              $data = $conn->query($lsql);
    
              while($rows = $data->fetch_array(MYSQLI_ASSOC)){
              
              print $rows['Categoryname'];
               
            }
        }
    }
?>
