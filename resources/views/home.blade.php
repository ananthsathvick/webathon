@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Patient Details</div>

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

                    
                    
                    

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
