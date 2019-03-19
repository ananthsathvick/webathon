@extends('layouts.app')

@section('content')
<div class="container ">
<div class="justify-content-center">
<div class="card">
  <h5 class="card-header">Create Post</h5>
  <div class="card-body">
  <form >
    @csrf
    
    <div class="form-group">
  <textarea rows="4" class="form-control" aria-label="With textarea" name="symptom" placeholder="What's happening in your body ?... Let us know"></textarea>
</div>

    <div class="form-group ">
    <label for="tags" class="sr-only">Password</label>
    <input type="text" class="form-control" id="tags" placeholder="Department">
    </div>

    
    </form>
    <a href="#" class="btn btn-primary">Post</a>
  </div>
</div>
</div>
</div>
@endsection
