
<div class="tab-pane fade" id="manageaccount" role="tabpanel" aria-labelledby="manageaccount-tab">
	<form method="post" enctype="multipart/form-data">
    	<div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" value="<?php if(isset($fld_name)){ echo $fld_name;}?>" class="form-control" name="name" required="required"/>
        </div>
		<div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="<?php if(isset($fld_email)){ echo $fld_email;}?>" class="form-control"  readonly/>
        </div>
					<div class="form-group">
                      <label for="mobile">Mobile</label>
                      <input type="tel" id="mobile" class="form-control" name="mobile" pattern="[6-9]{1}[0-9]{2}[0-9]{3}[0-9]{4}" value="<?php if(isset($fld_mobile)){ echo $fld_mobile;}?>" placeholder="" required>
                    </div>
					
                   <div class="form-group">
                      <label for="pwd">Password:</label>
                     <input type="password" name="pswd" value="<?php if(isset($fld_password)) { echo $fld_password; }?>"class="form-control"  id="pwd" required/>
                   </div>
				   
				   
 
                  <button type="submit" name="update" style="background:#ED2553; border:1px solid #ED2553;" class="btn btn-primary">Update</button>
                  <div class="footer" style="color:red;"><?php if(isset($ermsg)) { echo $ermsg; }?><?php if(isset($ermsg2)) { echo $ermsg2; }?></div>
			 </form>
			</div>
			<!--tab 2 ends-->


