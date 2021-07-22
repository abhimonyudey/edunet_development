<!DOCTYPE html>
<html lang="en">
   
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width =device-width, initial-scale=1" >
<link rel ="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https:maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


 </head>  
 <style>
         
 
    h2{
		text-align: -webkit-center;
    background-color: #0882ea;
    margin-top: 0;
    padding: 20px;
    color: white;
    }
    #cvb{
		color:black;
        text-align: center;
        margin:20px;
        padding:20px;
    }
    
    .center {
  margin-left: auto;
  margin-right: auto;
}
    table{
        text-align: right;
        border-collapse: separate;
    }
    .label{
        text-align: right;
        margin-bottom: auto;
    }
    .input{
        text-align: left;
    }
    #ct{
        text-align: center;
		color:white;
    }
    body{
       background-image:  linear-gradient(90deg, #020024 0%, #090979 35%, #00d4ff 100%);
       color:white;
    }
    h2{
        color:lightcyan;
        font-family: 'Pacifico', cursive;
    }body {
        background-image:  linear-gradient(90deg, #020024 0%, #090979 35%, #00d4ff 100%);
    
	color: black;
	font-size:20px;
	font: 100%, Arial, Sans Serif;
    font-family: 'Arial', cursive;
	height: 100vh;
	margin: 0;
	padding: 0;
	overflow-x: hidden;
}

#background-wrap {
    bottom: 0;
	left: 0;
	position: fixed;
	right: 0;
	top: 0;
	z-index: -1;
}

/* KEYFRAMES */

@-webkit-keyframes animateBubble {
    0% {
        margin-top: 1000px;
    }
    100% {
        margin-top: -100%;
    }
}

@-moz-keyframes animateBubble {
    0% {
        margin-top: 1000px;
    }
    100% {
        margin-top: -100%;
    }
}

@keyframes animateBubble {
    0% {
        margin-top: 1000px;
    }
    100% {
        margin-top: -100%;
    }
}

@-webkit-keyframes sideWays { 
    0% { 
        margin-left:0px;
    }
    100% { 
        margin-left:50px;
    }
}

@-moz-keyframes sideWays { 
    0% { 
        margin-left:0px;
    }
    100% { 
        margin-left:50px;
    }
}

@keyframes sideWays { 
    0% { 
        margin-left:0px;
    }
    100% { 
        margin-left:50px;
    }
}

/* ANIMATIONS */

.x1 {
    -webkit-animation: animateBubble 25s linear infinite, sideWays 2s ease-in-out infinite alternate;
	-moz-animation: animateBubble 25s linear infinite, sideWays 2s ease-in-out infinite alternate;
	animation: animateBubble 25s linear infinite, sideWays 2s ease-in-out infinite alternate;
	
	left: -5%;
	top: 5%;
	
	-webkit-transform: scale(0.6);
	-moz-transform: scale(0.6);
	transform: scale(0.6);
}

.x2 {
    -webkit-animation: animateBubble 20s linear infinite, sideWays 4s ease-in-out infinite alternate;
	-moz-animation: animateBubble 20s linear infinite, sideWays 4s ease-in-out infinite alternate;
	animation: animateBubble 20s linear infinite, sideWays 4s ease-in-out infinite alternate;
	
	left: 5%;
	top: 80%;
	
	-webkit-transform: scale(0.4);
	-moz-transform: scale(0.4);
	transform: scale(0.4);
}

.x3 {
    -webkit-animation: animateBubble 28s linear infinite, sideWays 2s ease-in-out infinite alternate;
	-moz-animation: animateBubble 28s linear infinite, sideWays 2s ease-in-out infinite alternate;
	animation: animateBubble 28s linear infinite, sideWays 2s ease-in-out infinite alternate;
	
	left: 10%;
	top: 40%;
	
	-webkit-transform: scale(0.7);
	-moz-transform: scale(0.7);
	transform: scale(0.7);
}

.x4 {
    -webkit-animation: animateBubble 22s linear infinite, sideWays 3s ease-in-out infinite alternate;
	-moz-animation: animateBubble 22s linear infinite, sideWays 3s ease-in-out infinite alternate;
	animation: animateBubble 22s linear infinite, sideWays 3s ease-in-out infinite alternate;
	
	left: 20%;
	top: 0;
	
	-webkit-transform: scale(0.3);
	-moz-transform: scale(0.3);
	transform: scale(0.3);
}

.x5 {
    -webkit-animation: animateBubble 29s linear infinite, sideWays 4s ease-in-out infinite alternate;
	-moz-animation: animateBubble 29s linear infinite, sideWays 4s ease-in-out infinite alternate;
	animation: animateBubble 29s linear infinite, sideWays 4s ease-in-out infinite alternate;
	
	left: 30%;
	top: 50%;
	
	-webkit-transform: scale(0.5);
	-moz-transform: scale(0.5);
	transform: scale(0.5);
}

.x6 {
    -webkit-animation: animateBubble 21s linear infinite, sideWays 2s ease-in-out infinite alternate;
	-moz-animation: animateBubble 21s linear infinite, sideWays 2s ease-in-out infinite alternate;
	animation: animateBubble 21s linear infinite, sideWays 2s ease-in-out infinite alternate;
	
	left: 50%;
	top: 0;
	
	-webkit-transform: scale(0.8);
	-moz-transform: scale(0.8);
	transform: scale(0.8);
}

.x7 {
    -webkit-animation: animateBubble 20s linear infinite, sideWays 2s ease-in-out infinite alternate;
	-moz-animation: animateBubble 20s linear infinite, sideWays 2s ease-in-out infinite alternate;
	animation: animateBubble 20s linear infinite, sideWays 2s ease-in-out infinite alternate;
	
	left: 65%;
	top: 70%;
	
	-webkit-transform: scale(0.4);
	-moz-transform: scale(0.4);
	transform: scale(0.4);
}

.x8 {
    -webkit-animation: animateBubble 22s linear infinite, sideWays 3s ease-in-out infinite alternate;
	-moz-animation: animateBubble 22s linear infinite, sideWays 3s ease-in-out infinite alternate;
	animation: animateBubble 22s linear infinite, sideWays 3s ease-in-out infinite alternate;
	
	left: 80%;
	top: 10%;
	
	-webkit-transform: scale(0.3);
	-moz-transform: scale(0.3);
	transform: scale(0.3);
}

.x9 {
    -webkit-animation: animateBubble 29s linear infinite, sideWays 4s ease-in-out infinite alternate;
	-moz-animation: animateBubble 29s linear infinite, sideWays 4s ease-in-out infinite alternate;
	animation: animateBubble 29s linear infinite, sideWays 4s ease-in-out infinite alternate;
	
	left: 90%;
	top: 50%;
	
	-webkit-transform: scale(0.6);
	-moz-transform: scale(0.6);
	transform: scale(0.6);
}

.x10 {
    -webkit-animation: animateBubble 26s linear infinite, sideWays 2s ease-in-out infinite alternate;
	-moz-animation: animateBubble 26s linear infinite, sideWays 2s ease-in-out infinite alternate;
	animation: animateBubble 26s linear infinite, sideWays 2s ease-in-out infinite alternate;
	
	left: 80%;
	top: 80%;
	
	-webkit-transform: scale(0.3);
	-moz-transform: scale(0.3);
	transform: scale(0.3);
}

/* OBJECTS */

.bubble {
    -webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%;
	
    -webkit-box-shadow: 0 20px 30px rgba(0, 0, 0, 0.2), inset 0px 10px 30px 5px rgba(255, 255, 255, 1);
	-moz-box-shadow: 0 20px 30px rgba(0, 0, 0, 0.2), inset 0px 10px 30px 5px rgba(255, 255, 255, 1);
	box-shadow: 0 20px 30px rgba(0, 0, 0, 0.2), inset 0px 10px 30px 5px rgba(255, 255, 255, 1);
	
    height: 200px;
	position: absolute;
	width: 200px;
}

.bubble:after {
    background: -moz-radial-gradient(center, ellipse cover,  rgba(255,255,255,0.5) 0%, rgba(255,255,255,0) 70%); /* FF3.6+ */
    background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%,rgba(255,255,255,0.5)), color-stop(70%,rgba(255,255,255,0))); /* Chrome,Safari4+ */
    background: -webkit-radial-gradient(center, ellipse cover,  rgba(255,255,255,0.5) 0%,rgba(255,255,255,0) 70%); /* Chrome10+,Safari5.1+ */
    background: -o-radial-gradient(center, ellipse cover,  rgba(255,255,255,0.5) 0%,rgba(255,255,255,0) 70%); /* Opera 12+ */
    background: -ms-radial-gradient(center, ellipse cover,  rgba(255,255,255,0.5) 0%,rgba(255,255,255,0) 70%); /* IE10+ */
    background: radial-gradient(ellipse at center,  rgba(255,255,255,0.5) 0%,rgba(255,255,255,0) 70%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#80ffffff', endColorstr='#00ffffff',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */

	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%;
	
    -webkit-box-shadow: inset 0 20px 30px rgba(255, 255, 255, 0.3);
	-moz-box-shadow: inset 0 20px 30px rgba(255, 255, 255, 0.3);
	box-shadow: inset 0 20px 30px rgba(255, 255, 255, 0.3);
	
	content: "";
    height: 180px;
	left: 10px;
	position: absolute;
	width: 180px;
}
    
    </style>
   <body>
    <div id="background-wrap">
        <div class="bubble x1"></div>
        <div class="bubble x2"></div>
        <div class="bubble x3"></div>
        <div class="bubble x4"></div>
        <div class="bubble x5"></div>
        <div class="bubble x6"></div>
        <div class="bubble x7"></div>
        <div class="bubble x8"></div>
        <div class="bubble x9"></div>
        <div class="bubble x10"></div>
    </div><p>
       <form method="POST" action="http://localhost/edudev/edunet/index.php/form1/submit" enctype="multipart/form-data">

