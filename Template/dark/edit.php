<!DOCTYPE html>
<!-- saved from url=(0070)# -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>dark portfolio Template</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href=".../../style/w3.css">
<link rel="stylesheet" href="../../style/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.header{
   left: 0;
   top: 0;
   width: 100%;
   text-align: center;
}
.footer{
   left: 0;
   bottom: 0;
   width: 100%;
   text-align: center;
}


.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
	<link rel="stylesheet" href="../../style/w3.css">
<style type="text/css">
:root a[rel="nofollow"],
:root .tooltip + div[style="height:90px;"],
:root #mainLeaderboard,
:root .bottomad
{ display: none !important; }</style>




        <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="icon" type="image/png" href="../images/f%20small.png">
          <link rel="stylesheet" href="../style/w3.css">
          <link rel="stylesheet" href="../style/st.css">
          <link href="../style/font.css" rel="stylesheet">
          </head>
      <body class="w3-black" onload="document.getElementById('apf1').style.display='block'">
      <form class="" action="dark_portfolio.inc.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div id="apf1"  class="w3-modal"  >
         <div onclick="apf1.style.display='none'" class="">
        <!--  <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span> -->
          <span class="w3-button w3-pale-green w3-hover-pale-green w3-hover-border-pale-green w3-border w3-border-green w3-xlarge w3-display-middle w3-animate-opacity">OK</span>
        </div>

          <div align="" style="height:auto" class="w3-modal-content w3-card-4 w3-animate-top" >

           <div style="width: auto; height: auto" class="w3-dark-grey" >
              <div class="w3-container">
                  <br>
                <label class="w3-padding"><b>Website Title</b></label>
                <input class="w3-input w3-border w3-margin-left" style="width: 50%; " type="text" placeholder="Enter Title" name="title" required>

              <div class="w3-dropdown-hover w3-margin">
                  <!--<button class="w3-button w3-light-blue">Choose Font</button>
                  <div class="w3-dropdown-content w3-bar-block w3-border w3-large">-->
                  <select class="w3-select w3-border" name="font" value="font">


                      <option value="" disabled selected>
                      <a href="#"  style="" class="w3-button" >Choose Font</a></option>
                      <option value="Rubix">
                      <a href="#"  style="font-family: Rubik, sans-serif;" class="w3-button  ">Rubik</a></option>


                    <option value="Abel">
                        <a href="#" style="font-family:'Abel', sans-serif;" class="">Abel</a></option>

                    <option value="Open Sans">
                      <a href="#" style="font-family: 'Open Sans', sans-serif;" class="w3-button">Open Sans </a></option>

                    <option value="Roboto">
                      <a href="#" style="font-family: 'Roboto', sans-serif;" class="w3-button">Roboto</a></option>

                  </select>
                  </div>
          </div>
      				<!--	<button class="w3-button w3-block w3-light-blue w3-section w3-padding" type="submit">OK</button>-->


              </div>
          </div>



          </div>








