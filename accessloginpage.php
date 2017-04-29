<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>KU Talent CV Website</title>
     <link href="maincssstyle.css" rel="stylesheet">
	 <script>
      function home(){
	  window.location.href = 'home.php';
	  }   
	  function authenticate(){
	  window.location.href = 'authenticate.php';
	  }
      function studentauthenticate(){
	  window.location.href = 'sauthenticate.php';
	  }
      function employerauthenticate(){
	  window.location.href = 'employerauthenticate.php';
	  }
	 </script>
	 </head>
	 <body>
	 <div class ="login_header"> 
	   <img src = "images/ku logo.jpg" alt = "logo"/>
        <h4>KU Talent</h4>
		<nav>
		<ul>
		<li><input type ="button" value= "Home " onclick = "home()"/></li>
		</ul>
		</nav>
	   </div>
	   <div class = "login_container">
	   <h5>Log  in </h5>
	    <input type ="button" value= "Student " onclick = "studentauthenticate()" style = "width:230px; height:50px;"/>
		 <input type ="button" value= "KU Staff " onclick = "authenticate()" style = "width:230px;height:50px;"/>
		  <input type ="button" value= "Employer " onclick = "employerauthenticate()" style = "width:230px; height:50px;"/>
	   </div>
         <footer style="text-align:center;">www.KingstonUniversity.ac.uk</footer>
	 </body>
	 </html>