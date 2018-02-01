<?php
require 'connect.php';
$Sr=$_GET['sr'];
				     mysqli_query($con, "DELETE FROM `info` WHERE `srno` ='$Sr'");
				     mysqli_query($con, "DELETE FROM `basicinfo` WHERE `serial` ='$Sr'");

					 header('Location: Records.php');

                        ?>
