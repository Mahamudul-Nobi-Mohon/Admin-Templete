<br><br><br>
<div class="container">
 <div class="col-md-6" >
  <?php error_reporting(0);?>
    <?php 
               
          echo form_open('Products/change_password'); ?>        
       <fieldset>
            <div id="legend">
              <legend class="">Change Password</legend> 
            </div>
            

            <div class="form-group">
            <?php if(isset($us)){ ?>         
                            <pre style="color:green"><?php echo "Password Changed Successfully."; ?></pre>
                          <?php
                             }
                             if(isset($error)){ ?>
                               <pre style="color:red"><?php echo "Password Not Changed."; ?></pre>
                        
                           <?php  }
                           ?>
           
                    <label for="inputEmail3" class="col-sm-2 control-label">Old Password</label>
                    <div class="col-sm-10">
               <?php 
                  $password=array(
                    'id'   =>   'password',
                    'class' =>    'form-control input-lg',
                    'name' =>   'password',
                    'required' => 'required',
                    'type'   => 'password'
                   // 'value'   => $user->password
                    );
                  echo form_input($password);
              ?>
              </div>
            </div>
         
                   <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">New Password</label>
                    <div class="col-sm-10">
               <?php 
                  $newPassword=array(
                    'id'   =>   'newPassword',
                    'class' =>    'form-control input-lg',
                    'name' =>   'newPassword',
                    'required' => 'required',
                    'type'   => 'password'
                   // 'value'   => $user->password
                    );
                  echo form_input($newPassword);

                  
              ?>
                 <p class="help-block">New password</p>
              </div>
            </div>

            <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Confirm Password</label>
                    <div class="col-sm-10">
               <?php 
                  $confirmPassword=array(
                    'id'   =>   'confirmPassword',
                    'class' =>    'form-control input-lg',
                    'name' =>   'confirmPassword',
                    'required' => 'required',
                    'type'   => 'password'
                   // 'value'   => $user->password
                    );
                  echo form_input($confirmPassword);

                  
              ?>
                 <p class="help-block">Please confirm password</p>
              </div>
            </div>
         
            <div class="control-group">
              <!-- Button -->
              <div class="controls">
                <button class="btn btn-success">Update</button>
              </div>
            </div>
          </fieldset>
        <?php echo form_close() ;?>
    
    </div> 
  </div>
</div>








