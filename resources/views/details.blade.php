@extends('layouts.admin-app')

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
                                <h4>Patient Access Number : {{$user->id }} </h4>
                                <h5>Name : {{ $user->name }} </h5>
                                <h5>Gender : {{ ucfirst($user->gender) }} </h5>
                            </div>
                            <div class="col-sm">
                                @if(($user->photo_link)== NULL)
                                @if(($user->gender)=="male")
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
        

        
    </div>
</div>
@endsection 