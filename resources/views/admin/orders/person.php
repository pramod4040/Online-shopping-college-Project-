<?php view('admin/layouts/header');


view('admin/layouts/sidebar'); ?>



      
     

        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Person Details list</h1>
                        <h1 class="page-subhead-line">This is person details list. You can see information about person.</h1>

                    </div>
                </div>
                <!-- /. ROW  -->
              
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Person details list
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                 
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Order_id</th>
                                            <th>Name</th>
                                            <th>Address</th>                                
                                            <th>Contact</th>
                                            <th>House.no</th>
                                            <th>Street</th>
                                        </tr>
                                      </thead>
                                     <tbody>
                                         
                                        <?php 
                                          $sn = 1;
                                        foreach($details as $data) {?>
                                        
                                        <tr>
                                            <td><?php echo $sn++; ?> </td>
                                            <td><?php echo $data['order_id']; ?></td>
                                            <td><?php echo $data['name']; ?></td>
                                            <td><?php echo $data['address']; ?></td>
                                            <td><?php echo $data['contact']; ?></td>
                                            <td><?php echo $data['house']; ?></td>
                                            <td><?php echo $data['street']; ?></td>
                                          
                                          </tr>

                                        <?php } ?>

                                      <!--   <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                            <td> <a class="btn btn-primary" href="">Edit</a> <a class="btn btn-danger" href="">Delete</a>  </td>
                                          
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                            <td> <a class="btn btn-primary" href="">Edit</a> <a class="btn btn-danger" href="">Delete</a>  </td>
                                        </tr> -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                  </div>


       
            </div>


            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>


<?php view('admin/layouts/footer') ?> 
