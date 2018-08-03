<?php view('admin/layouts/header');


view('admin/layouts/sidebar') ?>
      
     

        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Product list</h1>
                        <h1 class="page-subhead-line">This is the product list. You can see list of product here.</h1>


                        <?php
                          
                         view('admin/layouts/message', compact('errors'))?>

                    </div>
                </div>
                <!-- /. ROW  -->
              
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Product List
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Title</th>
                                            <th>Category id</th>
                                            <th>Price</th>
                                            
                                            <th>Image</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $sn = 1; ?>
                                        <?php foreach($products as $data){ ?>
                                        <tr>
                                            <td><?php echo $sn++; ?> </td>
                                            <td><?php echo $data['title']; ?></td>
                                            <td><?php echo $data['cid']; ?></td>
                                            <td><?php echo $data['price']; ?></td>
                                       
                                            <td>
                                                <img src="<?php echo $data['image'];?>" width="100px">
                                             </td>
                                            <td> <a class="btn btn-primary" href="/admin/product/edit/<?php echo $data['proid'];?>">Edit</a> <a class="btn btn-danger" href="/admin/product/delete/<?php echo $data['proid'];?>">Delete</a>  </td>
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
