@extends('layouts.admin-app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card ">
                <div class="card-header font-weight-bold"><h5>{{ucfirst($admin->specification)}} Department </h5></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Hello there Dr.{{$admin->name}} 
                </div>
            </div>
        
        
        @if(count($post)==0)
        <footer class="blockquote-footer text-center">Thanks for your <cite title="Source Title">Patience</cite></footer>
        @else
        @foreach($post as $index => $pos)
        <div class="card mt-2 shadow">
        <div class="card-body">
        <p class="card-title "><span class="font-weight-bold "><a href="{{('/detail/'.$patient[$index]->id.'')}}" class="text-dark">{{$patient[$index]->name}}</a></span> <span class="blockquote-footer"  style="display:initial;"><span class="font-italic">
        @if($CT->diffInMinutes($pos->updated_at)< 60)
        {{$CT->diffInMinutes($pos->updated_at)." minutes ago"}}
        @elseif($CT->diffInHours($pos->updated_at)< 24)
        {{$CT->diffInHours($pos->updated_at)." hours ago"}}
        @elseif($CT->diffInDays($pos->updated_at)< 30)
        {{$CT->diffInDays($pos->updated_at)." days ago"}}
        @elseif($CT->diffInMonths($pos->updated_at)< 12)
        {{$CT->diffInMonths($pos->updated_at)." months ago"}}
        @else
        {{$CT->diffInYears($pos->updated_at)." months ago"}}
        @endif
        </span> </p>
        {{$pos->description}}
        <div class="dropdown-divider"></div>
        <i class="fas fa-comment-alt mb-2"> Comment</i>
        @foreach($comment as $commen)
        @foreach($commen as $comm)
        @if($comm->post_id == $pos->id)
        <div class="dropdown-divider"></div>
        <span class="font-weight-bold">{{$comm->posted_by}}</span>-{{$comm->comment}}
        @endif
        @endforeach
        @endforeach


        <form method="POST" action="{{('/comment')}}">
        @csrf
        <div class="input-group ">
            <input hidden name="post_id" value="{{$pos->id}}">
            <input hidden name="posted_by" value="Dr.{{$admin->name}}">
            <input hidden name="doc_id" value="{{$admin->id}}">
            <input type="text" class="form-control" placeholder="Comment..." aria-label="Comment" name="comment" aria-describedby="basic-addon1">
            <input hidden type="submit" value="Submit">
            </div>
        </form>
        
            </div>
        </div>
    @endforeach
    @endif
    </div>
        </div>
        </div>
    <script>
//         $(document).ready(function() {

// $('#search').on('keyup', function() {
//     $value = $(this).val();
//     $value = $value.split(" ").pop();
//     if (($value == "") || ($value.length <= 2)) {
//         return;
//     }
//     console.log($value);
//     $.ajax({
//         type: 'get',
//         url: '{{URL::to('search')}}',
//         data: {
//             'search': $value
//         },
//         success: function(data) {
//             if ($('#tags').val() == '') {
//                 if (data) {
//                     $('#tags').val(data);


//                 }
//             }
//         }
//     });
// });

// });

    </script>
@endsection
