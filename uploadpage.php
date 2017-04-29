<?php
session_start();
require_once 'connection.php';
if(!isset($_SESSION['username'])){
header('Location:accesslogin.php');
}

?>
<?php
     require_once 'connection.php';
     $conn = mysqli_connect($dbhost, $dbuser, $dbpw, $dbname);

     $query = "SELECT * FROM category";
     $results = $conn->query($query);
    $r = [];

   while($result = mysqli_fetch_object($results))
    {
   array_push($r, $result);
   }

    if (isset($_POST['upload'])) 
    {
        if ($_POST['upload'] === "Upload CV") 
        {
            $target_dir = "upload/";
            $target_file = $target_dir . basename($_FILES["file"]["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

//            // Check if file already exists
//            if (file_exists($target_file)) {
//                echo "Sorry, file already exists.";
//                $uploadOk = 0;
//            }
            // Check file size
            if ($_FILES["file"]["size"] > 5000000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if($imageFileType != "txt" && $imageFileType != "TXT" && $imageFileType != "doc"
            && $imageFileType != "DOC" && $imageFileType != "docx" && $imageFileType != "DOCX") {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
            if(isset($_POST['check'])){
                      if($_POST['check'] == "Y"){
                    $_POST['check'] = "Share  With Employers";
                  }
                else if($_POST['check'] == "N"){
                    $_POST['check']= "Dont Share with Employers";
                }
            }
             
        
           
            if(isset($_POST['cat'])){
                      if(empty($_POST['cat'])){
                   echo 'Category has to be selected';
                  }
            }
                
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                     echo '<div style= "color:white;">';
                    echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
                      echo '</div>';
                    
                   // echo "Stored in the database - " . $target_dir . basename( $_FILES["file"]["name"]);
                    
                    $file_name = $target_dir . basename($_FILES['file']['name']);
                    
                
                    
                    $sql = "INSERT IGNORE INTO cv(Filelink,Sharedescription,CategoryID,StudentID) VALUES ('{$file_name}','{$_POST['check']}','{$_POST['cat']}','{$_SESSION['id']}');";
                    
                    $conn->query($sql);
                    
                    if($conn->query($sql) === TRUE) {
                        echo '<div style= "color:white";>';
                        echo "Well Done";
                        echo '</div>';
                    } else
                  {
                  echo "Sorry, there was an error uploading your file.";
                  }
        
                }
              }  
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
	 </head>
	 <body style="background:linear-gradient(cadetblue, black);">
	  <div class ="header"> 
	   <img src = "ku logo.jpg" alt = "logo"/>
          <h4>KU Talent CV </h4>
		</div>
	  <nav>
	 <ul>
	<li><a href= "welcome.php">Back</a></li>
	 <li><a href= "contact.php">Contact KU Talent</a></li>
         <li><a href = "help.php">Help</a></li>
           <li><a href = "logout.php">Sign Out</a></li>
	 </ul>
	 </nav>
	 <div class = "upload_container">
	 <h4>Upload Your CV</h4>
       <form  method="post" action="upload.php" enctype="multipart/form-data" >   
	 <div class = "select1">
         <label style="color:blue;">Category</label>
         <select name = "cat">
            Select a Category
             
         <?php foreach ($r as $cat): ?>
            <option name="cat">
                 <?= $cat->CategoryID ?>. <?= $cat->Categoryname ?> 
             </option>
         <?php endforeach; ?>
         </select> 
         
	 </div>
         <div class="upload_button">
             <input type = "file" name ="file" /> 
         <br/><br/>
             Share CV with Employers<br>
	      <input type="radio" name="check" value= "Y" checked/>Yes
          <input type="radio" name="check" value= "N" checked/>No
         <br/><br/>
           <input type= "submit" name ="upload" value = "Upload CV" checked/>
         </div>
         </form>
	 <p id = "terms">By submitting your CV,you are agreeing to Kingston University's Terms of Service and agree to be contacted by employers</p>
             </div>
	   </body>
	 </html>