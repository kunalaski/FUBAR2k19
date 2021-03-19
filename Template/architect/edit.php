<!DOCTYPE html>

<!-- saved from url=(0064) -->
<html><head>
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

	</style>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>Achitect</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./architect_files/w3.css">
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
      <form class="" action="architect.inc.php" method="post" enctype="multipart/form-data" autocomplete="off">
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
                <input class="w3-input w3-border w3-margin-left" style="width: 50%; " type="text" placeholder="Enter Title" name="title" required autocomplete="off" >

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










<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <p href="#home" class="w3-bar-item w3-button"><input name="Cpname" placeholder="Company Name" size="" autocomplete="off" ></input></p>

    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="#projects" class="w3-bar-item w3-button">Projects</a>
      <a href="#about" class="w3-bar-item w3-button">About</a>
      <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="./architect_files/architect.jpg" alt="Architecture" width="1500" height="800">

  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white w3-padding w3-black"><input name="Cpname" placeholder="Company Name" size="12" autocomplete="off" ></input></h1>
    <label for="">choose background image</label>
      <p><input type="file" id="file14" name="file14" size="30" onchange="doTest()"></p>
       <img id="uploadPreview" src="" width="100%" style="display:none" />

  </div>
</header>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Projects</h3>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-center w3-black w3-padding"><input name="img1" placeholder="Image" size="" autocomplete="off" ></input></div>
          <p><input type="file" id="file1" name="file1" size="30" onchange="doTest()"></p>
           <img id="uploadPreview" src="" width="100%" style="display:none" />
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-cente w3-black w3-padding"><input name="img2" placeholder="Image" size="" autocomplete="off" ></input></div>
        <p><input type="file" id="file2" name="file2" size="30" onchange="doTest()"></p>
           <img id="uploadPreview" src="" width="100%" style="display:none" />
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-cente w3-black w3-padding"><input name="img3" placeholder="Image" size="" autocomplete="off" ></input></div>
        <p><input type="file" id="file3" name="file3" size="30" onchange="doTest()"></p>
           <img id="uploadPreview" src="" width="100%" style="display:none" />
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-cente w3-black w3-padding"><input name="img4" placeholder="Image" size="" autocomplete="off" ></input></div>
        <p><input type="file" id="file4" name="file4" size="30" onchange="doTest()"></p>
           <img id="uploadPreview" src="" width="100%" style="display:none" />
      </div>
    </div>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-cente w3-black w3-padding"><input name="img5" placeholder="Image" size="" autocomplete="off" ></input></div>
        <p><input type="file" id="file5" name="file5" size="30" onchange="doTest()"></p>
           <img id="uploadPreview" src="" width="100%" style="display:none" />
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-cente w3-black w3-padding"><input name="img6" placeholder="Image" size="" autocomplete="off" ></input></div>
        <p><input type="file" id="file6" name="file6" size="30" onchange="doTest()"></p>
           <img id="uploadPreview" src="" width="100%" style="display:none" />
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-cente w3-black w3-padding"><input name="img7" placeholder="Image" size="" autocomplete="off" ></input></div>
        <p><input type="file" id="file7" name="file7" size="30" onchange="doTest()"></p>
           <img id="uploadPreview" src="" width="100%" style="display:none" />
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-cente w3-black w3-padding"><input name="img8" placeholder="Image" size="" autocomplete="off" ></input></div>
        <p><input type="file" id="file8" name="file8" size="30" onchange="doTest()"></p>
           <img id="uploadPreview" src="" width="100%" style="display:none" />
      </div>
    </div>
  </div>

  <!-- About Section -->
  <div class="w3-container w3-padding-32" id="about">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">About</h3>
    <p class="w3-center" ><textarea name="about1" placeholder="Description" rows="5" cols="120" >
</textarea>
    </p>
  </div>

  <div class="w3-row-padding w3-grayscale">
    <div class="w3-col  w3-center l3 m6 w3-margin-bottom">
      <p><input type="file" id="file9" name="file9" size="30" onchange="doTest()"></p>
           <img id="uploadPreview" src="" width="100%" style="display:none" />
      <h3><input name="architect1" placeholder="architect1" size="15" autocomplete="off" ></input></h3>
      <p class="w3-opacity"><input name="arpost1" placeholder="post1" size="10" autocomplete="off" ></input></p>
      <p><textarea name="about2" placeholder="Short Description" rows="3" cols="25" ></textarea></p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
    <div class="w3-col w3-center l3 m6 w3-margin-bottom">
      <p><input type="file" id="file10" name="file10" size="30" onchange="doTest()"></p>
           <img id="uploadPreview" src="" width="100%" style="display:none" />
      <h3><input name="architect2" placeholder="architect2" size="15" autocomplete="off" ></input></h3>
      <p class="w3-opacity"><input name="arpost2" placeholder="post2" size="10" autocomplete="off" ></input></p>
      <p><textarea name="about3" placeholder="Short Description" rows="3" cols="25" ></textarea></p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
    <div class="w3-col w3-center l3 m6 w3-margin-bottom">
      <p><input type="file" id="file11" name="file11" size="30" onchange="doTest()"></p>
           <img id="uploadPreview" src="" width="100%" style="display:none" />
      <h3><input name="architect3" placeholder="architect3" size="15" autocomplete="off" ></input></h3>
      <p class="w3-opacity"><input name="arpost3" placeholder="post3" size="10" autocomplete="off" ></input></p>
      <p><textarea name="about4" placeholder="Short Description" rows="3" cols="25" ></textarea></p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
    <div class="w3-col w3-center l3 m6 w3-margin-bottom">
      <p><input type="file" id="file12" name="file12" size="30" onchange="doTest()"></p>
           <img id="uploadPreview" src="" width="100%" style="display:none" />
      <h3><input name="architect4" placeholder="architect4" size="15" autocomplete="off" ></input></h3>
      <p class="w3-opacity"><input name="arpost4" placeholder="post4" size="10" autocomplete="off" ></input></p>
      <p><textarea name="about5" placeholder="Short Description" rows="3" cols="25" ></textarea></p>
      <p><button class="w3-button w3-light-grey w3-block">Contact</button></p>
    </div>
  </div>

  <!-- Contact Section -->
  <div class="w3-container w3-padding-32" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Contact</h3>
    <p>Lets get in touch and talk about your next project.</p>
<h3>Email Id:&nbsp&nbsp&nbsp&nbsp<input name="email1" placeholder="example@xyz.com" size="20" autocomplete="off" ></input></h3>
    <h3>Tel. No.:&nbsp&nbsp&nbsp&nbsp&nbsp<input name="telno1" placeholder="+0123456789" size="10" autocomplete="off" ></input></h3>
  </div>

    <hr>
<!-- Image of location/map -->
<div class="w3-container">
  <img src="./architect_files/map.jpg" class="w3-image" style="width:100%">
</div>

<!-- End page content -->
</div>


<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
  <p>Powered by FUBAR</p>
</footer>


<div></div>
</script>
<div id="footer" class="footer">


<footer class="w3-center w3-pale-blue w3-padding-32">
<button class=" w3-button w3-black w3-border w3-hover-border-black" type="submit" name="button" value="Upload Image">Submit</button>
</footer>
</form>
</div></form>
</body></html>
