<table align="center" border="0" cellpadding="0" cellspacing="0" style=""  width="800px" >
    <tr >
        <td style="text-align: center;">
    <center> <img src="<?php echo site_mail_logo; ?> " style="margin: 10px auto;
                  height: 50px;background: black;
                  width: auto;"/></center>
    <br/>
    2nd Floor, 45 Haiphong Road,
    Tsim Sha Tsui, Kowloon, Hong Kong.<br/>

    Shop D, Ground Floor, Hanyee Building, 19-21 Hankow Road, 
    Tsim Sha Tsui, Kowloon, Hong Kong. <br/>
    <b>Tel #</b>: +(852) 27308566  <b>Fax #</b>: +(852) 27308577<br/>
    <b>Email</b> :info@bespoketailorshk.com  
    <b>Web</b> :www.bespoketailorshk.com</b>
</td>


</tr>

</table>
<div style="width: 1000px">


<div class="" style="float: left;border: 1px solid #000;padding:10px;margin: 10px 0px;height: 215px;width: 50%">
    <h3>Shipping Address</h3>
    <table class="gn_table" style="margin-top: 10px;">

        <tr>
            <td colspan="2">
                <span style="text-transform: capitalize;"> 
                    <?php echo $order_data->name; ?>
                </span> <br/>
                <div style="    padding: 5px 0px;">
                    <?php echo $order_data->address1; ?><br/>
                    <?php echo $order_data->address2; ?><br/>
                    <?php echo $order_data->state; ?>
                    <?php echo $order_data->city; ?>

                    <?php echo $order_data->country; ?> <?php echo $order_data->zipcode; ?>

                </div></td>
        </tr>
        <tr>
            <th style="text-align: left;">Email</th>
            <td>: <?php echo $order_data->email; ?> </td>
        </tr>
        <tr>
            <th style="text-align: left;">Contact No.</th>
            <td>: <?php echo $order_data->contact_no; ?> </td>
        </tr>
    </table>
</div>


<div class="" style="float: right;border: 1px solid #000;padding:10px;margin: 10px 0px;height: 215px;width: 40%">
    <h3>Order Information</h3>
    <table class="gn_table" style="margin-top: 10px;">

        <tr>
            <th style="text-align: right;">Order No.</th>
            <td>: <?php echo $order_data->order_no; ?> </td>
        </tr>
        <tr>
            <th style="text-align: right;">Date Time</th>
            <td>: <?php echo $order_data->order_date; ?> <?php echo $order_data->order_time; ?>  </td>
        </tr>
        <tr>
            <th style="text-align: right;">Payment Mode</th>
            <td>: <?php echo $order_data->payment_mode; ?> </td>
        </tr>
        <tr>
            <th style="text-align: right;">Txn No.</th>
            <td>: <?php echo $payment_details['txn_id'] ? $payment_details['txn_id'] : '---'; ?> </td>
        </tr>
        <tr>
            <th style="text-align: right;">Status</th>
            <td>: <?php
                if ($order_status) {
                    echo end($order_status)->status;
                } else {
                    echo "Pending";
                }
                ?> </td>
        </tr>
    </table>

