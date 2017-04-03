<?php
require_once 'connection.php';

$sql= "INSERT IGNORE INTO studentcontact(Studentname, Email , Issue) VALUES('{$_POST['sname']}','{$_POST['semail']}','{$_POST['issue']}');"; 

$query = $conn->query($sql);

if($_POST['sname']== null || $_POST['semail']== null || $_POST['issue'] == null)
{ 
    include 'validate.php';
}  
   else if ($query=== TRUE){
 header('Location: contact.php? message=Thank You. Your comments have been forwarded to KU Talent successfully');

}
else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}   

?>