<h2 > Please complete your information.</h2><br>
<div id="ram" for="fname">
<table class="center">
    <tr>
        <td class="label" class="md" ><label for="fname" >Full Name:</label></td>
        <td class="input"> <input type="text" name="fname"placeholder="Enter name" maxlength="200"
            onkeypress="return (event.charCode > 64 && event.charCode < 91) 
            || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)"
             required>
           </td>
    </tr>
    
    <tr>
        <td><label for="email" class="label"> Email id:</label></td>
        <td class="input"><input type="email" id="txtNewPassword" placeholder="Enter email" name="email" required class="input"><br>
        </td>
    </tr>
   <tr>
       <td><label for="email" class="label">Confirm  Email id:</label></td>
<td class="input"><input type="email" id="txtConfirmPassword" placeholder="Confirm email" name="confpass" required>
	<div class="registrationFormAlert" style="color:rgb(255, 5, 5);" id="CheckPasswordMatch"></div>
</td></tr>
<tr>
<td><label for="mob" class="label">Mobile Number:</label></td>
<td class="input">        
    <input type="text" name="mobile" placeholder="**********" maxlength="10" pattern="\d{10}" title="Please enter exactly 10 digits" required /></td>
</tr>
<tr>
    <td><label for="adhar" class="label">Aadhar Number:</label></td>
    <td class="input"><input type="text" name="aadhar"  placeholder="XXXX XXXX XXXX" maxlength="12" pattern="\d{12}" title="Please enter exactly 12 digits" required /></td>
