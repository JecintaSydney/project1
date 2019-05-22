<?php include('sidebar.php')?>
<?php include('navbar.php')?>
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Profile</h4>
                            </div>
                            <div class="content">
                                <form name="form" action="process_add_product.php" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Upload file</label>
                                                <input type="file" name="image" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Product Name</label>
                                                <input type="text" name="product" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Cost</label>
                                                <input type="text" name="cost" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Description</label>
                                                <textarea name="description" rows="5" class="form-control"></textarea>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                
                    

                                    <input type="submit" name="submit" value="add" class="btn btn-info btn-fill pull-right">
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                   

                </div>
            </div>
        </div>
<?php include('footer.php')?>