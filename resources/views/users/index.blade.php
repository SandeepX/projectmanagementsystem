

@extends('layouts.app')

 @section('content')

<div class="container">  

  <div class ="col-md-6 col-lg-6 col-md-offset-10" style="
  border-width: 50px;border-color: blue;">
    <div class="panel panel-primary" >
      <div class="panel-heading" >All Users
        
      <div class="panel-body">
        
            <ul class="list-group">
            @foreach($users as $user)  
              <li class="list-group-item"><a href="/users/{{$user->id}}">{{$user->name}}</li>
            @endforeach
            </ul>

            <br>



      </div>
    </div>
  <div> 
</div>
@endsection
