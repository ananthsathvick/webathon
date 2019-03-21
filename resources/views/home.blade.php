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
                    <div class="card-deck mt-4">
                    <!-- <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div> -->

                        <div class="card">
                            <img src="/img/Medplus_logo.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Order Medicines Online</h5>
                                <p class="card-text">MedPlus is one of India's leading healthcare companies with an ever-growing number of pharmacy stores, online pharmacy, path labs and optical services.</p>
                                <p class="card-text"><small class="text-muted">- Trusted Brand Partner</small></p>
                                <a href="https://www.medplusmart.com/"><button type="button" class="btn btn-secondary btn-lg btn-block">Order Now</button></a>
                            </div>
                        </div>
                        
                        <!-- <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div> -->
                    </div>







                

          


        </div>
    </div>
    @endsection 