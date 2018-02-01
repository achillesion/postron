<?php
include 'inc/header.php';
include 'inc/sidebar.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Free Bootstrap Admin Template : Dream</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet"/>
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet"/>
    <!-- Morris Chart Styles-->
<!--    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet"/>-->
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet"/>
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
    <link href="css/style1.css" rel="stylesheet">

    <link rel='stylesheet' type='text/css' href='css/print.css' media="print"/>


</head>

<style>
    .entry:not(:first-of-type) {
        margin-top: 10px;
    }

    .glyphicon {
        font-size: 12px;
    }

    body {
        background-color: white;
    }

    #header {
        length: 20px;
    }

</style>


<?php

// php script for showing current date

date_default_timezone_set('Asia/Dubai');
$test = new DateTime();
$d = date_format($test, 'd-m-Y ');
//echo date_format($test, 'Y-m-d ');
$t = date_format($test, 'h:i a');

?>
<body>
<div id="wrapper">
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        <div id="page-inner">



            <div class="row">
                <div class="col-md-4"><label>SR No:</label></div>
                <div class="col-md-4">
                    <label>Tax invoice / فاتورة ضريبية </label>
                </div>
                <div class="col-md-4"><label for="date">Date: </label><?php echo $d . '/' . $t; ?></div>
            </div>


            <!-- form -->
            <form action="controllers/addInvoice.php" method="post">
                <div class="row">
                    <!--Customer Name-->
                    <div class="col-md-6">
                        <table id="meta">
                            <tr style="height: 90px;">
                                <td class="meta-head">Mr/Ms:</td>
                                <td><textarea name="cusname"></textarea></td>
                            </tr>
                        </table>
                    </div>

                    <!--Customer Data-->
                    <div class="col-md-6">
                        <table id="meta">
                            <tr >

                                <td class="meta-head">Part A/C Code</td>
                                <td colspan="3"><textarea name="jobno"></textarea></td>


                            </tr>
                            <tr>

                                <td class="meta-head">D.P.O.</td>
                                <td><textarea name="dpo"></textarea></td>
                                <td class="meta-head">Date</td>
                                <td><textarea id="date" name="dpodate"><?php echo $d; ?></textarea></td>
                            </tr>

                            <tr>
                                <td class="meta-head">D.O</td>
                                <td><textarea name="do"></textarea></td>
                                <td class="meta-head">Date</td>
                                <td><textarea id="date" name="doodate"><?php echo $d; ?></textarea></td>
                            </tr>
                        </table>

                    </div>

                </div>


                <div class="col-md-12">
                    <table border="1" style="border-collapse:collapse;width:100%;border-radius:5px;">
                        <tbody>
                        <tr align="center">
                            <td rowspan="2" style="width: 20px;">رقم الصنف <br>
                                Item No</td>
                            <td rowspan="2">  Description الـتـفـاصـيــــــل</td>
                            <td rowspan="2">Quantity  الكمية</td>
                            <td colspan="2">سعر الوحدة  <br>
                                Unit Price</td>

                            <td colspan="2">المبلغ الإجمالي <br>
                                Total Amount</td>
                        </tr>
                        <tr align="center">
                            <td>درهم.<br>
                                Dhs.</td>
                            <td>فلس <br>
                                Fils</td>
                            <td>درهم. <br>
                                Dhs.</td>
                            <td>فلس <br>
                                Fils</td>
                        </tr>

                        <tr align="center" >

                            <td>1</td>
                            <td class="description"><textarea placeholder="Description"
                                                              name="description[]"></textarea></td>
                            <td><textarea class="qty" placeholder="Quantity" name="qty[]"></textarea></td>
                            <td><textarea class="cost" placeholder="Cost" name="cost[]"></textarea></td>

                            <td><span class="price">0</span></td>
                            <td><span class="price">0</span></td>
                            <td><span class="price">0</span></td>


                        </tr>
                        <span>

                        <tr align="center">

                            <td>1</td>
                            <td class="description"><textarea placeholder="Description"
                                                              name="description[]"></textarea></td>
                            <td><textarea class="qty" placeholder="Quantity" name="qty[]"></textarea></td>
                            <td><textarea class="cost" placeholder="Cost" name="cost[]"></textarea></td>

                            <td><span class="price">0</span></td>
                            <td><span class="price">0</span></td>
                            <td><span class="price">0</span></td>


                        </tr>
                        </span>





                        <tr >
                            <td colspan="7">
                                <a id="addrow"  title="Add a row">Add a row</a>
                            </td>
                        </tr>


                        <script>

                            var counter = 1;
                            jQuery('#addrow').click(function(event){
                                event.preventDefault();
                                counter++;
                                var newRow = jQuery('<tr align="center">\n' +
                                    '\n' +
                                    '                            <td>1</td>\n' +
                                    '                            <td class="description"><textarea placeholder="Description"\n' +
                                    '                                                              name="description[]"></textarea></td>\n' +
                                    '                            <td><textarea class="qty" placeholder="Quantity" name="qty[]"></textarea></td>\n' +
                                    '                            <td><textarea class="cost" placeholder="Cost" name="cost[]"></textarea></td>\n' +
                                    '\n' +
                                    '                            <td><span class="price">0</span></td>\n' +
                                    '                            <td><span class="price">0</span></td>\n' +
                                    '                            <td><span class="price">0</span></td>\n' +
                                    '\n' +
                                    '\n' +
                                    '                        </tr>');
                                jQuery('#adding').prepend(newRow);
                            });
                        </script>

                        <div id="adding">

                        </div>


                        <tr>
                            <td colspan="5">Sub Total</td>
                            <td align="center">

                            </td>
                            <td align="center"></td>
                        </tr>


                        <tr>
                            <td colspan="5">VAT</td>
                            <td align="center">

                            </td>
                            <td align="center"></td>
                        </tr>
                        <tr>
                            <td colspan="5">Net Amount</td>
                            <td align="center">

                            </td>
                            <td align="center"></td>
                        </tr>
                        </tbody>
                    </table>
                </div>


                <!--<div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <table id="items">

                            <tr>
                                <th>items</th>
                                <th>Description</th>
                                <th>Unit Cost(د.إ)</th>
                                <th>Quantity</th>
                                <th>Price</th>
                            </tr>

                            <tr class="item-row">
                                <td>1</td>
                                <td class="description"><textarea placeholder="Description"
                                                                  name="description[]"></textarea></td>
                                <td><textarea class="cost" placeholder="Cost" name="cost[]"></textarea></td>
                                <td><textarea class="qty" placeholder="Quantity" name="qty[]"></textarea></td>
                                <td><span class="price">0</span></td>
                            </tr>


                            <tr id="hiderow">
                                <td colspan="5"><a id="addrow" href="javascript:;" title="Add a row">Add a row</a></td>
                            </tr>

                            <tr>
                                <td colspan="2" class="blank"></td>
                                <td colspan="2" class="total-line">Subtotal</td>
                                <td class="total-value">
                                    <div id="subtotal"></div>
                                </td>
                            </tr>
                            <tr>

                                <td colspan="2" class="blank"></td>
                                <td colspan="2" class="total-line">Total</td>
                                <td class="total-value">
                                    <div id="total"></div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="blank"></td>
                                <td colspan="2" class="total-line">Amount Paid</td>

                                <td class="total-value"><textarea id="paid" name="totalpaid"
                                                                  placeholder="د.إ"></textarea></td>
                            </tr>
                            <tr>
                                <td colspan="2" class="blank"></td>
                                <td colspan="2" class="total-line balance">Balance Due</td>
                                <td class="total-value balance">
                                    <div class="due"></div>
                                </td>
                            </tr>

                        </table>

                    </div>
                    <div class="col-md-1"></div>
                </div>
-->

                <div class="row">
                    <div class="col-md-12"><br>
                        <input type="submit" class="form-control btn btn-info" name="submit" value="Save & Submitt"
                               style="font-size: 20px" style="height: 70px"/></div>
                </div>
            </form>
            <!-- /. ROW  -->
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>


<script>


</script>
<!-- /. WRAPPER  -->
<!-- JS Scripts-->
<!-- jQuery Js -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!-- Bootstrap Js -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Metis Menu Js -->
<script src="assets/js/jquery.metisMenu.js"></script>
<!-- Morris Chart Js -->
<script src="assets/js/morris/raphael-2.1.0.min.js"></script>
<!--<script src="assets/js/morris/morris.js"></script>-->
<!--<!-- Custom Js -->-->
<!--<script src="assets/js/custom-scripts.js"></script>-->


</body>

</html>