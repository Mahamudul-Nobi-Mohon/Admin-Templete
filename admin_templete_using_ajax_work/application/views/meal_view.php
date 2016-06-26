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
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3><br>
              <p><?php echo $links; ?></p>
                          
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Sl</th>
                  <th>Name</th>
                  <th>Meal</th>
                  <th>Bazar</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
                </thead>
                 <?php $i=0; //for ($i = 0; $i < sizeof($categories); $i++) : ?>
                                <?php foreach($results as $data) { ?>
                   
                                  <tr>
                                    <td><?php echo $i+1 ?></td>
                                      <td><?php  echo $data->member_name?><?php //echo htmlspecialchars($categories[$i][0]); ?></td>
                                      <td><?php  echo $data->daily_meal?><?php //echo htmlspecialchars($categories[$i][1]); ?></td>
                                      <td><?php  echo $data->bazar_tk?><?php //echo htmlspecialchars($categories[$i][2]); ?></td>
                                      <td><?php  echo $data->date?><?php //echo htmlspecialchars($categories[$i][2]); ?></td>
                                      <td>
                                      <a href="<?php echo site_url('meal-delete').'/'.$data->id;?>" onclick="return confirm('Are you sure you want to delete this item?');"><img title="Click ForDelete" src='<?php echo base_url() ; ?>libs/images/delete.png' 
                                      style="height:30px; width:30px;" ></a> 
                   
                                   <a href="<?php echo site_url('meal-edit')  .'/'.$data->id;?>"><img title="Click For Edit" src='<?php echo base_url() ; ?>libs/images/edit.png' style="height:30px; width:30px;"></a>
                                   </td> 
                                   </tr>
                                    <?php $i++ ?>
                                 <?php } //endfor ?>
                                 
                                  
                                   <?php //} ?>
                                   
                                                      
                              </tbody>
                <tfoot>
                <tr>
                  <th>Sl</th>
                  <th>Name</th>
                  <th>Meal</th>
                  <th>Bazar</th>
                  <th>Date</th>
                </tr>
                </tfoot>
              </table>
               <?php echo $this->pagination->create_links(); ?>
                     
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
    </section>
    <!-- /.content -->
   