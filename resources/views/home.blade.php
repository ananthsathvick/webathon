@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>Welcome to the Hospitals</strong></div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif




                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                <h4>Patient Access Number : {{ Auth::user()->id }} </h4>
                                <h5>Name : {{ Auth::user()->name }} </h5>
                                <h5>Gender : {{ ucfirst(Auth::user()->gender) }} </h5>
                            </div>
                            <div class="col-sm">
                                @if((Auth::user()->photo_link)== NULL)
                                @if((Auth::user()->gender)=="male")
                                <img id="pic" src="/img/male_template.png" height="200" width="200" alt="Male Template" class="img-thumbnail rounded float-md-right">
                                @else
                                <img id="pic" src="/img/female_template.jpg" height="200" width="200" alt="Image Template" class="img-thumbnail rounded float-md-right">
                                @endif

                                @else
                                Yo!
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="accordion" id="accordionExample" class="panel-group">
                        @foreach($all_res as $key => $res)
                        @if(count($res)==0)
                        @continue;
                        @endif
                        <div class="card">

                            <button class="card-header btn panel-heading collapsed" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                <h5 class="text-left mb-0">{{ucfirst(str_replace("_"," ",$key))}}</h5>
                            </button>


                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="">
                                <section class="compcontent">
                                    <table class="table table-striped card-body">
                                        <thead>
                                            <tr>
                                                <th scope="col">Spec</th>
                                                <th scope="col">Value</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($res as $re)
                                            <tr>
                                                <th scope="row">{{$re->spec}}</th>
                                                <td><strong></strong>{{$re->value}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </section>

                            </div>

                        </div>

                        @endforeach


                    </div>
                </div>

            </div>

            @if( Session::has("success") )
            <div class="alert alert-success alert-block" role="alert">
                <button class="close" data-dismiss="alert"></button>
                {{ Session::get("success") }}
            </div>
            @endif


            @if( Session::has("error") )
            <div class="alert alert-danger alert-block" role="alert">
                <button class="close" data-dismiss="alert"></button>
                {{ Session::get("error") }}
            </div>
            @endif
            <div class="flash-message "></div>



            <div class="card-deck mt-4">

                <div class="card">
                    <img src="/img/ambulance.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Call Ambulance</h5>
                        <p class="card-text"><strong>Emergency ??</strong></p>
                        <p>Don't need to worry...! Call ambulance to your location with just one click.</p>
                        <button type="button" class="btn btn-secondary btn-lg btn-block" onclick="getLocation()">Call Now</button>
                    </div>
                </div>

                <div class="card">
                    <img src="" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Online Booking of Appointment</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>


                <div class="card">
                    <img src="/img/Medplus_logo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Order Medicines Online</h5>
                        <p class="card-text">MedPlus is one of India's leading healthcare companies with an ever-growing number of pharmacy stores.</p>
                        <p class="card-text"><small class="text-muted">- Trusted Brand Partner</small></p>
                        <a href="https://www.medplusmart.com/"><button type="button" class="btn btn-secondary btn-lg btn-block">Order Now</button></a>
                    </div>
                </div>


            </div>












        </div>
    </div>

    <script>
        //var x = document.getElementById("demo");

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                x.innerHTML = "Geolocation is not supported by this browser.";
            }
        }

        function showPosition(position) {
            //x.innerHTML = "Latitude: " + position.coords.latitude + 
            //"<br>Longitude: " + position.coords.longitude;
            $val = "http://maps.google.com/?q=" + position.coords.latitude + "," + position.coords.longitude;
            $.ajax({
                type: 'get',
                url: '{{URL::to('ambi')}}',
                data: {
                    'search': $val,'phone': {{Auth::user()->phone}},
                },
                success: function(data) {


                    console.log(data);
                    if (data == "success") {
                        $('div.flash-message').addClass("mt-2 alert alert-success text-center font-weight-bold");
                        $('div.flash-message').html("Ambulance will arrive soon...");
                        setTimeout(
                        function() 
                        {
                            $('div.flash-message').hide();

                            //do something special
                        }, 3000);




                    }




                }
            });
            //   console.log("http://maps.google.com/?q="+position.coords.latitude + 
            //   "," + position.coords.longitude);
        }
    </script>
    @endsection 