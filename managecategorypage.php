
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
      
	 <script>
	 function addcategory(){
	  window.location.href = 'view employers'
	  }
     function submit(){
         document.forms(0).submit();
     } 
	  </script>
      
	 </head>
	 <body >
	 <div class ="about_header"> 
	   <img src = "images/ku logo.jpg" alt = "logo"/>
        <h4> KU TALENT</h4>
		</div>
		<div class = "category">
		<nav>
		<ul>
		<li><a href = "welcome.php">Back</a></li>
            <li><a href = "employerlist.php">Contact Employer</a></li>
		</ul>
		</nav>
		</div>
         <h3 style="text-align:center;color:gray;">Category Menu</h3>
		 <div class="containers">
             <div class="row">
                 <div class="col3">
                 <div class="aside">
                    <?php
             
              $lsql = "SELECT * FROM category;";
     
              $data = $conn->query($lsql);
    
              while($rows = $data->fetch_array(MYSQLI_ASSOC)){
              print '<br>';
              print '<tr>';
              print '<td width="30">' .$rows['CategoryID'] . '. '. $rows['Categoryname'] ."</td>"; 
             print '</tr>';
              }
              ?>
                </div>
                 </div>
                  <div class="col3">
                   <div class="admin_category" >
                    <table style="margin-left:5em;">
                       <tr>
                        <th style="color:gray">EDIT CATERGORY</th>
                        </tr>
                       </table>
		                 Category ID
                         <br>
                  <form method="post" action="managecategory.php">
		         <input type = "text" name = "id" placeholder = "Enter ID">
		        <br>
		      New Category Name
            <br>
			<input type = "text" name = "name" placeholder = "Enter Category Name"/>
           <br><br>
         <input type ="submit" name= "newcat" value = "UPDATE"/>
		</form>
             <?php
                if(isset($_POST['newcat'])){
                 $update= "UPDATE category SET Categoryname ='{$_POST['name']}' WHERE CategoryID ='{$_POST['id']}'";  
                    $catupdate = $conn->query($update);
                     if($catupdate === true){
                        print '<br>';
                         print 'The '. $_POST['id'] . ' has been changed to '. $_POST['name'];
                        }
                     }
                 ?>
             </div>
            </div>
         <div class="col9">
    <div class="admin_category" >
      <h3>Delete Category</h3>
         <hr>
		   <form method="post" action="managecategory.php">
		     <br>
               <p>Category Number
                 <input type = "text" name ="catdelete" value=""/>
            <input type = "submit" name= "delete" value = "DELETE"/></p> 
        <?php
        if(isset($_POST['catdelete']))
         {
          $_SESSION['category'] = $_POST['catdelete'];
             
             }
           if(isset($_POST['delete']))    
              {
            $delete = "SELECT * FROM category where CategoryID = '{$_SESSION['category']}'"; 
     
              $data = $conn->query($delete);
    
              while($rows = $data->fetch_array(MYSQLI_ASSOC)){
              print '<div style= text-align:center;>';
              print '<br>';
              print '<div style= color:red;>';
              print 'Category To Be Deleted: <br> ' . $rows['Categoryname'];
              print '</div>';
              print '<br>';
              print '<input type ="submit" name="deleted" value = "CONFIRM"/>';
              print '</div>';
            }
         }8
     
          ?>
            <?php if(isset($_POST['deleted'])): ?>
            <div>
            <form method="post" action="managecategory.php">
            <?php    
                $deleted = "DELETE from category where 
                 categoryID ='{$_SESSION['category']}'";
                 
                    $conn->query($deleted);
                 
                     if($conn->query($deleted) === true)
                     {
                     echo 'Category has been removed';
                     }
                 
                     else{
                       echo 'An Error was encountered when deleting details!!!'; 
                     }
            ?>  
                
            </form>
            </div>
             <?php endif; ?>
		</form>  
             </div>
             </div>
             </div>
         </div>
          <footer style="text-align:center;margin:2em;">Kingston University  2017</footer>
		</body>
		</html>