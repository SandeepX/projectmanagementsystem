
@extends('layouts.app')

@section('content')

<div class="container">

<div class="row col-md-12 col-lg-12 col-sm-12 " style="background-color: white;">
	
		
			<form class="form-horizontal col-sm-10 col-lg-10 col-sm-10"  style="background-color: white;"method="post" action="{{route('projects.store')}}" >
				<h1>Create new project</h1>
				@csrf()
    		
					  <div class="form-group">
					    <label class="control-label col-sm-4" for="project-name">Name</label>
					    <div class="col-sm-9">
					      <input placeholder="Enter name" class="form-control" id="project-name" required name="name" spellcheck="false" autofocus /> 
					    </div>
					  </div>


				@if($companies == null)

					  <input type="hidden"
					  		value="{{$company_id}}" 
					        name="company_id"   
					   		/>

				@endif 		     

				@if($companies != null)
				  <div class="form-group ">
				  	<label class="control-label col-sm-4" for="company-content">select company</label>

				  	<div class="col-sm-9">
				  	<select name="company_id" class="form-control">

					    @foreach($companies as $company)
						  	<option class="control-label col-sm-4" style="background-color: default;" value="{{$company->id}}">{{$company->name}}</option>
						@endforeach	
					</select>
					</div>
				  </div>
				  @endif


				  <div class="form-group">
					   <label class="control-label col-sm-4" for="project-content">Description</label>
					    <div class="col-sm-9">
					      <textarea placeholder="Write description"
					        style="resize: vertical"		        
					        id="project-content"
					        rows="7" cols="50" 
					        name="description" 
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
			
    
      <div class="sidebar-module col-md-2 col-lg-2 col-sm-2 pull-right">
          <h4>Action</h4>
            <ol class="list-unstyled">
              <li><a href="/projects">My projects</a></li>

            </ol>
      </div>  
</div>
</div>

@endsection