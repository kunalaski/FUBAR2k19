<?php
require_once 'core/init.php';
 ?>

<html>
<head>
<title>Template Selection</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/f%20small.png">

    <link rel="stylesheet" href="style/st.css">

<link rel="stylesheet" href="style/w3.css">


<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}
</script>
</head>


<body style="font-family: sans-serif" bgcolor="#eeffff" class="">





   <div class="w3-sidebar w3-bar-block w3-animate-left w3-hide-large  w3-light-grey w3-border-black w3-center" style="display:none;z-index:5" id="mySidebar">

<?php
  $user = new User();
  if($user->isLoggedIn()) {
  echo ' <a href="index.php" " style="float:right" class="w3-bar-item w3-button w3-large w3-margin w3-pale-blue w3-text-light-blue w3-border w3-border-light-blue  w3-hover-light-blue w3-hover-border-light-blue w3-hover-text-white w3-round-xxlarge" >'; echo escape($user->data()->username); echo '</a>';
  echo  '<a href="logout.php"  style="float:right" class="w3-bar-item w3-button w3-margin w3-pale-blue w3-text-light-blue w3-border w3-border-light-blue  w3-hover-light-blue w3-hover-border-light-blue w3-hover-text-white w3-round-xxlarge">Log-out</a>';
}
else {
  echo '<a href="index.php" style="float:right" class="w3-bar-item w3-button w3-xlarge w3-margin w3-pale-blue w3-text-light-blue w3-border w3-border-light-blue  w3-hover-light-blue w3-hover-border-light-blue w3-hover-text-white w3-round-xxlarge w3-center" >FUBAR</a>';




  echo '<a href="register.php" onclick="document.getElementById("register1").style.display="block"" style="float:right" class="w3-bar-item w3-button w3-large w3-margin w3-pale-blue w3-text-light-blue w3-border w3-border-light-blue  w3-hover-light-blue w3-hover-border-light-blue w3-hover-text-white w3-round-xxlarge">Register</a>';
   /*<div id="register1"  class="w3-modal" onclick="this.style.display='none'">
      <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
      <div align="center" style="height:100%" class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:">

       <iframe width="100%" height="100%" src="register.php">

     </iframe>
      </div>
    </div>*/




 echo '<a href="login.php" onclick="document.getElementById("login1").style.display="block"" style="float:right" class="w3-bar-item w3-button w3-large w3-margin w3-pale-blue w3-text-light-blue w3-border w3-border-light-blue  w3-hover-light-blue w3-hover-border-light-blue w3-hover-text-white w3-round-xxlarge">Log In</a>';
 /*<div id="login1"  class="w3-modal" onclick="this.style.display='none'">
    <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
    <div align="center" style="height:100%" class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:">

     <iframe width="100%" height="100%" src="login.php">
   </iframe>
    </div>
  </div>*/


}
?>


    </div>
   <div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>


    <div>
  <button class="w3-button w3-pale-blue w3-border w3-border-black w3-large w3-hide-large " style="position:fixed;" onclick="w3_open()">&#9776;</button>
    </div>











 <div id="myheader" class="w3-bar w3-hide-small w3-hide-medium w3-hover-white w3-container" >

