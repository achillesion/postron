<?php
require "connect.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jaytron">
    <title>Al-Mujahid Printing Press</title>
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">


    <link href="css/style-responsive.css" rel="stylesheet" />
    <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
	<link rel='stylesheet' type='text/css' href='css/style.css' />
	<link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
	<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='js/example.js'></script>
	
	
</head>


	<style type="text/css">


		@import url(http://fonts.googleapis.com/css?family=Roboto:400,700);

		
	</style>

</head>
<body>

		<div class="page">
<div class="header">
			<table id="metamain" style="border: none">
				<tr>
					<td id="left" style="border: none" align="left" ><b> Al MujAHid PRiNtiNG PRESS<br> & STATIONERY</b> <br>
					Tel. : 6784469 - Fax : 6787811 <br>
						P.O. Box : -Abu Dhabi - U.A.E
					</td>
					<td id="middle" style="border: none">			<img src="../../../Users/123/PhpstormProjects/postron/assets/images/mainlogo.jpg" align="center">
					</td>
					<td id="right" style="border: none" align="right"><b>مالمجاهد المطبعة والقرطاسية</b> <br>تليفون :۶۷۸۴۴۶۹- فاكس : ۶۷۸۷۸۱۱<br> ص.ب : ۳۱۲۲۵ - اُبوظبىِ - اُ. ع. </td>

				</tr>
		</table>
							<textarea id="header" style="resize: none;">INVOICE</textarea>

		
		<div style="clear:both"></div>
		
<?php

$sr=$_GET['sr'];
$sql="SELECT * FROM info WHERE srno='$sr'";

if ($result=mysqli_query($con,$sql))
  {
	  
  // Fetch one and one row
  while ($row=mysqli_fetch_array($result)) {
   $serial=$row['srno'];
   $billdate=$row['dateofbill'];
   $cusname=$row['customername'];
	$jobno=$row['job'];
	$LPO=$row['dpo'];
	$LPODate=$row['dpodate'];
	$DO=$row['do'];
?>
<div class="info">
<table id="name">
			
			<th id="name">
			MR./MS.:<br>
			<p style="font-size: 26px" align="center">
			<?php echo $cusname; ?><br></p>
			</th>
			
		
</table>

	
		<table id="meta">
				
				<tr>
                    <td class="meta-head">Invoice No.</td>
                    <td><?php echo $serial; ?></td>
                     <td class="meta-head">Date</td>
                    <td><?php echo $billdate; ?></td>
                </tr>
			  
			    <tr>
                    <td class="meta-head">D.O</td>
                    <td><?php echo $DO; ?></td>
					<td class="meta-head">Job No</td>
					<td><?php echo $jobno; ?></td>
                </tr>
                
                <tr>
					<td class="meta-head">L.P.O</td>
                    <td><?php echo $LPO; ?></td>
					<td class="meta-head">Date</td>
					<td><?php echo $LPODate;}} ?></td>
                </tr>


            </table>
		
</div>



		<table id="items" width="960px;">
		
		  <tr id="heads">
		      <th >Item</th>
		      <th >Description</th>
		      <th >Unit Cost</th>
		      <th >Quantity</th>
		      <th >Price</th>
		  </tr>

			<?php



			$sql="SELECT * FROM `basicinfo` WHERE serial='$sr'";
			if ($result=mysqli_query($con,$sql))
			{
			$i=1;
			$grandtotal=0;
			while ($row=mysqli_fetch_array($result)) {
			$description=$row['description'];
			$qty=$row['qty'];
			$cost=$row['costing'];
			$total=$qty*$cost;
			$grandtotal=$grandtotal+$total;
			?>

		  <tr class="maintbl" >

			  <td  class="item-no"><?php echo $i++; ?></td>
		      <td  class="description"><?php echo $description; ?></td>
		      <td  class="cost"><?php echo $cost; ?></td>
		      <td  class="qty"><?php echo $qty; ?></td>
		      <td class="price"><span  class="price"><?php echo $total;?></span></td>

		  </tr>
		  <?php  
		  }
		  for($j=$i;$j<=20;$j++){
		  ?>
<tr >
<td class="blank">
</td>
<td class="blank">
</td>
<td class="blank">
</td>
<td class="blank">
</td>
<td class="blank">
</td>

</tr>

			<?php }
			?>
		  <tr id="fields">

		      <td colspan="2" class="blank"> </td>
		      
		      <td  class="blank"> </td>

		      <td  class="total-line"><b>Total</b></td>
		      <td class="total-value"><div id="total"><?php echo "درهم‎‎". $grandtotal; }?></div></td>
		  </tr>
		  <tr id="fields">
		      <td colspan="2" class="blank"> </td>
		      <td  class="blank"> </td>
		      <td  class="total-line"><b>Amount Paid</b></td>
			  <td class="total-value"><textarea id="paid" placeholder="درهم‎‎0.00"></textarea></td>
		  </tr>
		  <tr id="fields">
		      <td colspan="2" class="blank"> </td>
		      <td  class="blank"> </td>
				<td class="total-line balance"><b>Balance Due</b></td>
		      <td class="total-value balance"><div class="due"></div></td>
		  </tr>
		
		</table>
		<br>
		
<br><br><br></div>
<div class="footer" >
<table style="border: none;">
<tr style="border: none;">
		<td style="border: none;" width="20%"><br><br>
		<hr><p align="center" style="font-size: 16px">Reciever's Sign</p>
		
		<td align="center" style="border: none; " width="60%" >
			<table >
			<th  style="border-color: red"  >
			<p style="font-size: 10px; text-align: justify;" style="color: red" >
			1.Any discrepecies should be notified within 7 days.<br>
			2.All payments should be made by cross check only.<br>
			3.Cash payments must be against official reciepts only.<br>
			4.This invoice shall be settled in ..... days.</p>
			</th>
			</table>
		</td>

		<td style="border: none;" width="20%" ><br><br>
		<hr>
		<p align="center" style="font-size: 16px">For Al Mujadid Printing Press</p>
		</td>
		</tr>
		</table>
</div>

</div>	
</body>

</html>