<?php

view('admin/layouts/header');


view('admin/layouts/sidebar'); ?>





        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="Add New Product">Basic Forms</h1>
                        <h1 class="page-subhead-line">Please enter product information below. </h1>

                        <?php 

                        view('admin/layouts/message', compact('errors'));

                        ?>

                        

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

                  <form role="form" method="post" action="" enctype="multipart/form-data">


                    <div class="form-group">
                        <label>Category name </label>
                         <select class="from-control" name="cid">


                                <?php foreach($categories as $c){ ?>

                                <option value="<?php echo $c['id']?>">
                                <?php echo $c['ctitle']; ?>
                                </option>
                                <?php } ?>
                                </select>

                    </div>

                            
                                <div class="form-group">

                                            <label>Product name</label>
                                            <input class="form-control" type="text" name="title">
                                            <p class="help-block">Help text here.</p>
                                        </div>


                                 <div class="form-group">
                                            <label>Price</label>
                                            <input class="form-control" type="text" name="price">
                                     <p class="help-block">Help text here.</p>
                                        </div>


                                          <div class="form-group">
                                            <label>Image</label>
                                            <input class="form-control" type="file" name="image">
                                     <p class="help-block">Help text here.</p>
                                        </div>

                                        
                                            <div class="form-group">
                                            <label>Content</label>
                                            <textarea class="form-control ckeditor" rows="3" name="content"></textarea>
                                        </div>
                                                       </div>
                               
                                  
                                 
                                        <button type="submit" class="btn btn-info">Data Entry </button>

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