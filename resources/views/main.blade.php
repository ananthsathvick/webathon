<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blue Cross Hospitals</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel='icon' type='image/png/jpg' sizes='32x32' href=https://www.tareeanglican.org.au/wp-content/uploads/2018/02/cropped-bluecross_960.png>

  <!-- Custom styles for this template -->
  <link href="css/grayscale.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body id="page-top">
<style type="text/css">
.wrapper{
  position: relative;
    top: 50%;
    margin: auto;
    left: 50%;
    transform: translate(-50%,0%);
    width: 250%;
}
@media only screen and (max-device-width: 768px){
  .wrapper{
    width: 100%;
  }
}
	.st0{fill:none;}
	.st1{fill:#ffffff;stroke:#ffffff;stroke-width:3;stroke-miterlimit:10;}

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
</style>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">BlueCross</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        @if (Route::has('login'))
        @auth
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{ url('/home') }}">Home</a>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{ route('login') }}">Login</a>
          </li>
          @if (Route::has('register'))
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{ route('register') }}">Register</a>
          </li>
          @endif
          @endauth
          @auth('admin')
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{ url('/admin') }}">Home</a>
          </li>
         @else
         <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{ route('admin.login') }}">Dr.Login</a>
          </li>      
           @endauth
                
          @endif
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
      
<svg class="wrapper" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 755 340" style="enable-background:new 0 0 755 560;" xml:space="preserve">