</tr>
<tr>
<td><label for="college" class="label"> College Name:</label></td>
<td class="input"><select id="college" name="college" required>
  <option value=""></option>
    <option value="Nsti Noida">Nsti Noida</option>
    <option value="Nsti Vadodara">Nsti Vadodara</option>
    <option value="Nsti Calicut">Nsti Calicut</option>
    <option value="Nsti Dehradun">Nsti Dehradun</option>
    <option value="Nsti Panipat">Nsti Panipat</option>
    <option value="Nsti Mumbai">Nsti Mumbai</option>
    <option value="Nsti Chennai">Nsti Chennai</option>
    <option value="Nsti Hyderabad">Nsti Hyderabad</option>
    <option value="Nsti Dehradun">Nsti Dehradun</option>
    <option value="Nsti Kolkata">Nsti Kolkata</option>
  </select>
 
 </td>
</tr>
<tr>
    <td><label for="college" class="label">  Department:</label></td>
    <td class="input"><input list="browsers" name="dept" id="slct" required>
        <datalist id="browsers">
          <option value="Marketing Department">
          <option value="Operations Department">
          <option value="Finance Department">
          <option value="Sales Department ">
          <option value="Human Resource Department">
           <option value="Purchase Department">
               <option value="IT Department">
               <option value="Transportation Department">
               <option value="Export Department">
               <option value="Other">
       
        </datalist>  
      </td>
