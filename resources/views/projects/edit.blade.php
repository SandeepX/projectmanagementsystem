
@extends('layouts.app')

@section('content')
 
<div class="row col-md-12 col-lg-12 col-sm-12">
	
		
			<form class="form-horizontal col-sm-10 col-lg-10 col-sm-10" method="post" action="{{route('projects.update',[$project->id])}}" >
				<h1>update project</h1>
				@csrf()
    		<input type="hidden" name="_method" value="PUT">

					  <div class="form-group">
					    <label class="control-label col-sm-4" for="project-name">Name</label>
					    <div class="col-sm-9">
					      <input placeholder="Enter name" class="form-control" id="project-name" required name="name" spellcheck="false" autofocus value="
					      {{$project->name}}"/>
					    </div>
					  </div>

				  <div class="form-group">
					   <label class="control-label col-sm-4" for="project-name">Description</label>
					    <div class="col-sm-9">
					      <textarea placeholder="Write description"
					        style="resize: vertical"		        
					        id="project-content"
					        rows="7" cols="50" 
					        name="description" 
					        spellcheck="false" 
					        autofocus 
					        class="form-control autosize-target text-left">
					        {{$project->description}}  
					      </textarea>       	
					   </div>
				  </div>
				 
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-primary" value="submit">Submit</button>
				    </div>
				  </div>
			</form>
			
    
      <div class="sidebar-module col-md-2 col-lg-2 col-sm-2 pull-right">
          <h4>Action</h4>
            <ol class="list-unstyled">
              <li><a href="/projects/{{$project->id}}">View projects</a></li>
              <li><a href="/projects">All projects</a></li>

            </ol>
      </div>  
</div>



@endsection