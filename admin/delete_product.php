<?php
    $conn=mysqli_connect("localhost", "root", "", "mywebsite")or die(mysqli_error($conn));
    $id=$_GET['id'];
    //delete queryie

    $delete=mysqli_query($conn, "delete from product where'$id'") or die(mysqli_error($conn));
    if($delete){
        echo "success";
    }else{
        echo "fail";
    }
?>