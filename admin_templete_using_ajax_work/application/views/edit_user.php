<!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
              <?php if($this->session->flashdata('success')){ ?>
                            <div class="alert alert-success">
                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                <strong>Successfully </strong> <?php echo $this->session->flashdata('success'); ?>
                            </div>
                        <?php } else if($this->session->flashdata('error')){  ?>
                            <div class="alert alert-danger">
                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                <strong>Data not </strong> <?php echo $this->session->flashdata('error'); ?>
                            </div>
                        <?php }?>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php echo form_open_multipart('Users/update');?> 
   
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Member Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" name="name" value="<?php echo $get_data[1] ;?>">
                </div>
                <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email" value="<?php echo $get_data[2] ;?>">
                </div>
                
                <!-- <div class="form-group">
                  <label for="exampleInputFile">Picture</label>
                  <input type="file" id="exampleInputFile" name="picture" value="">

                  <p class="help-block">Example block-level help text here.</p>
                </div> -->
                <!-- <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div> -->
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
               <input type="hidden" name="id" value="<?php echo $get_data[0] ;?>">
              </div>
            </form>
          </div>
          <!-- /.box -->

         </div></div></section>