    <div id="wrapper">
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>KU Talent CV Website</title>
     <link href="maincssstyle.css" rel="stylesheet" href = "12-column-grid.css"/>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://malsup.github.io/jquery.cycle.all.js"></script>
 <script type = "text/javascript">
	  
	  function help(){
	   window.location.href = 'help.php';
	  }
	  function about(){
	  window.location.href = 'about.php';
	  }
	  function contact(){
	    window.location.href = 'contact.php';
	  } 
	  function sendcv(){
	  window.location.href = 'studentauthenticate.php';
	  }
     
 </script>
      <script>
      $(document).ready(function(){
          $(".section2").cycle({
              fx:'fade'
          })
      })
      
      </script>
  </head>
  <body>
  <div class = "container">
  <div class ="row">
   <div class = "header">
    <img src="images/logo.JPG" alt = "logo"/> 
      <h4> KU TALENT</h4>
  <button><a href = "accesslogin.php">Sign In</a></button>
</div>
  </div>
  <div class ="row">
      <div class="row10">
    <nav>
	 <ul>
	 <li><input type = "button" title="This is a help button" value = "HELP" name = "button1" onclick = "help()"/></li>
	 <li><input type = "button" title = " About KU Talent" value = "ABOUT" name = "button2" onclick = "about()"/></li>
	  <li><input type = "button" title = "Contact KU Talent" value = "CONTACT" name = "button3" onclick = "contact()"/></li>
	   <li><input type = "button" title = "CV Submission" value = "SEND A CV" name = "button4" onclick = "sendcv()"/></li>
	 </ul>
	 </nav>
          </div>
  </div>
  <div class ="row">
   <div class="row3">
    <div class = "nine">
  <div class="section1">
	 <table style = "border-collapse:collapse;">
	 <tr>
	 <th>Keep In touch with Employers</th>
	 </tr>
	 </table>
      </div>
  </div>
  </div>
    </div>
  <div class ="row4">
  <div class ="one">
    <div class = "nav1">
     <nav>
	   <ul>
	   <li title = "Summer jobs"><a href ="">Summer Internships</a></li>
	    <li title = "Grad Jobs"><a href ="">Graduate Schemes</a></li>
		 <li title ="Placements"><a href ="">Work Placements</a></li>
		  <li title = "Part-time work"><a href ="">Part Time Jobs</a></li>
		   <li title = "Engage in voluntary work"><a href ="">Voluntary Jobs</a></li>
	   </ul>
	   </nav>
  </div>
  </div>
  </div>
  <div class ="row">
  <div class = "section2"> 
      <img src ="images/cvc.JPG" style=" margin-left:20em;height:14em;"/>
      <img src="images/cvs.JPG" style=" margin-left: 25em;"/>
  </div>
  </div>
  <div class ="row6">
    <div class = "nine">
	<div class = "sidebar2">
<table>
	 <tr>
	 <th>Browse By Faculty</th>
	 </tr>
	  <tr>
	   <td>Health and Social Care</td>
	   </tr>
	     <tr>
	 <td>Art and Social Science</td>
	  </tr>
	   <tr>
	   <td>Art Design and Architecture</td>
	  </tr>
	 <tr>
	 <td>Social Engineering and Computing</td>
	 </tr>
	 </table>
	  <table style="height:125px;">
	 <tr>
	 <th>Create Job Alerts</th>
	 </tr>
	 <tr>
	 <td><p style = "font-size:15px;color:white;font-family:book antiqua">Set up an alert for the work experience you are seeking for. Contact Us for moore details</p>
	 </td>
	 </tr>
	 </table>
	 <table style="height:125px;">
	 <tr>
	 <th>KU Talent Survey</th>
	 </tr>
	 <tr> 
	 <td><p style = "font-size:15px;color:white;font-family:book antiqua">Tell KU Talent what you think by taking part in our survey</p></td>
	 </tr>
	 </table>
	 </div>
  </div>
       <div class = "sidebar1">
	
	 </div>
      <div class ="row5">
    <div class = "three">
    <footer style ="color:white;">Kingston University  www.kingston.ac.uk   2017</footer>
  </div>
  </div>
      </div>
      </div>
  </body>
</html>
         </div>