<?php
  $user = new User();
  if($user->isLoggedIn()) {
  echo ' <a href="index.php" class="w3-bar-item w3-large w3-button w3-white w3-margin w3-border w3-bottombar w3-topbar w3-leftbar w3-rightbar w3-hover-text-light-blue   w3-hover-white w3-hover-border-light-blue w3-border-black w3-round-xxlarge" ><b>'; echo escape($user->data()->username); echo '</b></a>';
  echo  '<a href="logout.php"  style="float:right" class="w3-bar-item w3-button w3-margin w3-white w3-text-light-blue w3-border w3-border-light-blue  w3-hover-light-blue w3-hover-border-light-blue w3-hover-text-white w3-round-xxlarge">Log-out</a>';
}
else {
  echo '<a href="index.php" class="w3-bar-item w3-large w3-button w3-white w3-margin w3-border w3-bottombar w3-topbar w3-leftbar w3-rightbar w3-hover-text-light-blue   w3-hover-white w3-hover-border-light-blue w3-border-black w3-round-xxlarge" >FUBAR</a>';
 echo '<a href="login.php" onclick="document.getElementById("login1").style.display="block"" style="float:right" class="w3-bar-item w3-button w3-large w3-white w3-text-light-blue w3-margin  w3-border w3-border-light-blue  w3-hover-light-blue w3-hover-border-light-blue w3-hover-text-white w3-round-xxlarge">Log In</a>';
 /*<div id="login1"  class="w3-modal" onclick="this.style.display='none'">
    <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
    <div align="center" style="height:100%" class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:">

     <iframe width="100%" height="100%" src="login.php">
   </iframe>
    </div>
  </div>*/



echo '<a href="register.php" onclick="document.getElementById("register1").style.display="block"" style="float:right" class="w3-bar-item w3-button w3-large w3-white w3-text-light-blue w3-margin  w3-border w3-border-light-blue  w3-hover-light-blue w3-hover-border-light-blue w3-hover-text-white w3-round-xxlarge">Register</a>';
 /*<div id="register1"  class="w3-modal" onclick="this.style.display='none'">
    <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
    <div align="center" style="height:100%" class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:">

     <iframe width="100%" height="100%" src="register.php">

   </iframe>
    </div>
  </div>*/
}
?>

</div>

<br>
   <div id="margins" class="w3-margin w3-margin-top w3-center w3-justify">
<div class="w3-panel w3-round-xlarge w3-white w3-hover-white w3-padding-large w3-card w3-margin w3-button w3-border  w3-border- w3-hover-border-black" style="width: 350px; height:300px">
  <h2>Constructive</h2>
  <img src="images/constructive.JPG" style="width:320px; height:150px" onclick="document.getElementById('id01').style.display='block'" class="w3-image w3-border w3-round-large w3-border- w3-hover-border-black" >

  <div id="id01"  class="w3-modal" onclick="this.style.display='none'">
    <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
    <div align="center" style="height:100%" class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

     <iframe width="100%" height="100%" src="Template/constructive/original.html">

	 </iframe>

    </div>
  </div>
    <a style="text-decoration: none"  href="Template/constructive/edit.php"><h3 class="w3-text-lightblue w3-display- w3-round-xlarge w3-white w3-margin w3-border w3-hover-text w3-hover-colr1 w3-hover-border-black w3-border-blue" style="align-content: center">Use</h3></a>
</div>

<div class="w3-panel w3-round-xlarge w3-white w3-hover-white w3-padding-large w3-card w3-margin w3-button w3-border  w3-border- w3-hover-border-black " style="width: 350px; height:300px">
  <h2>Scenic</h2>
  <img src="images/scenic.JPG" style="width:320px; height:150px" onclick="document.getElementById('id02').style.display='block'" class="w3-image w3-border w3-round-large w3-border- w3-hover-border-black" >

  <div id="id02"  class="w3-modal" onclick="this.style.display='none'">
    <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
    <div align="center" style="height:100%" class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

     <iframe width="100%" height="100%" src="Template/scenic/original.html">

	 </iframe>

    </div>
  </div>
    <a style="text-decoration: none" href="Template/scenic/edit.php"><h3 class="w3-text-lightblue w3-display- w3-round-xlarge w3-white w3-margin w3-border w3-hover-text w3-hover-colr1 w3-hover-border-black w3-border-blue" style="align-content: center">Use</h3></a>
