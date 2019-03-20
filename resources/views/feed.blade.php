@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="justify-content-center">
        <div class="card">
            <h5 class="card-header">Create Post</h5>
            <div class="card-body">
                <form method="POST" action="{{('/post')}}">
                    @csrf
                    <input hidden name="patient_id" value="{{$patient->id}}">
                    <div class="form-group">
                        <textarea rows="4" class="form-control" aria-label="With textarea" name="symptom" placeholder="What's happening in your body ?... Let us know" id="search"></textarea>
                    </div>

                    <div class="form-group ">
                        <label for="tags" class="sr-only">Department</label>
                        <input type="text" class="form-control" id="tags" placeholder="Department" name="department" readonly>
                    </div>



                    <button type="submit" class="btn btn-primary">Post</button>
            </div>
        </div>
        </form>
   

@if(count($post)==0)
<footer class="blockquote-footer text-center">Start here by stating your <cite title="Source Title">Symptoms</cite></footer>
@else
  @foreach($post as $pos)
  <div class="card mt-2">
  <div class="card-body">
    <p class="card-title "><span class="font-weight-bold">{{$patient->name}}</span> <span class="blockquote-footer"  style="display:initial;"><span class="font-italic">{{$pos->department}}</span>
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
    
    @endif </span> </p>
    {{$pos->description}}
    <div class="dropdown-divider"></div>
    <i class="fas fa-comment-alt">Comment</i>
    @foreach($comment as $commen)
      @foreach($commen as $comm)
    @if($comm->post_id == $pos->id)
    <div class="dropdown-divider"></div>
    <span class="font-weight-bold">{{$comm->posted_by}}</span>-{{$comm->comment}}
    @endif
    @endforeach
    @endforeach
    <form method="POST" action="{{('/comments')}}">
        @csrf
        <div class="input-group ">
            <input hidden name="post_id" value="{{$pos->id}}">
            <input hidden name="posted_by" value="{{$patient->name}}">
            <input hidden name="doc_id" value="0">
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

<script>
    $(document).ready(function() {

        $('#search').on('keyup', function() {
            $value = $(this).val();
            $value = $value.split(" ").pop();
            if (($value == "") || ($value.length <= 2)) {
                return;
            }
            console.log($value);
            $.ajax({
                type: 'get',
                url: '{{URL::to('search')}}',
                data: {
                    'search': $value
                },
                success: function(data) {
                    if ($('#tags').val() == '') {
                        if (data) {
                            $('#tags').val(data);


                        }
                    }
                }
            });
        });

    });
</script>
@endsection 