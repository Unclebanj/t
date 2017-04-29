
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
    function about(){
	  window.location.href = 'about.php';
	  }
	  </script>
	 </head>
	 <body>
	 <div class ="about_header"> 
	   <img src = "images/ku logo.jpg" alt = "logo"/>
        <h4> Contact Us</h4>
         </div>
		 <nav>
	 <ul>
	  <li><input type ="button" value = "Home" onClick = "home()"/></li> 
          <li><input type ="button" value = "About Us" onClick = "about()"/></li>
         <li><button><a href="mailto:kutalent@kingston.ac.uk" onclick="ga('send', 'event', 'EmailClick', 'mailto:kutalent@kingston.ac.uk', location.pathname, 0, {'nonInteraction': 1});">Email us</a></button></li>
	 </ul>
	 </nav>
	 <div class = "contact_container">
	 <h2 style = "color:#6495ed;">Contacting KU Talent</h2>
	 <p>We welcome all communications between student and our department. Please provide your contact details in order to respond to your queries</p>
	 <p>For any technical issues, or problems regarding CV submissions and work experience use contact form</p>
         
	 <form method = "post" action="contactdb.php" style = "position:relative; left:150px; padding:10px;">
	 <input type= "text" name ="sname" placeholder ="Your Name">
	 <input type= "text" name ="semail" placeholder ="Email">
         <br>
	 <textarea name="issue" style = "height:200px; width:345px;">
         </textarea>
         <br>
         <input type = "submit" title = "send" value = "Submit" name = "button4"/>
         <br>
          <?= (isset($_GET['message'])) ? $_GET['message'] : ""; ?>
	 </form>
	 </div>
	 <blockquote>
	 <p>Kingston University<br/>Room JG0004<br/>Penrhyn Road<br/>Surrey<br/>KT1 2EE</p>
	 <p>Telephone: +44(0)208417 7445<br/>Opening hours: 9.00am – 5.30pm (Monday – Friday)</p>
         </blockquote>
        
		</body>
		</html>