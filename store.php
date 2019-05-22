<?php
    //$conn=mysqli_connect("localhost", "root", "", "mywebsite")or die(mysqli_error($conn));
    include('index.php');
    $id=$_SESSION['loginid'];
    echo$id;
    $select=mysqli_query($conn, "select * from login where id=$id")or die(mysqli_error($conn));
    $num=mysqli_num_rows($select);
    while($num=mysqli_fetch_array($select)){
        $columid=$num['id'];
        $user=$num['username'];
        $password=$num['password'];

    }
    echo$user;
    echo "success";

?>