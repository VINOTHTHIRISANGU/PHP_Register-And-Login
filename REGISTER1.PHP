<?php
$server="localhost";
$uname="root";
$pwd="";
$db="kvcet";
$con=mysqli_connect($server,$uname,$pwd,$db) or die("db not connect");

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$dob=$_POST['dob'];
$gen=$_POST['gen'];
$email=$_POST['email'];
$pno=$_POST['pno'];
$sub=$_POST['sub'];
$fpaths=$_FILES['fpath']['name'];
$tempf=$_FILES['fpath']['tmp-name'];
$fdir="fileinsert/";
$fstr=$fdir.$fpaths;


$query="insert into r1 values('$fname','$lname','$dob','$gen','$email',$pno,'$sub','$fstr')";
if($res=mysqli_query($con,$query))
{

   $res=mysqli_query($con,$query);
   echo"<script> alert('data saved');
   window.location.href='REGISTER.php';</script>";    
}
else
{

    echo"<script>alert('data unsaved')</script>";
}
?>