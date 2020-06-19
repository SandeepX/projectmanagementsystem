
 @extends('layouts.app')

 @section('content')

<div class="row">
  <div class="col-md-9 col-lg-9  col-sm-9 pull-left">
      <div class="container">        

            <div class="well-well-lg" style="background-color: white;">
              <h1 style="background-color: grey;">{{$project->name}}</h1>
              <p class="lead">{{$project->description}}</p>
            </div>
      

            <div class="row col-md-12 col-lg-12 col-sm-12" style="background:default; ">
               
                        

            

        <div class="row container-fluid col-sm-12 col-lg-12 col-sm-12 ">

           @include('partials.comments')

            

          <form class="form-horizontal col-sm-12 col-lg-12 col-sm-12" style="margin-top: 50px;" method="post" action="{{route('comments.store')}}" >
       
               @csrf()
            <input type="hidden" name="commentable_type" value="App\Project">
            <input type="hidden" name="commentable_id" value="{{$project->id}}">

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

         </div>
     </div>
</div>


  

  <div class="col-sm-3 col-md-3 col-lg-3 pull-right">
    <div class="sidebar-module">
          <h4>Action</h4>
            <ol class="list-unstyled">
              <li><a href="/projects/{{$project->id}}/edit"><i class="fas fa-edit">Edit</i></a></li>
              <li><a href="/projects/create"><i class="fas fa-calendar-plus">create new project</i></a></li>
              <li><a href="/projects"><i class="fas fa-eye">My project</i></a></li>


              @if(($project->user_id) == Auth::user()->id)
             <li> <a 
              href="#"
                          onClick="
                          var result= confirm('Are you sure yo want to delete this project?');
                          if(result){
                             event.preventDefault();
                            document.getElementById('delete-form').submit();
                          } 
                            "
                        >  <i class="fas fa-trash-alt">
                     Delete
             </i></a>

             <form id= "delete-form" action = "{{route('projects.destroy',   [$project->id]) }}" method ="post" style ="display:none;">

                      <input type="hidden" name="_method" value="delete">
                      {{csrf_field()}}

              </form></li>    
              @endif                     
            </ol>

            <br>
            <hr/>
                <h4>Add memebers</h4>
                          <div class="row">
                              <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                <form id="add-user" action="{{route('projects.adduser')}}" method="post">
                               {{csrf_field()}}
                                  <div class="input-group">
                                    <input type="text" class="form-control" name="email" style="border-color: blue;" autofocus placeholder="Email...">
                                    <input type="hidden" class="form-control" name="project_id" value="{{$project->id}}" >

                                    <span class="input-group-btn">
                                      <button class="btn btn-success"  type="submit">Add!</button>
                                    </span>
                                  </div><!-- /input-group -->
                                </form>
                              </div><!-- /.col-lg-6 -->
                         </div><!-- /.row -->
                         <br>
                         <h4>Team Members</h4>
                          <ol class="list-unstyled">
                            @foreach($project->users as $user)
                            <li><a href="/users/{{$user->id}}"><i class="fas fa-meh-blank">{{$user->email}}</i></a></li>   
                            @endforeach                         
                          </ol>




        </div>     
  </div>
</div>


@endsection  
     

  