</div>
       <div class="w3-panel w3-round-xlarge w3-white w3-hover-white w3-padding-large w3-card w3-margin w3-button w3-border  w3-border- w3-hover-border-black " style="width: 350px; height:300px">
  <h2>Dark Portfolio</h2>
  <img src="images/black%20portfolio.JPG" style="width:320px; height:150px" onclick="document.getElementById('id03').style.display='block'" class="w3-image w3-border w3-round-large w3-border- w3-hover-border-black" >

  <div id="id03"  class="w3-modal" onclick="this.style.display='none'">
    <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
    <div align="center" style="height:100%" class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

     <iframe width="100%" height="100%" src="Template/dark/original.html">

	 </iframe>

    </div>
  </div>
    <a style="text-decoration: none" href="Template/dark/edit.php"><h3 class="w3-text-lightblue w3-display- w3-round-xlarge w3-white w3-margin w3-border w3-hover-text w3-hover-colr1 w3-hover-border-black w3-border-blue" style="align-content: center">Use</h3></a>
</div>
       <div class="w3-panel w3-round-xlarge w3-white w3-hover-white w3-padding-large w3-card w3-margin w3-button w3-border  w3-border- w3-hover-border-black " style="width: 350px; height:300px">
  <h2>CV</h2>
  <img src="images/cv.JPG" style="width:320px; height:150px" onclick="document.getElementById('id04').style.display='block'" class="w3-image w3-border w3-round-large w3-border- w3-hover-border-black" >

  <div id="id04"  class="w3-modal" onclick="this.style.display='none'">
    <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
    <div align="center" style="height:100%" class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

     <iframe width="100%" height="100%" src="Template/cv/original.html">

	 </iframe>

    </div>
  </div>
    <a style="text-decoration: none" href="Template/cv/edit.php"><h3 class="w3-text-lightblue w3-display- w3-round-xlarge w3-white w3-margin w3-border w3-hover-text w3-hover-colr1 w3-hover-border-black w3-border-blue" style="align-content: center">Use</h3></a>
</div>
       <div class="w3-panel w3-round-xlarge w3-white w3-hover-white w3-padding-large w3-card w3-margin w3-button w3-border  w3-border- w3-hover-border-black " style="width: 350px; height:300px">
  <h2>Architect</h2>
  <img src="images/architect.jpg" style="width:320px; height:150px" onclick="document.getElementById('id05').style.display='block'" class="w3-image w3-border w3-round-large w3-border- w3-hover-border-black" >

  <div id="id05"  class="w3-modal" onclick="this.style.display='none'">
    <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
    <div align="center" style="height:100%" class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

     <iframe width="100%" height="100%" src="Template/architect/original.html">

	 </iframe>

    </div>
  </div>
    <a style="text-decoration: none" href="Template/architect/edit.php"><h3 class="w3-text-lightblue w3-display- w3-round-xlarge w3-white w3-margin w3-border w3-hover-text w3-hover-colr1 w3-hover-border-black w3-border-blue" style="align-content: center">Use</h3></a>
</div>
       <div class="w3-panel w3-round-xlarge w3-white w3-hover-white w3-padding-large w3-card w3-margin w3-button w3-border  w3-border- w3-hover-border-black " style="width: 350px; height:300px">
  <h2>Cafe</h2>
  <img src="images/cafe.jpg" style="width:320px; height:150px" onclick="document.getElementById('id06').style.display='block'" class="w3-image w3-border w3-round-large w3-border- w3-hover-border-black" >

  <div id="id06"  class="w3-modal" onclick="this.style.display='none'">
    <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
    <div align="center" style="height:100%" class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

     <iframe width="100%" height="100%" src="Template/cafe/original.html">

	 </iframe>

    </div>
  </div>
    <a style="text-decoration: none" href="Template/cafe/edit.php"><h3 class="w3-text-lightblue w3-display- w3-round-xlarge w3-white w3-margin w3-border w3-hover-text w3-hover-colr1 w3-hover-border-black w3-border-blue" style="align-content: center">Use</h3></a>
</div>

    </div>
</body>
</html>
