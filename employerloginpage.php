<?php
require_once('connection.php');
  

$error = [];// setting an array for errors
    
 if(isset($_POST['username']) && isset($_POST['password'])){
$user =$_POST['username'];
$pass = mysql_real_escape_string($_POST['password']);

   session_unset($user);    
 session_unset($pass);
}
    if (empty($user)){
     $error[]= "Please Enter Your Username"; 
     }
    if(empty ($pass)){
        $error[]= "Please Enter Password";
    }
         
      if(empty($error)){   
      $empsql = "SELECT * FROM employer INNER join employerpermission ON employer.employerID = employerpermission.employerID WHERE Username ='$user' and Employerpassword = '$pass'";  
      
     
      $data = $conn->query($empsql);
      $rows = $data->num_rows;
    
     if($rows == 1){
         $db = $data->fetch_array(MYSQLI_ASSOC);
         
        session_start();
        $_SESSION['username'] = $user;
        $_SESSION['password'] = $pass;
        $_SESSION['current'] = date("Y-m-d");
         
        $_SESSION['id']= $db['EmployerID'];
        $_SESSION['fname'] = $db['Employername'];
        $_SESSION['lname'] = $db[''];
        $_SESSION['level'] = $db['Accesslevel'];
        $_SESSION['expiry'] = $db['Expirydate'];        

     }
    if($_SESSION['current'] > $_SESSION['expiry']){
       header('Location: employerauthenticate.php?message=Your password has Expired!! <a href = "kucontact.html">Contact KU Talent</a>');
    }
     else{
      header('Location:welcome.php');
     }
          
// else {
//    
//     header('Location: employerauthenticate.php?message=Username_AND_Password_Invalid');
//     }
          
    }
?>