<g>
	<rect x="190" y="129" class="st0" width="458" height="480"/>
  <path class="st1" d="M131.9,266.2h-25.6c-3.7,0-6.3-0.8-7.9-2.5c-1.6-1.7-2.4-4.3-2.4-7.9v-63c0-3.7,0.8-6.4,2.4-8
		c1.6-1.6,4.2-2.4,7.9-2.4h27.1c4,0,7.5,0.2,10.4,0.7c2.9,0.5,5.6,1.4,7.9,2.9c2,1.2,3.7,2.7,5.3,4.5c1.5,1.8,2.7,3.8,3.5,6
		c0.8,2.2,1.2,4.5,1.2,6.9c0,8.4-4.2,14.5-12.6,18.4c11,3.5,16.5,10.3,16.5,20.5c0,4.7-1.2,8.9-3.6,12.7c-2.4,3.8-5.6,6.5-9.7,8.3
		c-2.6,1.1-5.5,1.8-8.8,2.3C140.2,266,136.3,266.2,131.9,266.2z M113,195.2v21.7h15.5c4.2,0,7.5-0.4,9.8-1.2
		c2.3-0.8,4.1-2.3,5.3-4.6c1-1.6,1.4-3.4,1.4-5.4c0-4.2-1.5-7-4.5-8.4c-3-1.4-7.6-2.1-13.8-2.1H113z M130.6,229H113v24.5h18.2
		c11.5,0,17.2-4.1,17.2-12.4c0-4.2-1.5-7.3-4.5-9.2C141,229.9,136.5,229,130.6,229z"/>
	<path class="st1" d="M179.2,258.1v-67.6c0-3.1,0.7-5.5,2.1-7.1c1.4-1.6,3.3-2.4,5.6-2.4c2.4,0,4.3,0.8,5.7,2.4
		c1.4,1.6,2.2,4,2.2,7.1v67.6c0,3.2-0.7,5.5-2.2,7.1c-1.5,1.6-3.4,2.4-5.7,2.4c-2.3,0-4.1-0.8-5.6-2.5
		C179.9,263.5,179.2,261.2,179.2,258.1z"/>
	<path class="st1" d="M251.4,258.8v-2c-1.9,2.4-3.8,4.3-5.9,5.9s-4.3,2.8-6.7,3.6c-2.4,0.8-5.2,1.2-8.3,1.2c-3.8,0-7.2-0.8-10.1-2.3
		c-3-1.6-5.3-3.7-6.9-6.5c-1.9-3.3-2.9-8.1-2.9-14.3v-30.9c0-3.1,0.7-5.5,2.1-7c1.4-1.5,3.3-2.3,5.6-2.3c2.4,0,4.3,0.8,5.7,2.3
		c1.4,1.6,2.2,3.9,2.2,7v25c0,3.6,0.3,6.7,0.9,9.1c0.6,2.5,1.7,4.4,3.3,5.8c1.6,1.4,3.7,2.1,6.4,2.1c2.6,0,5.1-0.8,7.4-2.3
		c2.3-1.6,4-3.6,5.1-6.1c0.9-2.2,1.3-7,1.3-14.5v-19c0-3.1,0.7-5.4,2.2-7c1.4-1.6,3.3-2.3,5.7-2.3c2.3,0,4.2,0.8,5.6,2.3
		c1.4,1.5,2.1,3.9,2.1,7v45.2c0,3-0.7,5.2-2,6.7c-1.4,1.5-3.1,2.2-5.2,2.2c-2.1,0-3.9-0.8-5.3-2.3
		C252.1,263.7,251.4,261.6,251.4,258.8z"/>
	<path class="st1" d="M325.1,239.7h-30.5c0,3.5,0.8,6.7,2.1,9.4c1.4,2.7,3.2,4.7,5.5,6.1c2.3,1.4,4.8,2.1,7.6,2.1
		c1.9,0,3.6-0.2,5.1-0.7c1.5-0.4,3-1.1,4.5-2.1c1.4-0.9,2.8-1.9,4-3c1.2-1.1,2.8-2.5,4.7-4.3c0.8-0.7,1.9-1,3.4-1
		c1.6,0,2.9,0.4,3.9,1.3c1,0.9,1.5,2.1,1.5,3.7c0,1.4-0.6,3.1-1.7,4.9c-1.1,1.9-2.8,3.7-5,5.4c-2.2,1.7-5,3.2-8.4,4.3
		c-3.4,1.1-7.2,1.7-11.6,1.7c-10,0-17.8-2.9-23.4-8.6c-5.6-5.7-8.3-13.5-8.3-23.3c0-4.6,0.7-8.9,2.1-12.8c1.4-3.9,3.4-7.3,6-10.1
		c2.6-2.8,5.9-5,9.7-6.5c3.8-1.5,8.1-2.3,12.8-2.3c6.1,0,11.3,1.3,15.7,3.9c4.4,2.6,7.6,5.9,9.8,10c2.2,4.1,3.3,8.2,3.3,12.5
		c0,3.9-1.1,6.5-3.4,7.6C332.3,239.1,329.2,239.7,325.1,239.7z M294.6,230.9h28.3c-0.4-5.3-1.8-9.3-4.3-12c-2.5-2.6-5.8-4-9.9-4
		c-3.9,0-7.1,1.3-9.6,4C296.7,221.6,295.1,225.6,294.6,230.9z"/>
	<path class="st1" d="M452.8,239.7c0,2.7-0.7,5.6-2,8.7c-1.3,3.1-3.4,6.2-6.2,9.1c-2.8,3-6.4,5.4-10.8,7.3
		c-4.4,1.9-9.5,2.8-15.3,2.8c-4.4,0-8.4-0.4-12.1-1.3c-3.6-0.8-6.9-2.1-9.9-3.9c-3-1.8-5.7-4.1-8.1-7c-2.2-2.6-4.1-5.6-5.7-8.8
		c-1.6-3.3-2.7-6.7-3.5-10.4c-0.8-3.7-1.2-7.6-1.2-11.8c0-6.7,1-12.8,2.9-18.1c2-5.3,4.8-9.9,8.4-13.7c3.7-3.8,7.9-6.7,12.9-8.7
		c4.9-2,10.1-3,15.7-3c6.8,0,12.8,1.4,18.1,4.1c5.3,2.7,9.3,6,12.2,10c2.8,4,4.2,7.7,4.2,11.3c0,1.9-0.7,3.7-2.1,5.1s-3,2.2-5,2.2
		c-2.2,0-3.8-0.5-4.9-1.5c-1.1-1-2.3-2.8-3.6-5.3c-2.2-4.2-4.8-7.3-7.8-9.3s-6.7-3.1-11.1-3.1c-7,0-12.5,2.6-16.7,7.9
		c-4.1,5.3-6.2,12.8-6.2,22.6c0,6.5,0.9,11.9,2.7,16.3c1.8,4.3,4.4,7.6,7.8,9.7c3.4,2.1,7.3,3.2,11.8,3.2c4.9,0,9-1.2,12.4-3.6
		c3.4-2.4,5.9-6,7.6-10.7c0.7-2.2,1.6-4,2.7-5.4c1.1-1.4,2.8-2.1,5.1-2.1c2,0,3.8,0.7,5.2,2.1C452.1,235.9,452.8,237.6,452.8,239.7z
		"/>
	<path class="st1" d="M482.4,245.1v13c0,3.2-0.7,5.5-2.2,7.1c-1.5,1.6-3.4,2.4-5.7,2.4c-2.2,0-4.1-0.8-5.5-2.4s-2.2-4-2.2-7.1v-43.4
		c0-7,2.5-10.5,7.6-10.5c2.6,0,4.5,0.8,5.6,2.5c1.1,1.6,1.8,4.1,1.9,7.3c1.9-3.2,3.8-5.6,5.7-7.3c2-1.6,4.6-2.5,7.9-2.5
		s6.5,0.8,9.5,2.5c3.1,1.6,4.6,3.8,4.6,6.5c0,1.9-0.7,3.5-2,4.7c-1.3,1.2-2.7,1.9-4.3,1.9c-0.6,0-2-0.4-4.1-1.1
		c-2.2-0.7-4.1-1.1-5.8-1.1c-2.3,0-4.2,0.6-5.6,1.8c-1.4,1.2-2.6,3-3.4,5.3c-0.8,2.4-1.4,5.2-1.7,8.4
		C482.6,236.4,482.4,240.4,482.4,245.1z"/>
	<path class="st1" d="M572.1,235.9c0,4.6-0.7,8.9-2.2,12.9c-1.4,3.9-3.5,7.3-6.3,10.1c-2.7,2.8-6,5-9.8,6.5
		c-3.8,1.5-8.1,2.3-12.9,2.3c-4.7,0-9-0.8-12.7-2.3c-3.8-1.5-7-3.7-9.8-6.5c-2.8-2.8-4.9-6.2-6.3-10.1c-1.4-3.9-2.1-8.1-2.1-12.8
		c0-4.7,0.7-9,2.2-13c1.4-3.9,3.5-7.3,6.2-10.1c2.7-2.8,6-4.9,9.8-6.4c3.8-1.5,8.1-2.3,12.7-2.3c4.7,0,9,0.8,12.9,2.3
		c3.8,1.5,7.1,3.7,9.9,6.5c2.7,2.8,4.8,6.2,6.3,10.1C571.4,226.9,572.1,231.2,572.1,235.9z M556.5,235.9c0-6.4-1.4-11.3-4.2-14.9
		c-2.8-3.5-6.6-5.3-11.3-5.3c-3,0-5.7,0.8-8.1,2.4c-2.3,1.6-4.1,3.9-5.4,7c-1.3,3.1-1.9,6.7-1.9,10.8c0,4.1,0.6,7.6,1.9,10.7
		c1.2,3,3,5.4,5.3,7c2.3,1.6,5,2.4,8.1,2.4c4.7,0,8.5-1.8,11.3-5.3C555.1,247.1,556.5,242.2,556.5,235.9z"/>
	<path class="st1" d="M634.6,247.2c0,4.3-1,8-3.1,11.1c-2.1,3.1-5.2,5.4-9.3,7c-4.1,1.6-9.1,2.4-14.9,2.4c-5.6,0-10.4-0.9-14.4-2.6
		c-4-1.7-7-3.9-8.9-6.4c-1.9-2.6-2.9-5.2-2.9-7.7c0-1.7,0.6-3.2,1.8-4.4c1.2-1.2,2.8-1.8,4.6-1.8c1.6,0,2.9,0.4,3.8,1.2
		c0.9,0.8,1.7,1.9,2.5,3.4c1.6,2.8,3.5,4.9,5.7,6.2c2.2,1.4,5.3,2.1,9.1,2.1c3.1,0,5.7-0.7,7.7-2.1c2-1.4,3-3,3-4.8
		c0-2.7-1-4.7-3.1-6c-2.1-1.3-5.5-2.5-10.3-3.6c-5.4-1.3-9.7-2.7-13.1-4.2c-3.4-1.5-6.1-3.4-8.1-5.8s-3-5.4-3-8.9
		c0-3.1,0.9-6.1,2.8-8.9c1.9-2.8,4.6-5,8.3-6.7c3.6-1.7,8-2.5,13.2-2.5c4,0,7.7,0.4,10.9,1.3c3.2,0.8,5.9,2,8.1,3.4
		c2.2,1.4,3.8,3,4.9,4.7c1.1,1.7,1.7,3.4,1.7,5c0,1.8-0.6,3.3-1.8,4.4c-1.2,1.1-2.9,1.7-5.1,1.7c-1.6,0-3-0.5-4.1-1.4
		c-1.1-0.9-2.4-2.3-3.9-4.1c-1.2-1.5-2.6-2.7-4.2-3.7s-3.8-1.4-6.5-1.4c-2.8,0-5.2,0.6-7,1.8c-1.9,1.2-2.8,2.7-2.8,4.5
		c0,1.6,0.7,3,2.1,4c1.4,1,3.2,1.9,5.5,2.6s5.5,1.5,9.6,2.5c4.8,1.2,8.8,2.6,11.9,4.2c3.1,1.6,5.4,3.6,7,5.8
		C633.8,241.8,634.6,244.4,634.6,247.2z"/>
	<path class="st1" d="M698.1,247.2c0,4.3-1,8-3.1,11.1c-2.1,3.1-5.2,5.4-9.3,7c-4.1,1.6-9.1,2.4-14.9,2.4c-5.6,0-10.4-0.9-14.4-2.6
		c-4-1.7-7-3.9-8.9-6.4c-1.9-2.6-2.9-5.2-2.9-7.7c0-1.7,0.6-3.2,1.8-4.4c1.2-1.2,2.8-1.8,4.6-1.8c1.6,0,2.9,0.4,3.8,1.2
		c0.9,0.8,1.7,1.9,2.5,3.4c1.6,2.8,3.5,4.9,5.7,6.2c2.2,1.4,5.3,2.1,9.1,2.1c3.1,0,5.7-0.7,7.7-2.1c2-1.4,3-3,3-4.8
		c0-2.7-1-4.7-3.1-6c-2.1-1.3-5.5-2.5-10.3-3.6c-5.4-1.3-9.7-2.7-13.1-4.2c-3.4-1.5-6.1-3.4-8.1-5.8s-3-5.4-3-8.9
		c0-3.1,0.9-6.1,2.8-8.9c1.9-2.8,4.6-5,8.3-6.7c3.6-1.7,8-2.5,13.2-2.5c4,0,7.7,0.4,10.9,1.3c3.2,0.8,5.9,2,8.1,3.4
		c2.2,1.4,3.8,3,4.9,4.7c1.1,1.7,1.7,3.4,1.7,5c0,1.8-0.6,3.3-1.8,4.4c-1.2,1.1-2.9,1.7-5.1,1.7c-1.6,0-3-0.5-4.1-1.4
		c-1.1-0.9-2.4-2.3-3.9-4.1c-1.2-1.5-2.6-2.7-4.2-3.7s-3.8-1.4-6.5-1.4c-2.8,0-5.2,0.6-7,1.8c-1.9,1.2-2.8,2.7-2.8,4.5
		c0,1.6,0.7,3,2.1,4c1.4,1,3.2,1.9,5.5,2.6s5.5,1.5,9.6,2.5c4.8,1.2,8.8,2.6,11.9,4.2c3.1,1.6,5.4,3.6,7,5.8
		C697.3,241.8,698.1,244.4,698.1,247.2z"/>
