
 @extends('layouts.app')

 @section('content')

<div class="row">
  <div class="col-md-9 col-lg-9  col-sm-9 pull-left">
     <div class="container">        

        <div class="jumbotron">
          <h1>{{$user->name}}</h1>
          <p class="lead">{{$user->email}}</p>
         <!-- <p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p> -->
        </div>
      </div>

        <div class="row col-md-12 col-lg-12 col-sm-12" style="background: white;">
           <a href="/companies/create" class="pull-right btn btn-success
            btn-md" style="line-height:15px;">Add company</a>
            
           <div class="row">
              @foreach($user->companies as $company)
                  <div class="col-lg-4">
                    <h2>{{$company->name}}</h2>
                    <p class="text-danger">{{$company->description}}</p>
                   
                    <p><a class="btn btn-primary"  href="/companies/{{$company->id}}" role="button">view companies »</a></p>
                  </div>
              @endforeach    
            </div>
       </div>
  </div>


  <div class="col-sm-3 col-md-3 col-lg-3 pull-right">
    <!--  <div class="sidebar-module sidebar-module-inset">
        <h4>About</h4>
        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
      </div>
    --> 

    <div class="sidebar-module">
          <h4>Action</h4>
            <ol class="list-unstyled">
              <li><a href="/companies"><i class="fas fa-eye">All users</i></a></li>
              


             <li> <a 
              href="#"
                          onClick="
                          var result= confirm('Are you sure yo want to delete this user?');
                          if(result){
                            event.preventDefault();
                            document.getElementById('delete-form').submit();
                          } 
                            "
                        >  
                    <i class="fas fa-trash-alt">
                     Delete
             </i></a>

             <form id= "delete-form" action = "{{route('users.destroy', [$user->id]) }}" method ="post" style ="display:none;">

                      <input type="hidden" name="_method" value="delete">
                      {{csrf_field()}}

              </form></li> 
                           
            </ol>
        </div>
   
  </div>
</div>

@endsection  
     
