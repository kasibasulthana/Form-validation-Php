<?php


$regno=$_POST['regno'];
$sname=$_POST['sname'];
$dob=$_POST['dob'];
$passwd=$_POST['passwd'];
$email=$_POST['email'];
$phone=$_POST['phno'];
$gender=$_POST['gender'];
$file=$_POST['chfile'];
$address=$_POST['saddress'];




#DataBase Connection
$conn = new mysqli("localhost","root","","vijay");

if($conn->connect_errno){
    echo "failed to connect the Server".mysqli_connect_error();
}

$sql="INSERT INTO student(regno,sname,dob,passwd,email,phno,gender,chfile,saddress)VALUES('$regno','$sname','$dob','$passwd','$email','$phone','$gender','$file','$address')";
$query=mysqli_query($conn,$sql);
if($query){
    echo "<center><p style='font-size:20px; font-family:arial;'>Submitted</p></center>";
    echo '<center><button style="padding:14px; background-color:black; border-radius 6px " ><a href="index.html" style="text-decoration:none; color:white;">Go to home</a></button></center>';
}
else{
    echo "Unable to submit the form",$conn->error;
}
?>
