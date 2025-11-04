<?php
include('connection.php');
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$query="insert into my_portfolio values ('','$name','$email','$message')";
$query_run=mysqli_query($conn,$query);
if($query_run)
{
    echo "<script>alert('Message Sent Successfully');
    window.location.href='index.html';</script>";

}
?>