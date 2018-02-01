<?php
require "connect.php";
$srno=mysqli_real_escape_string($con,$_POST['srno']);
$maindate=mysqli_real_escape_string($con,$_POST['maindate']);
$cusname=mysqli_real_escape_string($con,$_POST['cusname']);
$jobno=mysqli_real_escape_string($con,$_POST['jobno']);
$dpo=mysqli_real_escape_string($con,$_POST['dpo']);
$dpodate=mysqli_real_escape_string($con,$_POST['dpodate']);
$do=mysqli_real_escape_string($con,$_POST['do']);
$description=$_POST['description'];
$cost=$_POST['cost'];
$qty=$_POST['qty'];
mysqli_query($con,"INSERT INTO `info`(`job`, `dpo`, `dpodate`, `do`, `srno`, `customername`, `dateofbill`) VALUES 
	($jobno , '$dpo', '$dpodate',' $do','$srno','$cusname', '$maindate')");
$totalitems=sizeof($cost);

for($i=0;$i<$totalitems;$i++){
$des=$description[$i];
$costing=$cost[$i];
$quantity= $qty[$i];

mysqli_query($con,"INSERT INTO `basicinfo`( `serial`, `description`, `costing`, `qty`, `jobno`) VALUES 
	('$srno','$des',$costing, $quantity,$jobno)");

}

mysqli_close($con);
header('Location: print.php?sr='.$srno.'');
?>
