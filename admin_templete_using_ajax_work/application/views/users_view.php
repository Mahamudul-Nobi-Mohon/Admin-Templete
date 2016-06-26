 <!-- Content Wrapper. Contains page content -->
        
    <!-- Content Header (Page header) -->
    <section class="content-header">
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
      <h1>
        <h3 class="box-title">All Users</h3><br>
         
        <a href="<?php echo site_url('New_user'); ?>">Add new user</a><br>
             
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">All Users</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
               </div>
            <!-- /.box-header -->
            <div class="box-body">
            <table id="example" class="display" cellspacing="0" width="100%">
              <!-- <table id="example2" class="table table-bordered table-hover"> -->
                <thead>
                <tr>
                  <th>Sl</th>
                  <th>Name</th>
                  <th>email</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                  <th>Sl</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
                </tfoot>
                 <tbody>
                <?php $j=1; ?>
                       <?php for ($i = 0; $i < sizeof($all_user_for_datatable); $i++) { ?>
                    
                 
                          <tr>
                            <td><?php echo $j ?></td>
                              <td><?php echo $all_user_for_datatable[$i][0] ?><?php //echo htmlspecialchars($categories[$i][0]); ?></td>
                              <td><?php echo $all_user_for_datatable[$i][1] ?><?php //echo htmlspecialchars($categories[$i][1]); ?></td>
                              <td><?php echo $all_user_for_datatable[$i][2] ?><?php //echo htmlspecialchars($categories[$i][2]); ?></td>
                              <td>
                              <a href="<?php echo site_url('user-delete').'/'.$all_user_for_datatable[$i][4] ?>" onclick="return confirm('Are you sure you want to delete this item?');"><img title="Click ForDelete" src='<?php echo base_url() ; ?>libs/images/delete.png' style="height:30px; width:30px;"></a> 
             
                             <a href="<?php echo site_url('user-edit')  .'/'.$all_user_for_datatable[$i][4] ?>">                                                                         <img title="Click For Edit" src='<?php echo base_url() ; ?>libs/images/edit.png'    style="height:30px; width:30px;"></a>
                             </td> 
                             </tr>
                              <?php $i++ ; $j++?>
                            
                           <?php } //endfor ?>
                           
                            
                             <?php //} ?>
                     
                                        
                </tbody>
                  
              </table>
                     
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
    </section>
    <!-- /.content -->
  