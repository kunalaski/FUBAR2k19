<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pop HTML5 Template</title>
<!--

Template 2097 Pop

http://www.tooplate.com/view/2097-pop

-->
    <!-- load CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                  <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="fontawesome/css/fontawesome-all.min.css">                <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>                       <!-- http://kenwheeler.github.io/slick/ -->
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" href="css/tooplate-style.css">                               <!-- Templatemo style -->

    <script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this in a modern browser such as latest version of Chrome or Microsoft Edge.");</script>
     <script type="text/javascript">
    if (window.FileReader) {

      var reader = new FileReader(), rFilter = /^(image\/bmp|image\/cis-cod|image\/gif|image\/ief|image\/jpeg|image\/jpeg|image\/jpeg|image\/pipeg|image\/png|image\/svg\+xml|image\/tiff|image\/x-cmu-raster|image\/x-cmx|image\/x-icon|image\/x-portable-anymap|image\/x-portable-bitmap|image\/x-portable-graymap|image\/x-portable-pixmap|image\/x-rgb|image\/x-xbitmap|image\/x-xpixmap|image\/x-xwindowdump)$/i;

      reader.onload = function (oFREvent) {
        preview = document.getElementById("uploadPreview")
        preview.src = oFREvent.target.result;
        preview.style.display = "block";
      };

      function doTest() {

        if (document.getElementById("myfile").files.length === 0) { return; }
        var file = document.getElementById("myfile").files[0];
        if (!rFilter.test(file.type)) { alert("You must select a valid image file!"); return; }
        reader.readAsDataURL(file);
      }

  } else {
    alert("FileReader object not found :( \nTry using Chrome, Firefox or WebKit");
  }
    </script>



</head>

