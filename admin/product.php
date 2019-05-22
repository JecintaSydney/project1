<?php
    $conn=mysqli_connect("localhost", "root", "", "mywebiste")or die(mysqli_error($conn));
    $query=mysqli_query($conn, "select * from product")or die(mysqli_error($conn));
    $num=mysqli_num_rows($query);
    
?>
<?php include('sidebar.php')?>
<?php include('navbar.php')?>
<div class="content">
            <div class="container-fluid">
                <div class="row">
            
                    <div class="col-md-12">
                        <div class="card card-plain">
                            <div class="header">
                                <h4 class="title">Available Products</h4>
                                <p class="category">Here is a subtitle for this table</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <th>ID</th>
                                        <th>product image</th>
                                    	<th>Product Name</th>
                                    	<th>Quantity</th>
                                    	<th>Description</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                    <?php foreach($query as $record){?>
                                        <tr>
                                        	<td><?php echo $record['id']?></td>
                                        	<td><?php echo $record['name']?></td>
                                        	<td><img src="upload/<?php echo$record['image']?>" style="width:50px;height:50px;"></td>
                                        	<td><?php echo $record['description']?></td>
                                        	<td><?php echo $record['cost']?></td>
                                            <td>
                                                <a href="view_product.php?id=<?php echo $record['id']?>" class="btn btn-success">View</a>
                                                <a href="update_product.php?id=<?php echo $record['id']?>" class="btn btn-primary">Update</a>
                                                <a href="delete_product.php?id=<?php echo $record['id']?>" class="btn btn-danger">Delete</a>
                                                
                                            </td>
                                        </tr>
                                    <?php } ?>
                                        
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
<?php include('footer.php')?>