</g>


</svg>

        <!-- <h1 class="mx-auto my-0 text-uppercase">Blue Cross Hospital</h1> -->
        <h2 class="text-white-50 mx-auto mt-2 mb-5">Where healthcare comes first</h2>
        <a href="{{('/register')}}" class="btn btn-primary js-scroll-trigger">Get Started</a>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section id="about" class="about-section text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 class="text-white mb-4">About Us</h2>
          <p class="text-white-50">Just like Adhaar card number, we would like to introduce Patient Access card number, which will be the unique medical identification card for every individual. This number would give the details of a person's health records.This acts as the key element for our hospital website model. 
</p>
<img src="img/icon.png"  style="opacity:0.5;" class="img-fluid" alt="">

        </div>
      </div>
      
    </div>
  </section>

  <!-- Projects Section-->
  <section id="projects" class="projects-section bg-light" data-aos="fade-up" data-aos-offset="300" data-aos-duration="5000">
    <div class="container">

      <!-- Featured Project Row -->
      <div class="row align-items-center no-gutters mb-4 mb-lg-5">
        <div class="col-xl-8 col-lg-7">
          <img class="img-fluid mb-3 mb-lg-0" src="img/heart.jpg" alt="">
        </div>
        <div class="col-xl-4 col-lg-5">
          <div class="featured-text text-center text-lg-left">
            <h4>How we work</h4>
            <p class="text-black-50 mb-0"> Our website Blue Cross  is the new approach to the present day scenarios of hospitals. Though there are tremendous developments in the field of medicines , we can still find hindrance in the process of development. To overcome few of these inconveniences we have come up with  a website Blue Cross  which mainly focuses on creating a interface between physicians and patients.  
