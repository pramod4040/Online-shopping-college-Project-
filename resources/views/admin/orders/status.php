<?php

view('admin/layouts/header');


view('admin/layouts/sidebar'); ?>




        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="Add New Product">Basic Forms</h1>
                        <h1 class="page-subhead-line">Please enter order status below. </h1>
                        

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           BASIC FORM
                        </div>
                        <div class="panel-body">
                    </div>


 <form role="form" method="post" action="">

    <div class="form-group">
        <label> Product Status</label>
        <select class="form-control" name="status">
            <option value="p">Pending</option>
            <option value="o">Order Confirmed</option>
            <option value="s">Shipped</option>
            <option value="d">Delivered</option>

        </select>
    </div>
                         </div>
                               
                                  
<button type="submit" class="btn btn-info">Update</button>

                                    </form>
                            </div>
                        </div>
                         
                            </div>
                        </div>
                            </div>

        </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>



<?php 
view('admin/layouts/footer');
?>