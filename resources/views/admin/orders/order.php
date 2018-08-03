<?php view('admin/layouts/header');


view('admin/layouts/sidebar'); ?>



      
     

        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Ordered Product list</h1>
                        <h1 class="page-subhead-line">This is the order list. You can see list of ordered product here.</h1>

                    </div>
                </div>
                <!-- /. ROW  -->

                <?php

                view('admin/layouts/message');
                 ?>
              
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Ordered product List
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                 
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Order_id</th>
                                            <th>User_id</th>
                                            <th>Invoice_no</th>
                                            
                                            <th>Vat</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         
                                        <?php 
                                          $sn = 1;
                                        foreach($info as $data) {?>
                                        
                                        <tr>
                                            <td><?php echo $sn++; ?> </td>
                                            <td><?php echo $data['order_id']; ?></td>
                                            <td><?php echo $data['user_id']; ?></td>
                                            <td><?php echo $data['invoice_no']; ?></td>
                                            <td><?php echo $data['vat']; ?></td>
                                            <td><?php echo $data['total']; ?></td>
                                            <td><?php echo $data['status']; ?></td>
                                            <td> <a class="btn btn-primary" href="/admin/order/status/<?php echo $data['order_id'] ?>">Change Status</a>  
                                                <a class="btn btn-danger" href="/admin/order/delete/<?php echo $data['order_id'];?>">Delete <span class="glyphicon glyphicon-trash"></span></a> 
                                              <a class= "btn btn-success" href="/admin/order/details/<?php echo $data['order_id']; ?>">Details</a> 
                                              <a class="btn btn-primary" href="/admin/order/person/details/<?php echo $data['order_id']?>">Location</a>
                                          </td>
                                          </tr>

                                        <?php } ?>

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
