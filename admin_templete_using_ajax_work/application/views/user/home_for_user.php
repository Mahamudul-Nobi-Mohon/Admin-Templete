    <!-- Page Content -->
     <div class="col-lg-8">
            
    <div class="container">

        <!-- Heading Row -->
        
        <!-- /.row -->

        <hr>

        <!-- Call to Action Well -->
        <div class="row">
            <div class="col-lg-10">
                <!-- <div class="well text-center">
                    This is a well that is a great spot for a business tagline or phone number for easy access!
                </div> -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="col-lg-12">
       <?php if($this->session->userdata('role') != '1') { ?>
        <div class="row">
            <?php for ($i = 0; $i < sizeof($categories); $i++) : ?>
           
                <div class="col-md-4">

                <tr>

                    <h2><td><?php echo htmlspecialchars($categories[$i][1]); ?></td>
                    </h2>
                     <td><img src="<?php echo base_url();?>images/<?php  echo $categories[$i][3];?>" width="100" height="100">  </td>
                  
                    <h2><td><?php echo htmlspecialchars($categories[$i][0]); ?></td></h2>
                    <p><p><td><?php echo htmlspecialchars($categories[$i][2]); ?></td></p>
                    <a class="btn btn-default" href="<?php echo site_url('more-info')  .'/'.$categories[$i][4];?>">More Info</a>
                         <?php if($this->session->userdata('role') == '1') { ?>
                        <a class="btn btn-default" href="<?php echo site_url('category-edit')  .'/'.$categories[$i][4];?>">Edit</a>
                        <a class="btn btn-default" href="<?php echo site_url('category-delete').'/'.$categories[$i][4];?>" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a> 
                    
                     <?php } ?>
                  </tr>
                    </div>
                
            <!-- /.col-md-4 -->
            
            <!-- /.col-md-4 -->
        <?php endfor; ?>
      </div>
            
        <?php } ?>
        </div>
    </div>

   