</p>
          </div>
        </div>
      </div>

      <!-- Project One Row --
      <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
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

       Project Two Row -->
      <div class="row justify-content-center no-gutters" data-aos="fade-up" data-aos-offset="300" data-aos-duration="5000">
        <div class="col-lg-6">
          <img class="img-fluid" src="" alt=""> 
           <!-- images sent -->
        </div>
        <div class="col-lg-6 order-lg-first">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-left text-lg-left">
                <h4 class="text-white text-center">Services</h4>
                <p class="mb-0 text-white-50"><ul class="text-white-50"><li>Access to online pharmacy.</li>  
<li>Digitalized medical reports and records of the patient which can be accessed only by authorised people.</li> 
<li>Online report database of patients, there will be no hindrance when the patient changes from one doctor to another or takes up a second opinion.</li>
<li>Feature to call ambulance to the location.</li>

<li>Patient and doctor login.</li> 
<li>Based on the patient symptom inputs, it auto-detects the department.</li> 
<li>Options for patients to select the doctors based on department and availability.</li>  
<li>Communication between patient and doctor :<br> 
&nbsp&nbspThe patient has the option to contact the doctor through online feed and get the doubts clarified. They can post things online to communicate with the respective departments n will get notified through SMS as soon as the doctor replies.</li></ul>
</p>
                <hr class="d-none d-lg-block mb-0 mr-0">
              </div>
            </div>
          </div>
        </div>
      </div>

    </div> 
