<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Aegle Hospitals</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

        <link href="css/grayscale.css" rel="stylesheet">
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <style>
            html, body {
               
                /* color: #636b6f; */
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100%;
                margin: 0;
                /* display: inline; */
            }
            html
            {
                display:inline;
            }
            .bars{font-size:30px;
            cursor:pointer;
            display:none;}
            
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }
            .mail {
              text-decoration: darkgrey;
    color: grey;

            }
            .mail a:hover{
              text-decoration: none;
              color: darkgrey;
            }

            .title {
                margin:0;
                font-size: 84px;
                color: white;
  text-shadow: 2px 2px 4px black;
                text-align:center;
                position:absolute;
                top:50%;
                left:50%;
                /* -ms-transform:translate(-50%,-50%); */
                transform:translate(-50%,60%);
                
            }
            .contact-section .card {
    border: 0;
    border-bottom: 0.25rem solid dimgrey;
}
            .sub {
              
              position:absolute;
  top:70%;
  right:20%;
  transform:translate(0%,0%);
  width:100%;
                margin:auto;
                font-size: 20px;
                color: rgb(0,0,0,0);
  text-shadow: 2px 2px 2px black;
                text-align:center;
                
                padding:10% 0 0;
                
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            

            .m-b-md {
                margin-bottom: 30px;
            }
            .navigation {
    
                display: inline-block;
                float: right;
                /* padding: 2% 2% 2% 2%;
                padding-left: 5%; */
                background:black;
                color: white;
                position: sticky;
                top: 0;
                width: 100%;
                margin:0;
                opacity:0.75;
                z-index: 10;
                border: right 10;  
               }
               .heade{
                   text-align:center;
                   position:absolute;
                   top:100%;
                   width:100%;
                   color:lightgray;
                   background:white;
                   

               }
               .serv{
                   color:white;
                   font-size:20px;
               }
               
               .sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}
.container1{
  margin-top:4rem;
 
}

.sidenav .closebtn {
  position: absolute;
  bottom: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

               .nav-content {
                        display: inline;
                        position: sticky;
                        font-size: 1.4rem;
                        margin: 1% 0% 1% 0%;
                        float :right;
                            }
        .nav-content a {
                text-decoration: whitesmoke;
                color: white;
                
                         }
  .nav-content a:hover{
      text-decoration:none;
      color:grey;
                }
  .nav-link:focus,.nav-link:hover{
    text-decoration:none;
  color:grey;}
            .bgimage  {
        background-image:url("img/hush.jpg");
        
        background-repeat: no-repeat;
        background-size:cover;
        background-position: center;
        background-attachment:fixed;
        background-blend-mode: darken;
        /* -webkit-filter: blur(5px); Safari 6.0 - 9.0 */
  /* filter: blur(5px); */
        height:100%;
        position:relative;
        /* background.filter:blur(5px); */
       }
       .social1{
         justify:center;
         margin-top:5px;
         margin-right:0;
       }
       /* @media only screen and (max-device-width: 1024px) {
  body {
    background-attachment: scroll;
  }
} */
@media only screen and (max-device-width: 425px)
     {
      .nav-content{
        align:center;
        font-size:2px;
        margin:1% 0% 1% 0%;
        padding:0px 0px;
       }
      .links > a {
        padding:0px 10px;
        text-align:center;
      }
    
      .title {
        font-size:60px;
      }
      .sub{
      position:absolute;
      top:80%;
      right:0%;
  
      font-size:15px;
        padding:0 0 0 0;
        transform:translate(0%,60%);
        text-shadow: 2px 2px 1px black;
      }
      .wrapper{
        width:200%;
        
      }

      .foot{

        top:450%;
      }
      #projects{
      top:230%;
      }
    }
@media only screen and (max-device-width: 768px){
  .bars {
    font-size:20px;
    display:inline;
  }
  .pcnav{
    display:none;
  }
}
@media only screen and (min-device-width: 1400px){
.sub{
font-size:25px;
}
}
@media only screen and (max-device-width: 769px){
  .foot{

top:650%;
}

}
.small1{
  width:100%;
  margin:0;
 padding-bottom:10px;
}
@media (min-width: 992px){
.projects-section .featured-text {
    padding: 0 0 0 2rem;
    border-left: 0.5rem solid dimgrey;
}
.projects-section .project-text hr {
    border-color: dimgrey;
    border-width: .25rem;
    width: 30%;
}
}
#projects{
position:absolute;
top:270%;
width:100%;
}
* {
  box-sizing: border-box;
}
.contact-section .card hr {
    border-color: dimgrey;
            }

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
  padding-top: 15px;
  
}
.container1{
  display:inline-block;
  color:grey;
}

