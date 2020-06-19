

@extends('layouts.app')

 @section('content')

<div class="container">  

  <div class ="col-md-6 col-lg-6 col-md-offset-10" style="
  border-width: 50px;border-color: blue;">
    <div class="panel panel-primary" >
      <div class="panel-heading" > projects <a  class ="pull-left btn btn-primary btn-sm" href="/projects/create">Create New </a></div>
      <div class="panel-body">
        
            <ul class="list-group">
            @foreach($projects as $project)  
              <li class="list-group-item"><a href="/projects/{{$project->id}}">{{$project->name}}</li>
            @endforeach
            </ul>



      </div>
    </div>
  <div> 
</div>
@endsection
