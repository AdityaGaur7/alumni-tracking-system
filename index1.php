<html>
    <head>
        <link rel="stylesheet" href="stylesheet.css">
        
        <title>Alumni Tracking system</title>
        <meta name="viewport" content = "width=device-width, initial scale=1.0">


<body>
    <hr><hr>

    <center>

        <blockquote cite="http://www.mmmut.ac.in/index"></blockquote>
        <section>
    <img src = "img/transparent.png" height="150px" width="auto" usemap="#mmmut">
    <map name = "mmmut">
        <area shape="default" alt="CLICK ON LOGO TO VISIT OFFICIAL WEBSITE" title="CLICK ON LOGO TO VISIT OFFICIAL WEBSITE" href="http://www.mmmut.ac.in/index" target="_blank">
    </map>
        <h1 style="border-bottom: 3px #000;">Madan Mohan Malaviya University of Technology, Gorakhpur, U.P.</h1>
        <strong>
        </section>

<section style="margin-left: 15px; margin-right: 15px;">
    <nav style="background-color: rgb(0, 23, 46);">
        <div class="dropdown">
        <a href = "tracking.html" target=_blank;>
            <span><p>🏠 HOME ||</p></span></a>
    </div>
            <div class="dropdown">
                <span>
                <p class="p">&#127891ALUMNI  ||</p>
                </span>
                <div class="dropdown-content">
                <hr style="width: 160px;">
                <a href = "login1.php" target=_blank;>
                <p>&#128394REGISTER</p></a>
                <a href="login2.php" target=_blank;>
                    <p>&#128394 LOGIN</p></a>
                </div>
            </div>
            <div class="dropdown">
                <span>
                <p class="p">&#128100	STUDENT ||</p>
                </span>
                <div class="dropdown-content">
                <hr style="width: 160px;">
                <a href = "studentregister.html" target=_blank;>
                <p>&#128394REGISTER</p></a>
                <a href="studentlogin.html" target=_blank;>
                    <p>&#128394 LOGIN</p></a>
                </div>
            </div>
            <div class="dropdown">
                <p class="p"><a href="#gallery">&#127879	GALLERY  || </a></p>
            </div>
                <div class="dropdown">
                <a href = "about.html" target=_blank;>
                <span><p>&#127987 ABOUT US  ||</p></a></span></div>
                <div class="dropdown">
                <a href="services.html" target=_blank;>
                    <span><p>&#127995 SERVICES  ||</p></a></span>
                </div>
            </div>
            <div class="dropdown">
                <a href = "contact.html">
                <span><p>&#128190 CONTACT ||</p></a></span>
            </div>
            <div class="dropdown">
                <a href="help.html" target=_blank;>
                    <span><p>&#10068 HELP ||</p></a></span>
            </div>
            </nav><br>
        </section>
        
        <section>
            <div class="container" style="margin-left: 15px; margin-right: 15px; background-color: #000;">
                
                <div class="mySlides">
                    <div class="numbertext">1/6</div>
                    <img src="gate.jpg" style="width: 100%; height: 400px;">
                </div>
                <div class="mySlides">
                    <div class="numbertext">2/6</div>
                    <img src=".....JPg" style="width: 801; height:400px;">
                </div>
                <div class="mySlides">
                    <div class="numbertext">3/6</div>
                    <img src="trees.jpeg" style="width: 987; height:400px;">
                </div>
            <div class="mySlides">
                <div class="numbertext">4/6</div>
                <img src="mmmut infra.jpg" style="width: auto; height:400px;">
            </div>
            <!--<div class="mySlides">
                <div class="numbertext">5/6
                </div>
                <img src="" style="width: auto ; height: 400px;">
            </div>
            <div class="mySlides">
                <div class="numbertext">6/6</div>
                <img src="" style="width: auto; height: 400px;">
            </div>-->
            <a class="prev"  onclick="plusSlides(-1) ">❮</a>
            <a class= "next" onclick="plusSlides(1)">❯</a>
        </div>
        </section>
    </center>
    
                                        <!--JAVASCRIPT-->
        <script>

        let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("demo");
    let captionText = document.getElementById("caption");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
</body>
</head>
</html>
