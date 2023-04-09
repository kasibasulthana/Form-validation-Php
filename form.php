<?php
echo "helloooo muni";

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
    echo "<center><p>Submitted</p></center>";
    echo '<center><button  ><a href="index.html" >Go to home</a></button></center>';
}
else{
    echo "Unable to submit the form",$conn->error;
}
?>