<?php view('admin/layouts/header');


view('admin/layouts/sidebar'); ?>



      
     

        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Ordered Product Details list</h1>
                        <h1 class="page-subhead-line">This is the order product details list. You can see list of ordered product details here.</h1>

                    </div>
                </div>
                <!-- /. ROW  -->
              
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Ordered product details List
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                 
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Order_id</th>
                                            <th>Product_id</th>
                                            <th>Title</th>                                
                                            <th>Quantity</th>
                                            <th>Price </th>
                                            <th>Sub Total</th>
                                        </tr>
                                      </thead>
                                     <tbody>
                                         
                                        <?php 
                                          $sn = 1;
                                        foreach($info as $data) {?>
                                        
                                        <tr>
                                            <td><?php echo $sn++; ?> </td>
                                            <td><?php echo $data['order_id']; ?></td>
                                            <td><?php echo $data['pro_id']; ?></td>
                                            <td><?php echo $data['title']; ?></td>
                                            <td><?php echo $data['qty']; ?></td>
                                            <td><?php echo $data['price']; ?></td>
                                            <td><?php echo $data['subtotal']; ?></td>
                                          
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
