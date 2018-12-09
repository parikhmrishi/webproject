<?php
    $email=$_GET['email'];
    $password=$_GET['password'];
    
    $con=mysqli_connect("localhost","root","rp11200081","web");
    if(!$con)
    {
        die("connection failed:".mysqli_connect_error());
    }
    
    $sql="SELECT password FROM user WHERE email='$email'";
    $res=mysqli_query($con,$sql);
    
    while ($row=mysqli_fetch_assoc($res))
    {
        $pass=$row['password'];
    }
    if($pass!=$password)
    {
        header("location:index.html");
    }
    else{
        header("location:Wikipedia.html");
    }
?>
