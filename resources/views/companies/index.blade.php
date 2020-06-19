

@extends('layouts.app')

 @section('content')

<div class="container">  

  <div class ="col-md-6 col-lg-6 col-md-offset-10" style="
  border-width: 50px;border-color: blue;">
    <div class="panel panel-primary" >
      <div class="panel-heading" > Companies <a  class ="pull-left btn btn-primary btn-sm" href="/companies/create">Create New </a></div>
      <div class="panel-body">
        
            <ul class="list-group">
            @foreach($companies as $company)  
              <li class="list-group-item"><a href="/companies/{{$company->id}}">{{$company->name}}</li>
            @endforeach
            </ul>



      </div>
    </div>
  <div> 
</div>
@endsection