/* Hide the images by default */
.mySlides {
  display: none;
}
.mySlides1{
 display:inline;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
  width:16%;
  height:46%;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  right:40%;
  width: auto;
  padding: 5px;
  margin-top: -50px;
  margin-right: 30%;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
  transform:translate(50%,0%);
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.5);
}

/* Number text (1/3 etc) */
.numbertext {
  color: darkgrey;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}
.greycont{
  background-color:black;
  padding-top:40px;
  padding-bottom:40px;
  margin:auto;
}
/* Container for image text */
.caption-container {
  text-align: center;
  background-color: white;
  padding: 1px 16px;
  color: black;
  width:50%;
  transform:translate(50%,0%);
  margin:0;
  text-shadow: 2px 2px 2px grey;
}
#caption{
  margin:0;
}
.row{
  margin-right: 0;
  margin-left:0;
    margin-top: 10%;
}
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
  
}
.shade{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
.wrapper{
  position:absolute;
  top:50%;
  left:50%;
  transform:translate(-50%,0%);
  width:60%;
}
.st0{fill:none;}
	.st1{fill:white;stroke:rgb(200,200,200);stroke-width:2;stroke-miterlimit:10;}
path{
  stroke:white;
  fill:white;
  stroke-dasharray:1800;
  opacity:10;
  animation:animate 4s cubic-bezier(0,0.23,1,.1);

}
@keyframes animate {
  0% {
    opacity:0;
    fill:none;
    stroke-dashoffset:1800;
  }
  30% {
    opacity: 10;
    fill:none;
    stroke-dashoffset:1800;
  }
  90% {
    fill:rgba(255,255,255,0);

  }
  100% {
    opacity:10;
    fill:rgba(255,255,255,1);
    stroke-dashoffset:0;
  }


}
footer{
  position:absolute;
  top:550%;
  width:100%;
              /* transform:translate(0%,300%); */
            }

        </style>
  </head>
            <body class="bgimage">
  
    <!-- <div class="navigation"> -->
      <!-- <div class="nav-content"> -->
        <div class="flex-center position-ref navigation">
            @if (Route::has('login'))
            <span class="bars"  onclick="openNav(x)">&nbsp &#9776; </span>
                <div class="top-right links nav-content">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))

                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                    @auth('admin')
                        <a href="{{ url('/admin') }}">Home</a>
                        @else
                        <a href="{{ route('admin.login') }}">Dr.Login</a>
                    @endauth
                </div>
            @endif
            </div>
           
             
            <script>
AOS.init();
var x = window.matchMedia("(min-width: 700px)")
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(51.508742,-0.120850),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "inline";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
// function Nav()
//  {
//      if(document.getElementById("mySidenav").style.width == "0")
//         return(openNav(x));
//      else 
//         return(closeNav(x));   
//  }

function openNav(x) {
    if(x.matches){
        document.getElementById("mySidenav").style.width = "250px";
        // document.getElementByClass("navigation").style.opacity="1";
    }
    else{
        document.getElementById("mySidenav").style.width = "100%";
        // document.getElementByClass("navigation").style.opacity="0";
    }
}

function closeNav(x) {
    if(x.matches){
  document.getElementById("mySidenav").style.width = "0";
}
else{
    document.getElementById("mySidenav").style.width = "0";
}}

var x = window.matchMedia("(min-width: 700px)")
x.addListener(openNav)
x.addListener(closeNav)
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
            <div class="bg"></div>
            <div id="mySidenav" class="sidenav">
            <!-- <a href="javascript:void(0)" class="closebar" onclick="closeNav(x)">&#9776;</a> -->
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav(x)">&times;</a>
  <a href="#about" onclick="closeNav(x)" >About</a>
  <a href="#services" onclick="closeNav(x)">Services</a>
  <a href="#contact" onclick="closeNav(x)">Contact</a>
</div>
<section>
<!-- <div data-aos="fade-up"
     data-aos-duration="3000"><div class="title"> Welcome to Aegle Hospitals</div> -->
     


     <div class="sub" data-aos="fade-up"
     data-aos-duration="3000" >WHERE TECHNOLOGY MEETS HEALTHCARE</div>