</section>  
 <!--Signup Section -->
  <!-- <section id="signup" class="signup-section">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-lg-8 mx-auto text-center">

          <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
          <h2 class="text-white mb-5">Subscribe to receive updates!</h2>

          <form class="form-inline d-flex">
            <input type="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" placeholder="Enter email address...">
            <button type="submit" class="btn btn-primary mx-auto">Subscribe</button>
          </form>

        </div>
      </div>-->
    </div>
  </section> 

  <!-- Contact Section -->
  <section class="contact-section bg-black">
    <div class="container">
    <div class = "text-center">
    <!-- <img src="img/icon.png"  style="opacity:0.5;" class="img-fluid" alt=""> -->
    </div>
      <div class="row">

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-map-marked-alt text-dark mb-2"></i>
              <h4 class="text-uppercase m-0">Address</h4>
              <hr class="my-4">
              <div class="small text-black-50">Blue Cross Hospital, K R Circle, Dr.Ambedkar Veedhi, Bengaluru</div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-envelope text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Email</h4>
              <hr class="my-4">
              <div class="small text-black-50">
                <a href="#">bluecross@gmail.com</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-mobile-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Phone</h4>
              <hr class="my-4">
              <div class="small text-black-50">+91 8217796059</div>
              <div class="small text-black-50">+91 9591097654</div>
              <div class="small text-black-50">+91 9900192140</div>
            </div>
          </div>
        </div>
      </div>

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
  </section>

  <!-- Footer -->
  <footer class="bg-black small text-center text-white-50">
    <div class="container bg-black small text-center text-white-50">
      Copyright &copy; BlueCross 2019
    </div>
  </footer>
  <script>
  AOS.init();
</script>
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/grayscale.min.js"></script>

</body>

</html>
<!-- About:  
Our website Blue Cross  is the new approach to the present day scenarios of hospitals. Though there are tremendous developments in the field of medicines , we can still find hindrance in the process of development. To overcome few of these inconveniences we have come up with  a website Blue Cross  which mainly focuses on creating a interface between physicians and patients. 

How does this work? 
    As like Adhaar card number  , we would like to  introduce Patient Access card number, which will be the unique medical  identification card for every individual.This number would give the details of a person's health records.This acts as the key element for our hospital website model.

 
Aspects our website deals with:
-Patient n doctor login 
-Based on the patient symptom inputs, it auto detects the department 
-Options for patients to select the doctors based on department and availability 
-Options for doctor to select the patients
-Communication between  patient and doctor : 
    The patient has the option to contact the doctor through online feed after or before appointment and get the doubts clarified. He/She can post things online to communicate with the respective departments n will get notified through SMS as soon as the doctor replies.




-Access to online pharmacy
-Digitalized medical reports n records of the patient which can be accessed only by authorised people 
-Online report database of patients, there will be no hinderance when the patient changes from one doctor to another or takes up a second opinion.
-Feature to call ambulance to the location -->