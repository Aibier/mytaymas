<article class="media">
  <div class="media-body">
    <h2 style="text-align: center;">Register Now</h2>
	<form class="form-horizontal col-md-12 col-lg-12">
							 
            

         <!-- <div class="form-group">
		        <div class="input-group">
		        	<input type="text" placeholder="search info" class="form-control">
		        	<span class="input-group-btn">
		        		
		        		<button type="button" class="btn btn-warning">Search</button>
		        	</span>
		        </div> 	
        </div> -->
        <fieldset disabled hidden="true">
        	<legend>Email Service</legend>
            <div class="form-group">
		      <div class="checkbox">
			     <div class="col-sm-10 col-sm-offset-2">
			     	<label>
			 		 <input type="checkbox"/>
			 		 Remember one
			 	  </label>
			     </div> 
		     </div>
		     <div class="checkbox">
		      <div class="col-sm-10 col-sm-offset-2">
		 	     <label>
		 		  <input type="checkbox"/>
		 		  Remember two
		 	    </label>
		 	  </div>
		     </div>
		    </div>
        </fieldset>

		<div class="form-group has-warning">
			<label for="name" class="col-sm-2 control-label">Your name*</label>
			<div class="col-sm-10 ">
			  <input type="text" class="form-control" />
			</div>	   
		</div>
		    
		<div class="form-group">
			 <label for="lastName" class="col-sm-2 control-label">Last Name</label>
			 <div class="col-sm-10 ">
		        <input type="text" id="lastName" class="form-control" readonly value="Aziz" />
		    </div>
		</div>

		<div class="form-group">
			 <label for="password" class="col-sm-2 control-label">Password</label>
			 <div class="col-sm-10 ">
		        <input type="password" id="password" class="form-control"/>
		    </div>
		</div>
		
        <div class="form-group">
			<label for="email" class="col-sm-2 control-label">Your e-mail*</label>
			<div class="col-sm-10 ">
		       <input type="email" id="email" class="form-control" />
		    </div>
		</div>
		 
		  <!-- radio area -->
		  <div class="form-group  ">
		    <div class="radio">
		    	<div class="col-sm-10 col-sm-offset-2 ">
				   <label class="radio-inline">
				 		<input name="options" type="radio"/>
				 		Remember one
		 	       </label>
		 	       <label class="radio-inline">
		 		      <input name="options" type="radio"/>
		 		      Remember two
		 	       </label>
		    	</div>
		    </div>	 	
		 </div>  

        <div class="form-group">
		    <label for="message" class="col-sm-2  control-label">
		      Your message
            </label>
		    <div class="col-sm-10 col-sm-offset-2" >
		        <textarea id="message" class="form-control"></textarea>
		    </div>
	
		</div>
		
	    <input type="submit" value="Send your message!" class="btn btn-warning  col-sm-10 col-sm-offset-2" />
			  <div class="clear"><br/><br></div>    
   </form>
  </div><!-- media-body -->
</article>