<body>
<form class="" action="pop.inc.php" method="post">

    <div id="tm-bg"></div>
    <div id="tm-wrap">
        <div class="tm-main-content">
            <div class="container tm-site-header-container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-md-col-xl-6 mb-md-0 mb-sm-4 mb-4 tm-site-header-col">
                        <div class="tm-site-header">
							<h1 class="mb-4"><input name="CpName" placeholder="CompanyName" size="12"></input></h1>
                            <img src="img/underline.png" class="img-fluid mb-4">
						<p><input name="TagLine" placeholder="Company Tag Line" size="30"></input></p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="content">
                            <div class="grid">
                                <div class="grid__item" id="home-link">
                                    <div class="product">
                                        <div class="tm-nav-link">
                                            <i class="fas fa-home fa-3x tm-nav-icon"></i>
                                            <span class="tm-nav-text">Welcome</span>
                                            <div class="product__bg"></div>
                                        </div>
                                        <div class="product__description">
                                            <div class="row mb-3">
                                                <div class="col-12">
													<h2 class="tm-page-title"><input placeholder="Title" name="Title"></input></h2>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                  <p><input type="file" id="myfile" name="myfile" size="30" onchange="doTest()"></p>

    											  <img id="uploadPreview" src="" width="100%" style="display:none" />


                                                    <hr>
                                                    <p><textarea name="Text1" placeholder="Text" rows="3" cols="40">

                                                    </textarea></p>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                                    <p><textarea name="Text2" placeholder="Text" rows="3" cols="40">

                                                    </textarea></p>
                                                    <hr>
												<p><textarea name="Text3" placeholder="Text" rows="3" cols="40">

                                                    </textarea></p>
                                                    <p>
                                                    <input type="file" id="myfile" name="myfile" size="30"onchange="doTest()"></p>
    											  <img id="uploadPreview" src="" width="100%" style="display:none" />
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="grid__item" id="team-link">
                                    <div class="product">
                                        <div class="tm-nav-link">
                                            <i class="fas fa-users fa-3x tm-nav-icon"></i>
                                            <span class="tm-nav-text">Our Team</span>
                                            <div class="product__bg"></div>
                                        </div>
                                        <div class="product__description">
                                            <div class="p-sm-4 p-2">
                                                <div class="row mb-3">
                                                    <div class="col-12">
														<h2 class="tm-page-title"><input name="Title2" placeholder="Title"></input></h2>
                                                    </div>
                                                </div>
                                                <div class="row tm-reverse-sm">
                                                    <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
                                                        <p><textarea name="Text4" placeholder="Text" rows="5" cols="50">

                                                    </textarea></p>
                                                    <hr><hr>
                                                    <p><textarea name="Text5" placeholder="Text" rows="5" cols="50">

                                                    </textarea></p>
                                                    </div>
                                                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-lg-0 mb-sm-4 mb-4">
                                                         <p>
                                                    <input type="file" id="myfile" name="myfile" size="30"onchange="doTest()"></p>
    											  <img id="uploadPreview" src="" width="100%" style="display:none" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid__item">
                                    <div class="product">
                                        <div class="tm-nav-link">
                                            <i class="fas fa-handshake fa-3x tm-nav-icon"></i>
                                            <span class="tm-nav-text">Our Work</span>
                                            <div class="product__bg"></div>
                                        </div>
                                        <div class="product__description">
                                            <div class="p-sm-4 p-2">
                                                <div class="row mb-3">
                                                    <div class="col-12">
                                                        <h2 class="tm-page-title">Our Work</h2>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-12">
                                                        <p><textarea name="Text6" placeholder="Text" rows="5" cols="90%">

                                                    </textarea></p>
                                                    <hr><hr>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="p-sm-4 p-2 tm-img-container">
                                                            <div class="tm-img-slider" id="tmImgSlider">
                                                                <p>
                                                    <input type="file" id="myfile" name="myfile" size="30"onchange="doTest()"></p>
    											  <img id="uploadPreview" src="" width="100%" style="display:none" />
                                                   <p>
                                                    <input type="file" id="myfile" name="myfile" size="30"onchange="doTest()"></p>
    											  <img id="uploadPreview" src="" width="100%" style="display:none" />
                                                   <p>
                                                    <input type="file" id="myfile" name="myfile" size="30"onchange="doTest()"></p>
    											  <img id="uploadPreview" src="" width="100%" style="display:none" />
                                                   <p>
                                                    <input type="file" id="myfile" name="myfile" size="30"onchange="doTest()"></p>
    											  <img id="uploadPreview" src="" width="100%" style="display:none" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid__item">
                                    <div class="product">
                                        <div class="tm-nav-link">
                                            <i class="fas fa-comments fa-3x tm-nav-icon"></i>
                                            <span class="tm-nav-text">Contact</span>
                                            <div class="product__bg"></div>
                                        </div>
                                        <div class="product__description">
                                            <div class="pt-sm-4 pb-sm-4 pl-sm-5 pr-sm-5 pt-2 pb-2 pl-3 pr-3">
                                                <div class="row mb-3">
                                                    <div class="col-12">
                                                        <h2 class="tm-page-title">Contact Us</h2>
                                                    </div>
                                                </div>
                                                <div>
                                                   <h3>Telephone No.:</h3>
                                                   <input type="text" name="TeleNo" placeholder="Contact No.">
                                                   <h3>Mail Id:</h3>
                                                   <input type="text" name="Email" placeholder="Mail ID">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer>
                <p class="small tm-copyright-text">Copyright &copy; <span class="tm-current-year">2018</span> <input placeholder="Company Name" name="Copy"></input> </p>
               <br>
               <button type="submit" name="button">Submit</button>
            </footer>
        </div> <!-- .tm-main-content -->
    </div>
  </form>
    <!-- load JS -->
    <script src="js/jquery-3.2.1.slim.min.js"></script>         <!-- https://jquery.com/ -->
    <script src="slick/slick.min.js"></script>                  <!-- http://kenwheeler.github.io/slick/ -->
    <script src="js/anime.min.js"></script>                     <!-- http://animejs.com/ -->
    <script src="js/main.js"></script>
    <script>

        function setupFooter() {
            var pageHeight = $('.tm-site-header-container').height() + $('footer').height() + 100;

            var main = $('.tm-main-content');

            if($(window).height() < pageHeight) {
                main.addClass('tm-footer-relative');
            }
            else {
                main.removeClass('tm-footer-relative');
            }
        }

        /* DOM is ready
        ------------------------------------------------*/
        $(function(){

            setupFooter();

            $(window).resize(function(){
                setupFooter();
            });

            $('.tm-current-year').text(new Date().getFullYear());  // Update year in copyright
        });

    </script>
  </form>
</body>
</html>