</tr>
<tr  id="txtarea">
    <td class="input"> Specify Department:</div> </td>
    <td class="input"><textarea maxlength="200" ></textarea></td>
</tr>
<tr>
    <td><label for="college" class="label">  Semester:</label></td>
    <td class="input"> <select id="college" name="semester" required>
        <option value=""></option>
        <option value="Semester 1st">Semester 1st</option>
        <option value="Semester 2nd">Semester 2nd</option>
        <option value="Semester 3rd">Semester 3rd</option>
        <option value="Semester 4th">Semester 4th</option>
        <option value="Semester 5th">Semester 5th</option>
        <option value="Semester 6th">Semester 6th</option>
        <option value="Semester 7th">Semester 7th</option>
        <option value="Semester 8th">Semester 8th</option>
     
      </select>
     </div>  </td>
</tr>

<tr>
    <td><label for="avatar" class="label">Choose a profile picture:</td></label>

<td class="input">
       <input type="file" name="image1"  id="fileChooser" placeholder="Choose file" style="height:28px; width:175px;" onchange="return ValidateFileUpload()" required>
    </td></tr>
	
</table>

    <div class="form-check" id="ct">
<div class="col-sm-offset-1" col-sm-8>
<div class="checkbox">
<label> <input type="checkbox" class="form-check-input" id="exampleCheck1" required> All the above information is correct to <br>the best of my knowledge and I give my consent for it to be<br> used for the purpose of the program.</label>

</div>
	
	
	
	
<div id="cvb" >
   <input type="reset" value="Reset">
    <input type="submit" value="Register"></div></p>
	</div>
	</div>
	
</form>    
<script>
    function checkPasswordMatch() {
        var password = $("#txtNewPassword").val();
        var confirmPassword = $("#txtConfirmPassword").val();
        if (password != confirmPassword)
            $("#CheckPasswordMatch").html("email does not match!");
        else
            $("#CheckPasswordMatch").html("same as previous.");
    }
    $(document).ready(function () {
       $("#txtConfirmPassword").keyup(checkPasswordMatch);
    });
    $("#txtarea").hide();

$( "#slct" ).change(function() {
   var val = $("#slct").val();
if(val=="Other"){
    $("#txtarea").show();
} else {
    $("#txtarea").hide();
}
});
$(document).ready(function(){

var _URL = window.URL || window.webkitURL;

$('#file').change(function () {
 var file = $(this)[0].files[0];

 img = new Image();
 var imgwidth = 0;
 var imgheight = 0;
 var maxwidth = 640;
 var maxheight = 640;

 img.src = _URL.createObjectURL(file);
 img.onload = function() {
  imgwidth = this.width;
  imgheight = this.height;

  $("#width").text(imgwidth);
  $("#height").text(imgheight);
  if(imgwidth <= maxwidth && imgheight <= maxheight){

   var formData = new FormData();
   formData.append('fileToUpload', $('#file')[0].files[0]);

   $.ajax({
     url: 'upload_image.php',
     type: 'POST',
     data: formData,
     processData: false,
     contentType: false,
     dataType: 'json',
     success: function (response) {
       if(response.status == 1){
         $("#prev_img").attr("src","upload/"+response.returnText);
         $("#prev_img").show();
         $("#response").text("Upload successfully");
       }else{
         $("#response").text(response.returnText);
       } 
     }
  });
 }else{
  $("#response").text("Image size must be "+maxwidth+"X"+maxheight);
 }
};
img.onerror = function() {

 $("#response").text("not a valid file: " + file.type);
}

});
});

    </script>
</body>
</html>