
                  <br/><br/><br/><br/>
                  <div class="col-lg-12">
                      <!--Project Activity start-->
                      <section class="panel">
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
                          <div class="panel-body progress-panel">
                            <div class="row">
                              <div class="col-lg-8 task-progress pull-left">
                                  <h1>View All Products</h1>                                  
                                </div>
                              
                               </div>
                              </div>      
                            </div>
                         </div>


                        
                        <?php if($this->session->userdata('role') == '1') { ?>
                        

                          <p><?php echo $links; ?></p>
                                
                          <table class="table table-hover personal-task " style="">
                              <thead>
                              <tr>
                                  <th style="color:green">Sl_No</th>
                                  <th style="color:green">Title</th>
                                  <th style="color:green">Category</th>
                                  <th style="color:green">Description</th>
                                  <th style="color:green">Action</th>
                              </tr>
                                                        
                              </thead>
                              <tbody>

                                 <?php $i=0; //for ($i = 0; $i < sizeof($categories); $i++) : ?>
                                <?php foreach($results as $data) { ?>
                   
                                  <tr>
                                    <td><?php echo $i+1 ?></td>
                                      <td><?php  echo $data->title?><?php //echo htmlspecialchars($categories[$i][0]); ?></td>
                                      <td><?php  echo $data->category?><?php //echo htmlspecialchars($categories[$i][1]); ?></td>
                                      <td><?php  echo $data->description?><?php //echo htmlspecialchars($categories[$i][2]); ?></td>
                                      <td>
                                      <a href="<?php echo site_url('category-delete').'/'.$data->id;?>" onclick="return confirm('Are you sure you want to delete this item?');"><img title="Click ForDelete" src='<?php echo base_url() ; ?>libs/delete.png' 
                                      style="height:30px; width:30px;" ></a> 
                   
                                   <a href="<?php echo site_url('category-edit')  .'/'.$data->id;?>"><img title="Click For Edit" src='<?php echo base_url() ; ?>libs/edit.png' style="height:30px; width:30px;"></a>
                                   </td> 
                                   </tr>
                                    <?php $i++ ?>
                                 <?php } //endfor ?>
                                 
                                  
                                   <?php } ?>
                                   
                                                      
                              </tbody>
                              
                          </table>
                          <?php echo $this->pagination->create_links(); ?>
                      </section>
                      <!--Project Activity end-->
                  </div>
              <br><br>