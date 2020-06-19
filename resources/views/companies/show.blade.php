
 @extends('layouts.app')

 @section('content')

<div class="row">
  <div class="col-md-9 col-lg-9  col-sm-9 pull-left">
     <div class="container">        

        <div class="jumbotron">
          <h1>{{$company->name}}</h1>
          <p class="lead">{{$company->description}}</p>
         <!-- <p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p> -->
        </div>
      </div>

        <div class="row col-md-12 col-lg-12 col-sm-12" style="background: white;">
           <a href="/projects/create" class="pull-right btn btn-success
            btn-md" style="line-height:15px;">Add Project</a>
            
           <div class="row">
              @foreach($company->projects as $project)
                  <div class="col-lg-4">
                    <h2>{{$project->name}}</h2>
                    <p class="text-danger">{{$project->description}}</p>
                   
                    <p><a class="btn btn-primary"  href="/projects/{{$project->id}}" role="button">view projects »</a></p>
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
              <li><a href="/companies/{{$company->id}}/edit"><i class="fas fa-edit">Edit</i></a></li>
              <li><a href="/projects/create/{{$company->id}}"><i class="fas fa-calendar-plus">Add project</i></a></li>
              <li><a href="/companies"><i class="fas fa-eye">My company</i></a></li>
              <li><a href="/companies/create"><i class="far fa-calendar-plus">Add company</i></a></li>


               @if(($company->user_id) == Auth::user()->id)
             <li> <a 
              href="#"
                          onClick="
                          var result= confirm('Are you sure yo want to delete this project?');
                          if(result){
                            event.preventDefault();
                            document.getElementById('delete-form').submit();
                          } 
                            "
                        >  
                    <i class="fas fa-trash-alt">
                     Delete
             </i></a>

             <form id= "delete-form" action = "{{route('companies.destroy', [$company->id]) }}" method ="post" style ="display:none;">

                      <input type="hidden" name="_method" value="delete">
                      {{csrf_field()}}

              </form></li> 
                 @endif               
            </ol>
        </div>


   <!--   <div class="sidebar-module">
        <h4>Members</h4>
          <ol class="list-unstyled">
            <li><a href="#">March 2014</a></li>            
          </ol>
      </div>    -->       
  </div>
</div>

<div class="jumbotron">
        
        @include('partials.comments')
</div>
  


<form class="form-horizontal col-sm-12 col-lg-12 col-sm-12" style="margin-top: 50px;" method="post" action="{{route('comments.store')}}" >
       
               @csrf()
            <input type="hidden" name="commentable_type" value="App\Company">
            <input type="hidden" name="commentable_id" value="{{$company->id}}">

          <div class="form-group">
             <label class="control-label col-sm-12" for="comment-content"><strong>Comment</strong></label>
              <div class="col-sm-9">
                <textarea placeholder="comment section"
                  style="resize: vertical"            
                  id="comment-content"
                  rows="2"  cols="50" 
                  name="body" 
                  spellcheck="false" 
                  autofocus 
                  class="form-control autosize-target text-left">            
                </textarea>         
             </div>
          </div>


         
         
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary" value="submit">Submit</button>
            </div>
          </div>
      </form>
    </div> 

  

@endsection  
     
