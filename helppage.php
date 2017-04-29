
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>KU Talent CV Website</title>
     <link href="maincssstyle.css" rel="stylesheet">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

	  <script type = "text/javascript">
	function help(){ 
	 var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
  }
}

function help1(){ 
	 var modal = document.getElementById("Modal");
var btn = document.getElementById("Btn");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
    modal.style.display = "block";
}
span.onclick = function() {
    modal.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
  }
}

function help2(){ 
	 var modal = document.getElementById("Modals");
var btn = document.getElementById("Btns");
var span = document.getElementsByClassName("close")[1];
btn.onclick = function() {
    modal.style.display = "block";
}
span.onclick = function() {
    modal.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
 }
}

function help3(){ 
var modal = document.getElementById("Modales");
var btn = document.getElementById("Btnes");
var span = document.getElementsByClassName("close")[1];
btn.onclick = function() {
    modal.style.display = "block";
}
span.onclick = function() {
    modal.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
 }
}
      
	  </script>
	<script>
   $(document).ready(function(){
    $("#button1").click(function(){
        $("#info1").fadeToggle();
         $("#info2, #info3, #info4, #info5").hide();
    });
});
        $(document).ready(function(){
    $("#button2").click(function(){
        $("#info2").fadeToggle();
        $("#info1,#info3, #info4, #info5").hide();
    });
});
          $(document).ready(function(){
    $("#button3").click(function(){
        $("#info3").fadeToggle();
        $("#info1,#info2, #info4, #info5").hide();
    });
});
          $(document).ready(function(){
    $("#button4").click(function(){
        $("#info4").fadeToggle();
        $("#info1,#info2, #info3, #info5").hide();
    });
});   
    $(document).ready(function(){
    $("#button5").click(function(){
        $("#info5").fadeToggle();
        $("#info1,#info2, #info3, #info4").hide();
    });
});
        
</script>
    </head>
	 <body>
	  <div class ="help_header"> 
	   <img src = "images/ku logo.jpg" alt = "logo"/>
        <h4> KU Talent Help Centre</h4>
	   </div>
	   <div id="help_nav">
	   <ul>
	   <li><a href ="home.php">Home</a></li>
	   <li><a href ="about.php">Using KU Talent</a>
	    <ul>
		   <li><a class= "review" href = "files/employer%20loginDB.pdf">Reviewing a CV</a></li>
		   <li><a href = "#">Submitting a CV</a></li>
	     </ul>
	   </li>
       <li><a href = "#">Job Fairs Events</a>
	   <ul>
	   <li><a href = "#">Upcoming University Fairs</a></li>
	   </ul>
	   </li>
	   <li><a href = "">Terms and Conditions</a>
	    <ul>
	   <li><a href = "#">Our Policies</a></li>
	   </ul>
	   </li>
	   <li><a href = "contact.php">Contact Us</a></li>
           <li><a href="#"><button>Helpline</button></a>
               <ul>
                   <li onclick="window.open('tel:+07946391982');">Tel: 0208 748 2545</li>
               </ul>
           </li>
	 </ul>
	</div>
         <div class ="containers">
         <div class="row">
             <div class="row1">
         <br>
         Questions Frequently Asked
	<div class ="container1">
	 <table>
	  <tr>
          <td><button id="button1" style="border-radius:5px;" >How do I Upload a CV?</button></td>
	    </tr>
	     <tr>
	      <td><button id="button2" style="border-radius:5px;">How long should a CV be?</button></td>
	       </tr>
	      <tr>
              <td><button id="button3" style="border-radius:5px;">Is a cover letter required when uploading a CV for work experience? </button></td>
	  </tr>
	<tr>
  <td><button id="button4" style="border-radius:5px;"> What format is a uploaded CV be in ?</button></td>
</tr>
<tr>
<td><button id="button5" style="border-radius:5px;">How long would it take for feedback?</button></td>
   </tr>
        </table>
             </div>
                <div class="helpinfos">
                   <p id="info1" style="display:none;">To upload a CV, Please select the SEND CV option.
                     Enter Username and password to access account.Select option UPLOAD CV. Upon selection choose  a category and upload CV.</p>
             <p id ="info2" style="display:none;">A professional structured CV should be no longer than 2 pages of  A4.If not it can become very easy for employers to lose interest whiles reviewing your CV.</p>
        <p id ="info3" style="display:none;">A Cover letter is not required when uploading a CV to KU Talent.</p>
        <p id ="info4" style="display:none;">The required formats an upload file should be are txt, doc, and docx</p>
           <p id ="info5" style="display:none;">Our team aim to provide productive and quick feedback regarding every students CV. Feedback to students should not take longer than 2 days upon review. If no contact has been made in regards to this, contact us promptly.</p>
              </div>
                 </div>
                  <div class="row2">
	         <div class = "container2">
	    <h4>More Help Information</h4>
 <div id = "firstinfo">
   <h3>New Students work opportunities</h3>
      <h6>KU Talent is a body intoduced to organise and promote experience in working in the industry.Facilitating students across all faculties with
        workshops and careeer events to gain more insights into industry working environments</h6>
	      </div>
	          <div id = "secondinfo">
	   <h3>CV Submissions</h3>
   <h6>KU Talent expects review and ensure all CVs meet a professional standard. One on one sessions are availble with our staff to access and
            provide adequate advice into gaining work experience</h6>
</div>
	<div id = "thirdinfo" style = "height:150px;">
	   <h3>Find out what Employers Say</h3>
	    <h6>Employers rate work experience to be the popular qualification amongst students</h6>
	    </div>
	       </div>
             </div>
             <div class="row3">
	     <div class = "container3">
	 <h4>Popular topics</h4>
 <form action="help.php" method="post">
<table>
	  <tr>
	    <td id="myBtn"><input type ="button" value= "How to network with Employers? " onclick="help()"/></td>
	      <td id="Btn"><input type ="button" value= "How to improve or exhale in job interviews? " onclick = "help1()"/></td>
	        <td id="Btns"><input type ="button" value= "Is it worth engage in voluntary work for experience? " onclick = "help2()"/></td>
	          <td id="Btnes"><input type ="button" value= "Is it worth doing a work placement? " onclick = "help3()"/></td>
	       </tr>
		</table>
    </form>
	</div>         
 </div>
</div>
    <div id="myModal" class="modal">
      <div class="modal-content">
         <span class="close">&times;</span>
          <p>With the use of career social platforms like LinkedIn. Students can keep network with Employers through career fairs and Seminars.</p>
       </div>
    </div>
<div id="Modal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>When preparing for an Interview, ensure you read and understand the job description and the Company. Be sure to:<br>1. Practice interview questions.<br>2. Research on skills required.<br>3. Demonstrate passion and Ethusiasm.<br>4. Ensure answers stay true to skills and experience on your resume.</p>
      </div>
        </div>
          <div id="Modals" class="modal">
  <div class="modal-content">
<span class="close">&times;</span>
<p>Employers are forever interested in candidates with industry experience. Voluntary work is a great opportunity to obtain some experience and enhance knowledge into the industry. students have a great chance to attract employers if they have gained some experience eeven if its through voluntary scheme.</p>
  </div>
    </div>
              <div id="Modales" class="modal">
  <div class="modal-content">
<span class="close">&times;</span>
<p>Embarking on a work placement during your time studying at university allows students to gain real hands on experience in the industry. Having the chance to interact with real clients, participate in real projects and work alongside skilled teams and other vendors enhances your high learning.</p>
  </div>
    </div>
        </div>
         <footer style="text-align:center;">Kingston University  2017</footer>
	   </body>
	 </html>