<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center w3-black">
  <!-- Avatar image in top left corner -->

 <img id="uploadPreview" src="" width="100%" style="display:none" />
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>ABOUT</p>
  </a>
  <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>PHOTOS</p>
  </a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>CONTACT</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
    <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">PHOTOS</a>
    <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo"><input name="name1" placeholder="Your Name" size="10"></input></h1>
    <p><input name="prof1" placeholder="Profession" size="25"></input></p>
    <p><input type="file" id="file1" name="file1" size="30" onchange="doTest()"></p>
           <img id="uploadPreview1" src="" width="100%" style="display:none" />

  </header>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
    <h2 class="w3-text-light-grey"><input name="name2" placeholder="Your Name" size="10"></input></h2>
    <hr style="width:200px" class="w3-opacity">
    <p class=""><textarea name="detail1" placeholder="Details" rows="5" cols="100" ></textarea>
    </p>
    <h3 class="w3-padding-16 w3-text-light-grey">My Skills</h3>
    <p class="w3-wide w3-text-white"><input name="skill1" placeholder="Skill 1" size="15"></input></p>

    <p class="w3-wide w3-text-white"><input name="skill2" placeholder="Skill 2" size="15"></input></p>

    <p class="w3-wide w3-text-white"><input name="skill3" placeholder="Skill 3" size="15"></input></p>
   <br>

   <!-- <div class="w3-row w3-center w3-padding-16 w3-section w3-light-grey">
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">11+</span><br>
        Partners
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">55+</span><br>
        Projects Done
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">89+</span><br>
        Happy Clients
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">150+</span><br>
        Meetings
      </div>
    </div> -->

    <button class="w3-button w3-light-grey w3-padding-large w3-section">
      <i class="fa fa-download"></i> <a href="dark portfolio_files/resume.pdf"> Download Resume </a>
    </button>

    <!-- Grid for pricing tables
    <h3 class="w3-padding-16 w3-text-light-grey">My Price</h3>
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half w3-margin-bottom">
        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-dark-grey w3-xlarge w3-padding-32">Basic</li>
          <li class="w3-padding-16">Web Design</li>
          <li class="w3-padding-16">Photography</li>
          <li class="w3-padding-16">5GB Storage</li>
          <li class="w3-padding-16">Mail Support</li>
          <li class="w3-padding-16">
            <h2>$ 10</h2>
            <span class="w3-opacity">per month</span>
          </li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-white w3-padding-large w3-hover-black">Sign Up</button>
          </li>
        </ul>
      </div>

      <div class="w3-half">
        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-dark-grey w3-xlarge w3-padding-32">Pro</li>
          <li class="w3-padding-16">Web Design</li>
          <li class="w3-padding-16">Photography</li>
          <li class="w3-padding-16">50GB Storage</li>
          <li class="w3-padding-16">Endless Support</li>
          <li class="w3-padding-16">
            <h2>$ 25</h2>
            <span class="w3-opacity">per month</span>
          </li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-white w3-padding-large w3-hover-black">Sign Up</button>
          </li>
        </ul>
      </div>

    </div>-->

    <!-- Testimonials -->
    <h3 class="w3-padding-24 w3-text-light-grey">My Reputation</h3>
    <img src="dark portfolio_files/person1.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:80px">
    <p><span class="w3-large w3-margin-right"><input name="per1" placeholder="Person 1" size="10"></input></span> <input name="post1" placeholder="Post" size="15"></input></p>
    <br><br>

    <img src="dark portfolio_files/person1.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:80px">
    <p><span class="w3-large w3-margin-right"><input name="per2" placeholder="Person 2" size="10"></input></span> <input name="post2" placeholder="Post" size="15"></input></p>
     <!-- End About Section -->
  </div>

  <!-- Portfolio Section -->
  <div class="w3-padding-64 w3-content" id="photos">
    <h2 class="w3-text-light-grey">My Photos</h2>
    <hr style="width:200px" class="w3-opacity">

    <!-- Grid for photos -->
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half">
         <p><input type="file" id="file2" name="file2" size="30" onchange="doTest()"></p>
           <img id="uploadPreview" src="" width="100%" style="display:none" />
            <p><input type="file" id="file3" name="file3" size="30" onchange="doTest()"></p>
           <img id="uploadPreview" src="" width="100%" style="display:none" />
            <p><input type="file" id="file4" name="file4" size="30" onchange="doTest()"></p>
           <img id="uploadPreview" src="" width="100%" style="display:none" />
      </div>

      <div class="w3-half">
        <p><input type="file" id="file5" name="file5" size="30" onchange="doTest()"></p>
           <img id="uploadPreview" src="" width="100%" style="display:none" />
            <p><input type="file" id="file6" name="file6" size="30" onchange="doTest()"></p>
           <img id="uploadPreview" src="" width="100%" style="display:none" />
            <p><input type="file" id="file7" name="file7" size="30" onchange="doTest()"></p>
           <img id="uploadPreview" src="" width="100%" style="display:none" />

      </div>
    <!-- End photo grid -->
    </div>
  <!-- End Portfolio Section -->
  </div>

  <!-- Contact Section -->
  <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
    <h2 class="w3-text-light-grey">Contact Me</h2>
    <hr style="width:200px" class="w3-opacity">

    <div class="w3-section">
      <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i>&nbsp<input name="add1" placeholder="Address" size=""></input></p>
      <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> <input name="tel1" placeholder="+0123456789" size=""></input></p>
      <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i>&nbsp<input name="mail1" placeholder="mail@mail.com" size=""></input></p>
    </div><br>
    <p>Lets get in touch. Send me a message:</p>


     <!-- End Contact Section -->
  </div>

    <!-- Footer -->
  <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <p class="w3-medium">Powered by FUBAR</p>
  <!-- End footer -->
  </footer>

<!-- END PAGE CONTENT -->
</div>


<div></div>
<div id="footer" class="footer">


<footer class="w3-center w3-pale-blue w3-padding-32">
<button class=" w3-button w3-black w3-border w3-hover-border-black" type="submit" name="button" value="Upload Image">Submit</button>
</footer>
</form>
</div>
</body></html>
