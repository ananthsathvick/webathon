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
        <!-- Styleskk -->
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
            .sub {
                margin:auto;
                font-size: 20px;
                color: white;
  text-shadow: 2px 2px 4px black;
                text-align:center;
                position:relative;
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
                   color:#636b6f;
                   background:black;
                   

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
            body  {
        background-image:url("img/hush.jpg");
        background-repeat: no-repeat;
        background-size:cover;
        background-position: center;
        background-attachment:fixed;
        height:100%;
        position:relative;
       }
       @media only screen and (max-device-width: 1024px) {
  body {
    background-attachment: scroll;
  }
}
@media only screen and (max-device-width: 425px){
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
    .bars {
        font-size:20px;
    }
    .title {
        font-size:60px;
    }
    .sub{
        padding:0 0 0 0;
        transform:translate(0%,60%);
    }
   
}
        </style>
  </head>
            <body >
  
    <!-- <div class="navigation"> -->
      <!-- <div class="nav-content"> -->
        <div class="flex-center position-ref navigation">
            @if (Route::has('login'))
            <span style="font-size:30px;cursor:pointer" class="bars" onclick="openNav(x)">&nbsp &#9776; </span>
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

            <div class="bg"></div>
            <div id="mySidenav" class="sidenav">
            <!-- <a href="javascript:void(0)" class="closebar" onclick="closeNav(x)">&#9776;</a> -->
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav(x)">&times;</a>
  <a href="#about" onclick="closeNav(x)" >About</a>
  <a href="#services" onclick="closeNav(x)">Services</a>
  <a href="#contact" onclick="closeNav(x)">Contact</a>
</div>
<section>
<div data-aos="fade-up"
     data-aos-duration="3000"><div class="title"> Welcome to Aegle Hospitals</div>
     <div class="sub">WHERE TECHNOLOGY MEETS HEALTHCARE</div>
</div>

  </section>     
  <section data-aos="fade-up"
  data-aos-anchor-placement="top-center" class="heade" name="services">
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

</section>

           </body>
         <footer>
         <!-- <i class="fas fa-ellipsis-v"></i> -->
         </footer>
</html>
