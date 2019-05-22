<?php
    $id=$_GET['id'];
    $conn=mysqli_connect("localhost", "root", "","mywebsite")or die(mysqli_error($conn));
    $query=mysqli_query($conn, "select *from product where id='$id'")or die(mysqli_error($conn));
    foreach($query as $record){
        $pname=$record['name'];
        $pcost=$record['cost'];
        $pimage=$record['image'];
        $pdescription=$record['description'];


    }
?>
<?php include('sidebar.php')?>
<?php include('navbar.php')?>
<div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Profile</h4>
                            </div>
                            <div class="content">
                                <form name="form" action="" method="POST" enctype="multipart/form-data">
                                    <div class="row">

                                    <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Product Id</label>
                                                <input type="text" name="pid" class="form-control" value="<?php echo $id?>" readonly=true>
                                            </div>


                                    
                                
                                       
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Product Name</label>
                                                <input type="text" name="product" class="form-control" value="<?php echo $pname?>">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Cost</label>
                                                <input type="text" name="cost" class="form-control" value="<?php echo $pcost?>">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Description</label>
                                                <textarea name="description" rows="5" class="form-control"><?php echo$description?></textarea>
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
                    
                    <div class="col-md-4">
                        <img src="upload/<?php echo$pimage;?>" style="width:200px;height:200px;">
                    </div>
                   

                </div>
            </div>
        </div>
<?php include('footer.php')?>