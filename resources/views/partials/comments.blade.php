<div class="row col-md-12 col-sm-12 col-lg-12" >
                 <div class="panel panel-default widget">
                    <div class="panel-heading" style="margin-right: 50px;" >
                        <span class="glyphicon glyphicon-comment"></span>
                           <h3 class="panel-title " style="text-shadow: grey; ">
                                Recent Comments</h3>                
                      </div>

            <div class="panel-body">
                <ul class="list-group">
                 @foreach($comments as $comment)        
                    <li class="list-group-item">
                        <div class="row pull-left" >                            
                            <div class="col-xs-10 col-md-11">
                                
                                    <div class="mic-info">
                                         <strong>By:</strong> {{$comment->user->name}}<br><strong>commented_on:</strong> {{$comment->created_at}}
                                    </div>

                                  
                                

                                    <div class="comment-text col-md-12 col-sm-12 col-lg-12">
                                      <strong>comment:</strong>   {{$comment->body}}
                                    </div>

                                    <br/>

                                    
                             </div>
                         </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

