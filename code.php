<?php
include 'inc/header.php';
include 'inc/sidebar.php';
include 'inc/footer.php'
?>

<!doctype html>
<html>
<head>

    <meta charset="utf-8">

    <title></title>



    <meta http-equiv="cache-control" content="max-age=0"/>

    <meta http-equiv="cache-control" content="no-cache"/>

    <meta http-equiv="expires" content="0"/>

    <meta http-equiv="pragma" content="no-cache"/>

    <link rel="shortcut icon" href="images/icon.png"/>



    <!--Stylesheet for Add Invoice Module-->
    <link rel="stylesheet" href="assets/css/styleAddInvoice.css">


    <style type="text/css" media="all">

    </style>
    <script>
        $( function() {
            $( "#datepicker" ).datepicker();
        } );
    </script>

</head>



<body>

<body>



<div class="invoice">
    <div >
        <div   style="width:100%;">
            <img class="img-responsive"style="margin-top: 0px; width: 100%;height: 100px; background-size: contain; " src="http://jaytronlabs.com/v4/POSS/uploads/invoice-layout-naveed.jpg"  >
        </div>

        <div class="clearfix"></div>
    </div>

<!--    Sr no | Tax Invoice | Date-->
    <div class="second" >
        <div class="second left" style="float: left">

        </div>
        <div class="second center" style="float: left" >

        </div>
        <div class="second right"  style="float: left" >


        </div>
        <div class="clearfix"></div>
    </div>

    <div >
        <input  type="checkbox"> <strong>Cash</strong></input>
        <input  type="checkbox"> <strong>Debit</strong></input>
    </div>
    <div class="logo">
        <div class="logo-left">
            <p>Mr. M/s &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;السيد / السادة </p>
            <p>.............................................................</p>
            <p>.............................................................</p>
        </div>
        <div class="logo-right">
            <table style="border-collapse:collapse;width:100%;">
                <tbody>
                <tr>
                    <td>Party <br>A/C Code</td>
                    <td colspan="2">

                    Hello
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>L.P.O. No.</strong>رقم طلب شراء  </td>

                    <td colspan="2">Date التاريخ </td>

                </tr>
                <tr>
                    <td>
                        <strong>D.O. No.</strong> اذن تسليم رقم</td>

                    <td colspan="2">Date>االتاريخ </td>

                </tr>
                </tbody>
            </table>
        </div>
        <div class="clearfix"></div>
    </div>
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

        <tr align="center">
            <!--Item Number-->    <!--Product name-->            <!--Quantity-->  <!--Quantity-->  <!--Unit Price Fills-->  <!--Unit Price Fills-->
            <td></td>     <td><textarea></textarea></td>     <td></td>         <td></td>           <td></td>                <td></td>     <td></td>

        </tr>

        <tr align="center">
            <!--Item Number-->    <!--Product name-->            <!--Quantity-->  <!--Quantity-->  <!--Unit Price Fills-->  <!--Unit Price Fills-->
            <td></td>     <td><textarea></textarea></td>     <td></td>         <td></td>           <td></td>                <td></td>     <td></td>

        </tr>

        <tr align="center">
            <!--Item Number-->    <!--Product name-->            <!--Quantity-->  <!--Quantity-->  <!--Unit Price Fills-->  <!--Unit Price Fills-->
            <td></td>     <td><textarea></textarea></td>     <td></td>         <td></td>           <td></td>                <td></td>     <td></td>

        </tr>

        <tr align="center">
            <!--Item Number-->    <!--Product name-->            <!--Quantity-->  <!--Quantity-->  <!--Unit Price Fills-->  <!--Unit Price Fills-->
            <td></td>     <td><textarea></textarea></td>     <td></td>         <td></td>           <td></td>                <td></td>     <td></td>

        </tr>

        <tr align="center">
            <!--Item Number-->    <!--Product name-->            <!--Quantity-->  <!--Quantity-->  <!--Unit Price Fills-->  <!--Unit Price Fills-->
            <td></td>     <td><textarea></textarea></td>     <td></td>         <td></td>           <td></td>                <td></td>     <td></td>

        </tr>




        <!--Subtotal 5 rows |amount|fils-->
        <tr>
            <td colspan="5">Sub Total</td>
            <td align="center">

            </td>
            <td align="center"></td>
        </tr>

        <!--VAT|Dhr|Fils-->
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
    <div >
        <h1 style="font-size: 14px; padding: 10px;">Reciever's Sign   توقيع المستلم	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;For Almujahid Press</h1>