</div>
</div>
<table class="carttable"   align="center" border="0" cellpadding="0" cellspacing="0" width="1000" style="background: #fff;padding:5px;border: 1px solid rgb(157, 153, 150);">


    <tr style="font-weight: bold">
        <td colspan="6"  style="text-align: left;padding: 10px;border: 1px solid rgb(157, 153, 150);border-collapse: collapse;background: rgb(157, 153, 150)">
            <h3 style="    margin-bottom: 0px;">Order Description</h3>

        </td>

    </tr>
    <tr style="font-weight: bold">
        <td style="width: 20px;text-align: center;border: 1px solid rgb(157, 153, 150);border-collapse: collapse;padding: 0px 10px;">S.No.</td>
        <td colspan="2"  style="text-align: center;border: 1px solid rgb(157, 153, 150);border-collapse: collapse;padding: 0px 10px;">Product</td>

        <td style="text-align: right;width: 60px;border: 1px solid rgb(157, 153, 150);border-collapse: collapse;padding: 0px 10px;">Price<br/><span style="font-size: 10px">(In <?php echo globle_currency; ?>)</span></td>
        <td style="text-align: right;width: 60px;border: 1px solid rgb(157, 153, 150);border-collapse: collapse;padding: 0px 10px;">Qnty.</td>
        <td style="text-align: right;width: 60px;border: 1px solid rgb(157, 153, 150);border-collapse: collapse;padding: 0px 10px;">Total<br/><span style="font-size: 10px">(In  <?php echo globle_currency; ?>)</span></td>
    </tr>
    <!--cart details-->
    <?php
    foreach ($cart_data as $key => $product) {
        ?>
        <tr style="border: 1px solid #000">
            <td style="padding: 0px 10px;border: 1px solid rgb(157, 153, 150);border-collapse: collapse;">
                <?php echo $key + 1; ?>
            </td>

            <td style="width: 50px;padding: 0px 10px;border: 1px solid rgb(157, 153, 150);border-collapse: collapse;">
        <center> 
            <img src=" <?php echo $product->file_name; ?>" style="height: 50px;">
        </center>
    </td>

    <td style="width: 200px;padding: 0px 10px;border: 1px solid rgb(157, 153, 150);border-collapse: collapse;">
        <?php echo $product->title; ?> - <?php echo $product->item_name; ?><br/>
        <small style="font-size: 10px;">(<?php echo $product->sku; ?>)</small>


    </td>

    <td style="text-align: right;padding: 0px 10px;border: 1px solid rgb(157, 153, 150);border-collapse: collapse;">
        <?php echo $product->price; ?>
    </td>

    <td style="text-align: right;padding: 0px 10px;border: 1px solid rgb(157, 153, 150);border-collapse: collapse;">
        <?php echo $product->quantity; ?>
    </td>

    <td style="text-align: right;padding: 0px 10px;border: 1px solid rgb(157, 153, 150);border-collapse: collapse;">
        <?php echo $product->total_price; ?>
    </td>
    </tr>
    <tr>
        <td colspan="6" style="border: 1px solid rgb(157, 153, 150);border-collapse: collapse;padding: 10px 10px;">
            <b>Style Details : <?php echo $product->title; ?> - <?php echo $product->item_name; ?></b>
            <br/>
            <table><?php
                foreach ($product->custom_dict as $key => $value) {
                    echo "<tr><td>$key</td><td> $value</td></tr>";
                }
                ?>  
            </table>
        </td>
    </tr>
    <?php
}
?>
<!--end of cart details-->

<tr>
    <td colspan="2"  rowspan="5" style="">
        Measurement Type :
        <?php
        echo $order_data->measurement_style;
        ?>
    </td>

</tr>
<tr style="font-size: 25px;">
    <td colspan="2" style="text-align: right;text-align: right;padding: 0px 10px;border: 1px solid rgb(157, 153, 150);border-collapse: collapse;">Sub Total</td>
    <td  colspan="2" style="text-align: right;width: 60px;text-align: right;padding: 0px 10px;border: 1px solid rgb(157, 153, 150);border-collapse: collapse;"><?php echo globle_currency . " " . number_format($order_data->sub_total_price, 2, '.', ''); ?> </td>
</tr>
<tr style="font-size: 25px;">
    <td colspan="2" style="text-align: right;text-align: right;padding: 0px 10px;border: 1px solid rgb(157, 153, 150);border-collapse: collapse;">Shipping Amount</td>
    <td  colspan="2" style="text-align: right;width: 60px;text-align: right;padding: 0px 10px;border: 1px solid rgb(157, 153, 150);border-collapse: collapse;"><?php echo globle_currency . " " . number_format($order_data->credit_price, 2, '.', ''); ?> </td>
</tr>
<tr style="font-size: 25px;">
    <td colspan="2" style="text-align: right;text-align: right;padding: 0px 10px;border: 1px solid rgb(157, 153, 150);border-collapse: collapse;">Coupon Discount</td>
    <td  colspan="2" style="text-align: right;width: 60px;text-align: right;padding: 0px 10px;border: 1px solid rgb(157, 153, 150);border-collapse: collapse;"><?php echo globle_currency . " " . number_format($order_data->credit_price, 2, '.', ''); ?> </td>
</tr>
<tr style="font-size: 25px;">
    <td colspan="2" style="text-align: right;text-align: right;padding: 0px 10px;border: 1px solid rgb(157, 153, 150);border-collapse: collapse;">Toal Amount</td>
    <td  colspan="2" style="text-align: right;width: 60px;text-align: right;padding: 0px 10px;border: 1px solid rgb(157, 153, 150);border-collapse: collapse;"><?php echo globle_currency . " " . number_format($order_data->total_price, 2, '.', ''); ?> </td>
</tr>




</table>

