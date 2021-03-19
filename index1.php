<HTML>
<head>
<title>FUBAR</title>
    <link rel="icon" type="image/png" href="images/f%20small.jpg">
<meta name="viewport" content="width=device-width, initial-scale=1">

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
<body background="images/bg2.jpg" style="height: 100%; background-position: center;
  background-repeat: no-repeat;
  background-size: cover;" >


  <div class="w3-sidebar w3-bar-block w3-animate-left w3-hide-large w3-light-grey w3-center" style="display:none;z-index:5" id="mySidebar">


</div>
  <!-- Page Content -->
  <div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>

  <div>
<button class="w3-button w3-light-grey w3-opacity w3-hover-opacity-off w3-border w3-border-black w3-large w3-hide-large " style="position:fixed;" onclick="w3_open()">&#9776;</button>
</div>




<div class="w3-bar w3-hide-small w3-hide-medium w3-hover-white w3-container " style="position:inherit" >


<a href="index.php" class="w3-bar-item w3-large w3-button w3-white w3-margin w3-border w3-bottombar w3-topbar w3-leftbar w3-rightbar w3-hover-text-light-blue   w3-hover-white w3-hover-border-light-blue w3-border-black w3-round-xxlarge" ><b>xyz</b></a>

			<a href="logout.php"  style="float:right" class="w3-bar-item w3-button w3-large w3-white w3-margin w3-border w3-border-black w3-hover-white w3-hover-border-light-blue w3-hover-text-light-blue w3-round-xxlarge">Log-out</a>



</div>
<div class="w3-display-middle w3-large">

<a href="templateselection.php" class=" w3-xxlarge w3-btn w3-white w3-opacity w3-hover-opacity-off w3-margin w3-border   w3-hover- w3-hover-border-black  w3-border-black w3-round-xlarge" ><b>Get Started</b></a>
</div>
</body>
</html>