</div>
<svg class="wrapper" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 526.6 309.2" style="enable-background:new 0 0 526.6 309.2;" xml:space="preserve">
<!-- <style type="text/css">
	.st0{fill:none;}
	.st1{fill:none;stroke:#000000;stroke-width:3;stroke-miterlimit:10;}
</style> -->
<g>
	<rect x="7.2" y="40.1" class="st0" width="606" height="357.1"/>
	<path class="st1" d="M101.2,79.4h5.7c2.8,0.3,4.2,1.1,4.2,2.6c0,0.9-1,1.4-3.1,1.4l-4-0.3l-5.9,0.1L85.4,99.3
		C76.7,110,72,115.4,71.1,115.4c-0.8,0-1.6-0.6-2.2-1.8c-0.6-1-1-2-1-2.8c0-1.3,7.1-10.5,21.3-27.6h-4.9c-6.8,0-16.9,0.4-30.3,1.1
		l-21.1,18l-8.2,7.3c-4.4,3.8-7.1,5.8-8.1,5.8c-1.2,0-1.7-0.6-1.7-1.8c0-1.5,6-7.3,18.1-17.3l14.3-11.9c-19.1,0.9-29,1.9-29.6,2.9
		v0.1c0,0.8,3,1.2,8.9,1.2l8.4-0.1c1.1,0,1.7,0.2,1.7,0.8c0,1.2-4.5,1.8-13.6,1.8c-7.7,0-11.6-1-11.6-2.9c0-2.5,2.3-4.2,6.9-5.1
		c1.3-0.3,4.5-0.6,9.6-0.9l24.4-1.6c9.8-8.1,23.9-18.7,42.2-31.7c23.3-16.5,37.2-24.7,41.7-24.7c2.3,0,3.4,1.5,3.4,4.4
		c0,2.5-2.9,7.3-8.8,14.6L101.2,79.4z M92.2,79.4l29.3-35.6l5.4-6.6c2.3-3,3.9-5.2,4.6-6.8l0.1-0.3c0-0.5-0.2-0.7-0.6-0.7
		c-2,0-14.4,8.3-37.2,25L59.5,80L92.2,79.4z"/>
	<path class="st1" d="M113.1,105.3c-2.1,0.5-6,2.4-11.8,5.8c-5.1,2.9-8.9,4.4-11.6,4.4c-0.5,0-0.8-0.3-0.8-0.8
		c0-0.8,0.5-1.2,1.6-1.4c2.5-0.4,6.1-2,10.8-4.7c5.1-2.9,9.2-4.7,12.4-5.5c1.9-4.6,5.9-9.5,11.9-14.6c6.4-5.5,11.8-8.2,16.3-8.2
		c3.3,0,5,1.4,5,4.3c0,3.7-3.5,7.8-10.6,12.1c-5.2,3.3-10.5,5.8-15.9,7.6c-0.6,1.3-0.9,2.7-0.9,4.2c0,2.2,0.8,3.6,2.3,4.2
		c0.8,0.3,2.2,0.5,4.3,0.6c1.5,0,2.3,0.4,2.3,1.1c0,1.1-2.6,1.6-7.7,1.6c-5.4,0-8.2-2.4-8.2-7.1
		C112.6,107.8,112.8,106.6,113.1,105.3z M121.3,101.8c3.8-1.9,7.9-4.4,12.1-7.6c5.7-4.2,8.5-7.5,8.5-10c0-1-0.5-1.5-1.4-1.5
		c-2.7,0-6.4,2.5-11.1,7.5C125.3,94.7,122.6,98.6,121.3,101.8z"/>
	<path class="st1" d="M151.7,101.3c-5.9,4.6-9.6,7.4-11.3,8.5c-5.5,3.7-9.8,5.6-12.8,5.6c-0.5,0-0.8-0.3-0.8-0.8
		c0-0.7,0.5-1.2,1.5-1.5c4.4-1,9.9-4.1,16.4-9.2l17.5-13.9c8.4-6.2,14.8-9.2,19.1-9.2c3.5,0,5.3,2,5.2,5.9c2-2.3,3.4-3.4,4.2-3.4
		c1.2,0,1.8,0.7,1.8,2.1c0,1.3-7,10.6-21,28c0.3,0,0.7,0,1.4-0.1c0.6-0.1,1-0.1,1.4-0.1c0.5,0,0.8,0.3,0.8,1c0,0.7-0.8,1.2-2.4,1.3
		l-3.3,0.2c-20.3,25.2-35.2,37.7-44.8,37.7c-3.9,0-5.9-1.6-5.9-4.9c0-5.3,3.9-11.4,11.7-18.5c7.8-7.1,18.6-12.3,32.6-15.6
		c3.6-4,6.5-7.6,8.7-10.9c-4.3,3.7-6.9,6-8.1,6.8c-3.8,2.8-6.9,4.1-9.5,4.1c-3,0-4.6-1.8-4.6-5.5
		C149.6,106.7,150.3,104.1,151.7,101.3z M160.7,117.6c-9.3,2.3-18.3,6.9-26.9,14s-12.9,12.7-12.9,16.8c0,1.8,0.8,2.6,2.3,2.6
		c3.5,0,10-4.7,19.6-14C149.9,130.1,155.9,123.6,160.7,117.6z M184.1,85.8c0-1.5-0.7-2.2-2.1-2.2c-2.7,0-7.8,3.6-15.4,10.9
		c-7.6,7.3-11.4,12.4-11.4,15.3c0,1,0.4,1.6,1.2,1.6c2.3,0,7.5-3.5,15.4-10.5C180,93.6,184.1,88.6,184.1,85.8z"/>
	<path class="st1" d="M207.8,95.2l-15.4,11.6c-8.3,5.7-14.4,8.6-18.3,8.6c-0.5,0-0.8-0.2-0.8-0.7c0-0.8,0.8-1.3,2.3-1.5
		c1.8-0.3,3.8-1,6.1-2.3c2.8-1.5,7.4-4.6,14.1-9.6c4.8-3.5,9.9-7.4,15.3-11.6c6.2-9.3,14.8-19.4,25.6-30.3
		c12.1-12.1,20.2-18.1,24.3-18.1c1.9,0,2.9,1,2.9,3.1c0,5.3-6.2,13.6-18.5,25.2c-7.8,7.3-16.3,14.3-25.4,21.1
		c-2.1,1.6-4.8,5-7.9,10.1c-3.3,5.3-4.9,9-4.9,11.2c0,1,1.1,1.6,3.4,1.6c0.5,0,0.8,0.3,0.8,1c0,0.8-1.1,1.2-3.3,1.2
		c-3.4,0-5.2-1.8-5.2-5.3C202.9,106.9,204.6,101.9,207.8,95.2z M260.6,43.2c-1.6,0-8.1,6.4-19.3,19.1
		c-10.7,12.2-17.5,20.5-20.4,25.1c27.2-22.1,40.8-36.5,40.8-43.2C261.7,43.5,261.3,43.2,260.6,43.2z"/>
	<path class="st1" d="M233.7,105.3c-2.1,0.5-6,2.4-11.8,5.8c-5.1,2.9-8.9,4.4-11.6,4.4c-0.5,0-0.8-0.3-0.8-0.8
		c0-0.8,0.5-1.2,1.6-1.4c2.5-0.4,6.1-2,10.8-4.7c5.1-2.9,9.2-4.7,12.4-5.5c1.9-4.6,5.9-9.5,11.9-14.6c6.4-5.5,11.8-8.2,16.3-8.2
		c3.3,0,5,1.4,5,4.3c0,3.7-3.5,7.8-10.6,12.1c-5.2,3.3-10.5,5.8-15.9,7.6c-0.6,1.3-0.9,2.7-0.9,4.2c0,2.2,0.8,3.6,2.3,4.2
		c0.8,0.3,2.2,0.5,4.3,0.6c1.5,0,2.3,0.4,2.3,1.1c0,1.1-2.6,1.6-7.7,1.6c-5.4,0-8.2-2.4-8.2-7.1
		C233.2,107.8,233.4,106.6,233.7,105.3z M241.9,101.8c3.8-1.9,7.9-4.4,12.1-7.6c5.7-4.2,8.5-7.5,8.5-10c0-1-0.5-1.5-1.4-1.5
		c-2.7,0-6.4,2.5-11.1,7.5C245.9,94.7,243.2,98.6,241.9,101.8z"/>
	<path class="st1" d="M184.6,228.3l6.1,0.1c3.1,0.3,4.7,1.1,4.7,2.5c0,0.7-0.6,1.1-1.7,1.1c-5.5,0-9.6,0.1-12.4,0.4L157,261.5
		l-3.3,4.4c-1.8,2.1-3.2,3.1-4.3,3.1c-0.8,0-1.5-0.4-2.2-1.1c-0.7-0.7-1-1.4-1-2.2c0-1.3,3.9-7,11.8-16.9l13.4-16.5l-32.2,1.3
		c-12,12.5-20.1,20.6-24.5,24.5c-12.3,10.9-22,16.4-29.1,16.4c-3.1,0-5.7-1-7.8-2.9c-2-2-3.1-4.5-3.1-7.6c0-7.5,4.8-14.8,14.3-22.1
		c9.5-7.3,24.1-11.2,43.9-11.8c26.8-28.9,40.3-44.1,40.4-45.6l-0.4-0.4c-2.9,0.1-9.1,3.1-18.6,9.1l-14.3,8.9c-0.5,0-0.8-0.3-0.8-0.8
		c0-1.9,5.8-6.1,17.3-12.7c11.5-6.5,18.8-9.8,21.8-9.8c1.1,0,2.2,0.4,3.3,1.3c1.1,0.8,1.6,1.8,1.6,2.8c0,1.5-3.3,5.9-9.9,13.1
		l-30.9,33.8l32.4-1.4c25.8-29.8,39.7-44.7,41.7-44.7c1.8,0,2.7,0.7,2.7,2.2c0,1.1-1.5,3.3-4.5,6.7
		C203.6,205.2,193.5,217.1,184.6,228.3z M129.7,233.8c-9.8,0.3-17.7,1.6-23.7,3.9c-6.8,2.6-13.3,7.2-19.4,13.8
		c-5.3,5.8-7.9,10.5-7.9,14.1c0,3.2,1.9,4.8,5.6,4.8c2.4,0,5.3-1,8.7-3.1c3.9-2.3,10.2-7.5,18.9-15.6
		C119.9,244.2,125.8,238.3,129.7,233.8z"/>
	<path class="st1" d="M195.8,252.3l-12.9,9.8c-6.6,4.6-11.5,6.9-14.8,6.9c-0.5,0-0.8-0.3-0.8-0.8c0-0.8,0.4-1.3,1.3-1.5
		c2.5-0.5,4.7-1.2,6.5-2.2c3.1-1.7,8.2-5.3,15.3-10.9l16.5-13.5c3.2-2.8,5.1-4.2,5.8-4.2c1.1,0,2.2,0.6,3.5,1.8
		c2.4-1.8,4.5-2.8,6.4-2.8c2.8,0,4.2,1.5,4.2,4.6c0,4.5-3.6,10.7-10.9,18.6c-7.4,7.9-13.3,11.9-17.9,11.9c-4.3,0-6.4-2.2-6.4-6.7
		C191.7,260.9,193.1,257.3,195.8,252.3z M210.9,244.6c-8.5,7.4-12.8,13.5-12.8,18.2c0,2,1,3,2.9,3c3.1,0,8-3.8,14.6-11.4
		c-3.5-0.8-5.3-3.1-5.3-6.8C210.4,246.7,210.5,245.7,210.9,244.6z M217,252.4c1.5-1.5,3.1-3.5,4.6-6c1.7-2.9,2.6-5.2,2.6-6.9
		c0-1.6-0.7-2.4-2.1-2.4c-2,0-4.1,1.3-6.2,3.9c-2.1,2.6-3.1,4.9-3.1,7C212.9,250.4,214.2,251.9,217,252.4z"/>
	<path class="st1" d="M232.9,258.3c-8.7,7.1-15.3,10.7-19.8,10.7c-0.5,0-0.8-0.3-0.8-0.8c0-0.8,0.4-1.3,1.3-1.5
		c1.5-0.4,3.9-1.2,7.1-2.5c3-1.6,10.6-7.5,22.9-17.7c11.6-9.6,17.6-14.5,17.9-14.5c1,0,1.9,0.4,2.8,1.2s1.4,1.7,1.4,2.7
		c0,3-2.4,8.4-7.1,16c-4.1,6.6-7.7,11.6-10.8,14.8c1.8,0,2.8,0.3,2.8,1c0,0.9-0.9,1.3-2.6,1.3c-0.5,0-1.1-0.1-2.1-0.3
		s-1.6-0.3-2-0.3c-0.3,0-0.8,0.1-1.5,0.2c-0.7,0.1-1.2,0.2-1.5,0.2C235.6,269.1,232.9,265.5,232.9,258.3z M241.1,265.8l-1.8-5
		c-0.9-2.4-1.8-3.7-2.7-3.7c-0.9,0-1.4,0.7-1.4,2.1c0,1.4,0.4,2.9,1.3,4.4c1,1.7,2.1,2.6,3.4,2.6
		C240.4,266.3,240.8,266.1,241.1,265.8z M242.9,263.8c2.9-2.4,6.1-6.6,9.6-12.5c3.3-5.5,5.5-10.4,6.8-14.6l-22.4,18.2
		c1.5,0.3,2.8,1.5,3.9,3.6L242.9,263.8z"/>
	<path class="st1" d="M292.2,239.6c-5.5,4.9-11.6,10-18.3,15.2l-11.2,8.6c-5.5,3.7-9.8,5.6-13.1,5.6c-0.5,0-0.8-0.3-0.8-0.8
		c0-0.7,0.5-1.2,1.6-1.4c1.4-0.3,3.2-0.9,5.4-1.9c2.6-1.1,8.1-5,16.5-11.6l15.5-12.9c9-7.4,13.8-11.1,14.4-11.1
		c1.5,0,2.3,0.9,2.3,2.6c0,0.7-2.1,3.8-6.3,9.3c4.9-4.1,8.9-6.2,12-6.2c3.3,0,4.9,1.8,4.9,5.3c0,4.5-2.5,9.7-7.6,15.4
		c-4.4,5-8.9,8.7-13.7,11.1c0.5,0.1,3,0.2,7.4,0.2c0.5,0,0.8,0.3,0.8,1c0,0.9-1.6,1.3-4.9,1.3c-2.7,0-4.9-0.4-6.8-1.2
		c-1,0.4-2,0.6-3.1,0.6c-4.2,0-6.1-2.9-5.8-8.8l-33.4,37.6c-0.8,0.9-1.5,1.4-2.2,1.4c-1.3,0-1.9-1-1.9-3.1c0-2,4.3-7.9,12.8-17.6
		l13-14.2L292.2,239.6z M287.4,264.4l-1.1-4.1c-0.6-2.2-1.1-3.3-1.4-3.3c-0.8,0-1.2,1.4-1.2,4.3c0,2.3,0.8,3.5,2.5,3.5
		C286.6,264.8,287.1,264.6,287.4,264.4z M289.9,263.6c4.8-2.8,9.3-6.9,13.4-12.4c4.1-5.5,6.2-9.2,6.2-11c0-1.2-0.6-1.8-1.9-1.8
		c-2.4,0-6.3,2.3-11.6,7c-3.8,3.3-7.3,6.8-10.4,10.3c1.2,0,2.1,1.1,2.7,3.2C289.1,261.6,289.6,263.2,289.9,263.6z"/>
	<path class="st1" d="M330.6,265.2c0,1.1,1.2,1.7,3.7,1.7c0.5,0,0.8,0.3,0.8,1c0,0.8-1.4,1.2-4.2,1.2c-3.1,0-4.7-1.5-4.7-4.5
		c0-3.5,4.6-10.8,13.9-21.9l-17.1,13.9c-10.1,8.3-17.4,12.4-21.9,12.4c-0.5,0-0.8-0.3-0.8-0.8c0-0.8,0.4-1.2,1.3-1.4
		c2.6-0.5,5-1.4,7.2-2.6c2.7-1.5,8.5-5.7,17.3-12.7l19.1-16c0.8-0.3,2-0.4,3.4-0.4c1.4,0,2.1,0.8,2.1,2.4c0,1.7-3.4,6.5-10.1,14.1
		C334,259.3,330.6,263.8,330.6,265.2z M358.2,221.9c-2,0-3-1-3-3.1c0-1.7,1-3.3,3.1-4.6c1.8-1.3,3.7-1.9,5.5-1.9
		c2.2,0,3.3,1.2,3.3,3.6c0,1.7-1.1,3.2-3.3,4.4C361.9,221.4,360.1,221.9,358.2,221.9z"/>
	<path class="st1" d="M384.1,228.2l-22.5,0.9c-1.3,0-1.9-0.3-1.9-1c0-0.5,1-1,3.1-1.3c2.9-0.5,6.9-0.9,12.1-1.2
		c5.8-0.3,9.9-0.6,12.2-0.9l8.9-10.7c4.8-5.7,7.7-8.5,8.7-8.5c1.3,0,1.9,0.8,1.9,2.4c0,1.7-3.8,7.3-11.4,16.8
		c4.4-0.3,8-0.4,10.9-0.4c1.9,0,2.9,0.4,2.9,1.1c0,0.8-2.3,1.4-6.9,1.7l-9.5,0.3l-13.9,17.4c-8.8,11.4-13.2,18.3-13.2,20.5
		c0,1,0.7,1.6,2.1,1.6c1.4,0,2.1,0.4,2.1,1.1c0,0.8-0.9,1.2-2.8,1.2c-3.7,0-5.6-1.5-5.6-4.5c0-2.4,1.2-5.8,3.6-10.2l5.4-9.1
		l-18.5,14.6c-7.7,6.1-13.6,9.1-17.8,9.1c-0.5,0-0.8-0.3-0.8-0.8c0-0.7,0.4-1.2,1.3-1.4c1.4-0.3,3.6-1,6.4-2.2
		c2.8-1.5,9-5.9,18.6-13.5c7.1-5.5,11.6-9.1,13.4-10.8C376.4,237.3,380.1,233.3,384.1,228.2z"/>
	<path class="st1" d="M391.7,255.9c-11.1,8.8-18.8,13.1-23,13.1c-0.5,0-0.8-0.3-0.8-0.8c0-0.8,0.5-1.2,1.5-1.4
		c3.9-0.6,9.3-3.6,16.3-9.1l8.1-6.3l12.9-10.3c5.9-4.1,11-6.1,15.2-6.1c3.1,0,4.9,1.6,5.3,4.7c1.6-1.5,2.8-2.3,3.4-2.3
		c1.4,0,2.1,0.6,2.1,1.7c0,1.5-3.2,5.9-9.6,13.4c-6.4,7.5-9.6,11.8-9.6,13.1c0,0.9,0.7,1.3,2.1,1.4s2.1,0.4,2.1,1.1
		c0,0.9-1.4,1.3-4.3,1.3c-2.8,0-4.2-1.2-4.2-3.7c0-2,1.1-4.8,3.4-8.4l-7.8,6.6c-3.8,2.8-6.8,4.3-9.1,4.3c-3.6,0-5.4-1.8-5.4-5.4
		C390.2,260.5,390.7,258.3,391.7,255.9z M422.7,237.5c-2.5,0-7.5,3.7-15.3,11c-7.7,7.3-11.6,12.3-11.6,14.7c0,1.1,0.5,1.7,1.6,1.7
		c2.4,0,7.5-3.6,15.3-10.8c7.8-7.2,11.7-12.1,11.7-14.6C424.6,238.2,423.9,237.5,422.7,237.5z"/>
	<path class="st1" d="M450.2,248.8l-15.4,11.6c-8.3,5.7-14.4,8.6-18.3,8.6c-0.5,0-0.8-0.2-0.8-0.7c0-0.8,0.8-1.3,2.3-1.5
		c1.8-0.3,3.8-1,6.1-2.3c2.8-1.5,7.4-4.6,14.1-9.6c4.8-3.5,9.9-7.4,15.3-11.6c6.2-9.3,14.8-19.4,25.6-30.3
		c12.1-12.1,20.2-18.1,24.3-18.1c1.9,0,2.9,1,2.9,3.1c0,5.3-6.2,13.6-18.5,25.2c-7.8,7.3-16.3,14.3-25.4,21.1
		c-2.1,1.6-4.8,5-7.9,10.1c-3.3,5.3-4.9,9-4.9,11.2c0,1,1.1,1.6,3.4,1.6c0.5,0,0.8,0.3,0.8,1c0,0.8-1.1,1.2-3.3,1.2
		c-3.4,0-5.2-1.8-5.2-5.3C445.4,260.5,447,255.5,450.2,248.8z M503,196.8c-1.6,0-8.1,6.4-19.3,19.1c-10.7,12.2-17.5,20.5-20.4,25.1
		c27.2-22.1,40.8-36.5,40.8-43.2C504.1,197.1,503.7,196.8,503,196.8z"/>
</g>

</svg>
  </section>     
  <section class="heade">
  <div class="greycont">
  <div data-aos="fade-up"
  data-aos-anchor-placement="top-center"  name="services">
    <div id="services" class="serv">Services Offered</div>
       <ul type="none"> 
       <li>short-term hospitalization</li>
        <li>emergency room services</li>
        <li>general and specialty surgical services</li>
        <li>x ray/radiology services</li>
        <li>laboratory services</li>
        <li>blood services</li>
        <li>Pediatric specialty care</li>
        <li>Physical therapy and rehabilitation services</li>
        <li>Home nursing services</li>
        <li>Nutritional counseling</li>
        </ul>
    </div>
</div>
<div class="container">
 <div class="shade" data-aos="fade-up"
     data-aos-anchor-placement="top-bottom">
  <!-- Full-width images with number text -->
  <div class="mySlides mySlides1">
    <div class="numbertext">1 / 6</div>
      <img src="img/heart.jpg" style="width:50%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
      <img src="img/neuro.jpg" style="width:50%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
      <img src="img/dent.jpg" style="width:50%">
  </div>

  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
      <img src="img/paed.jpg" style="width:50%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
      <img src="img/derm.jpg" style="width:50%">
  </div>

  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
      <img src="img/ortho.jpg" style="width:50%">
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

  <!-- Image text -->
  <div class="caption-container">
    <p id="caption"></p>
  </div>
</div>
  <!-- Thumbnail images -->
  <div class="row" data-aos="fade-up"  data-aos-anchor-placement="center-bottom">
    <div class="column">
      <img class="demo cursor" src="img/heart.jpg" style="width:100%" onclick="currentSlide(1)" alt="Cardiology">
    </div>
    <div class="column"> 
      <img class="demo cursor" src="img/neuro.jpg" style="width:100%" onclick="currentSlide(2)" alt="Neurology">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/dent.jpg" style="width:100%" onclick="currentSlide(3)" alt="Dentistry">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/paed.jpg" style="width:100%" onclick="currentSlide(4)" alt="Paediatric">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/derm.jpg" style="width:100%" onclick="currentSlide(5)" alt="Dermatalogy">
    </div> 
    <div class="column">
      <img class="demo cursor" src="img/ortho.jpg" style="width:100%" onclick="currentSlide(6)" alt="Orthopaedic">
    </div>
  </div>
</div>





</section>

<section id="projects" class="projects-section bg-light" data-aos="zoom-in" data-aos-offset="300">
    <div class="container">

      <!-- Featured Project Row -->
      <div class="row align-items-center no-gutters mb-4 mb-lg-5" >
        <div class="col-xl-8 col-lg-7">
          <img class="img-fluid mb-3 mb-lg-0" src="img/bg-masthead.jpg" alt="">
        </div>
        <div class="col-xl-4 col-lg-5">
          <div class="featured-text text-center text-lg-left">
            <h4>Shoreline</h4>
            <p class="text-black-50 mb-0">Grayscale is open source and MIT licensed. This means you can use it for any project - even commercial projects! Download it, customize it, and publish your website!</p>
          </div>
        </div>
      </div>

      <!-- Project One Row -->
      <div class="row justify-content-center no-gutters mb-5 mb-lg-0" data-aos="fade-left" data-aos-offset="300">
        <div class="col-lg-6">
          <img class="img-fluid" src="img/demo-image-01.jpg" alt="">
        </div>
        <div class="col-lg-6">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-left">
                <h4 class="text-white">Misty</h4>
                <p class="mb-0 text-white-50">An example of where you can put an image of a project, or anything else, along with a description.</p>
                <hr class="d-none d-lg-block mb-0 ml-0">
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Project Two Row -->
      <div class="row justify-content-center no-gutters" data-aos="fade-right" data-aos-offset="300">
        <div class="col-lg-6">
          <img class="img-fluid" src="img/demo-image-02.jpg" alt="">
        </div>
        <div class="col-lg-6 order-lg-first">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-right">
                <h4 class="text-white">Mountains</h4>
                <p class="mb-0 text-white-50">Another example of a project with its respective description. These sections work well responsively as well, try this theme on a small screen!</p>
                <hr class="d-none d-lg-block mb-0 mr-0">
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>



           </body>
         <footer class="foot">
         <section class="contact-section bg-black" id="contact">
    <div class="container">

      <div class="row">

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-map-marked-alt text-dark mb-2"></i>
              <h4 class="text-uppercase m-0">Address</h4>
              <hr class="my-4">
              <div id="googleMap" class="small text-black-50">K R Circle, Dr Ambedkar Veedhi, Bengaluru, Karnataka</div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-envelope text-dark mb-2"></i>
              <h4 class="text-uppercase m-0">Email</h4>
              <hr class="my-4">
              <div class="small text-black-50">
                <a class="mail" href="#">hello@yourdomain.com</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-mobile-alt text-dark mb-2"></i>
              <h4 class="text-uppercase m-0">Phone</h4>
              <hr class="my-4">
              <div class="small text-black-50">+91 8217796059</div>
            </div>
          </div>
        </div>
      </div>

      <div class="container1 justify-content-right">Visit Us At</div>

      <iframe class="social1 d-flex justify-content-center" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.944805418792!2d77.58460431388306!3d12.975382090853396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1672fcfc6af1%3A0x9c2dc517c9231979!2sUVCE!5e0!3m2!1sen!2sin!4v1553171316915" width="100%" height="200px" frameborder="0" style="border:0" allowfullscreen></iframe>
<div class="social d-flex justify-content-center">
        <a href="#" class="mx-2">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#" class="mx-2">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" class="mx-2">
          <i class="fab fa-github"></i>
        </a>
      </div>

    </div>
 
  
  <div class="container  bg-black small1 text-center text-white-50">
      Copyright &copy; Aegle Hospitals 2019
    </div> </section>
         <!-- <i class="fas fa-ellipsis-v"></i> -->
         </footer>
</html>
