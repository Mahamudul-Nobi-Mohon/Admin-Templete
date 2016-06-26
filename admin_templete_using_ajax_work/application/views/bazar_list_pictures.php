        <section class="content-header">
            <div class="col-md-12">
              <!-- USERS LIST -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">All Bazars</h3>
                  <p><?php echo $links; ?></p>
                    <div class="box-tools pull-right">
                    <!-- <span class="label label-danger">8 New Members</span> -->
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <ul class="users-list clearfix">
                  <?php foreach($results as $data) { ?>
                 
                    <li>
                      <img src="<?php echo base_url() ; ?>users_pictures/<?php  echo $data->picture; ?>" alt="User Image">
                      <a class="users-list-name" href="#">Name : <?php  echo $data->member_name?></a>
                      <a class="users-list-name" href="#">Bazar : <?php  echo $data->bazar_tk?></a>
                      <!-- <span class="users-list-date">Today</span> -->
                    </li>
                    <?php } ?>
                    
                  </ul>
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="javascript:void(0)" class="uppercase">All Bazar lists</a>
                 
            </div>
          <p><?php echo $links; ?></p>
                <!-- /.box-footer -->
              </div>
              <!--/.box -->
            </div>
             <!-- /.col -->
          </div>
          <!-- /.row -->

          </section>




    