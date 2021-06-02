@extends('job.layout')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add new job</h2>
        </div>
        <div class="pull-right">

        <a class="btn btn-success" href="{{route('job.index')}}">Back</a>
        </div>
        </div>
        </div>
      
@if($errors->any())
    <div class="alert alert-danger">
        <strong>whoops!</strong>There were some problems with your input<br><br>
        <ul>

        @foreach($errors->all() as $errors)
            <li>{{error}}</li>

        @endforeach
        </ul>
        </div>
@endif
    <form action=""method="POST">
   
    @csrf
     <div class="rows">
        <div class="col-xs-12 col-sm-12 col-md-12">
        <strong>Job</strong>
        <input type="text" name="Job" placeholder="Job">
    
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">
        <strong>Job Description</strong>
        <input type="text" name="Job Description" placeholder="Job Description">
    
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">
        <strong>Job Requirements</strong>
        <input type="text" name="Job Requirements" placeholder="Job Requirements">

        </div>
    </div>

    <div class="col-xs-12 col-sm-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </div>
    </form>


