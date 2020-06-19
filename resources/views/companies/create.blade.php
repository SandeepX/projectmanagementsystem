
@extends('layouts.app')

@section('content')

<div class="container">
 

 
<div class="row centered-form col-md-12 col-lg-12 col-sm-12  pull-right" style="background:white;">
	
	
		
			<form class="form-horizontal col-sm-10 col-lg-10 col-sm-10" method="post" action="{{route('companies.store')}}" >
				<h1 >Create new Company</h1>
				@csrf()
    		
					  <div class="form-group">
					    <label class="control-label col-sm-4" for="company-name">Name</label>
					    <div class="col-sm-9">
					      <input placeholder="Enter name" class="form-control" id="company-name" required name="name" spellcheck="false" autofocus /> 
					    </div>
					  </div>

				  <div class="form-group">
					   <label class="control-label col-sm-4" for="company-name">Description</label>
					    <div class="col-sm-9">
					      <textarea placeholder="Write description"
					        style="resize: vertical"		        
					        id="company-content"
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
			
    
      <div class="sidebar-module col-md-2 col-lg-2 col-sm-2 pull-right"style="background: white;">
          <h4>Action</h4>
            <ol class="list-unstyled">
              <li><a href="/companies">My companies</a></li>

            </ol>
      </div>  
</div>
</div>


@endsection