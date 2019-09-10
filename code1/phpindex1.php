<html>
<head>
<body>
<?php
$Dname=$_POST['name'];
$Gender=$_POST['gender'];
$Dgroup=$_POST['bgroup'];
$City=$_POST['city'];
$Phnumber=$_POST['phono'];
$Age=$_POST['age'];
$Speciallist=$_POST['specialist'];
 
 
 echo $Dname;
 echo $Gender;
 echo $Dgroup;
 echo $City;
 echo $Phnumber;
 echo $Age;
 echo $Speciallist;
 
 
 
 
 
 
 
 
 
 
 

$c = mysqli_connect("localhost","root","");
 if(mysqli_select_db($c,"hospitall")){
   $check = mysqli_query($c,"insert into doctor values('$Dname','$Gender','$Dgroup','$City','$Phnumber','$Age','$Speciallist')");
 }




 
 
 
 
 
 
 
 
 
 
 
 
 
 

?>
</body>
</head>
</html>