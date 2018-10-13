
<table class="detailstable" align="center" border="0" cellpadding="0" cellspacing="0" width="1024" style="background: #fff">
    <tr>
        <td style="width: 50%" >
            <b>Shipping Address</b><br/><hr/>
            <span style="text-transform: capitalize;margin-top: 10px;"> 
                <?php echo $order_data->name; ?>
            </span> <br/>
            <div style="    padding: 5px 0px;">
                <?php echo $order_data->address1; ?><br/>
                <?php echo $order_data->address2; ?><br/>
                <?php echo $order_data->state; ?>
                <?php echo $order_data->city; ?>

                <?php echo $order_data->country; ?> <?php echo $order_data->zipcode; ?>

            </div>
            <table class="gn_table">
                <tr>
                    <th>Email</th>
                    <td>: <?php echo $order_data->email; ?> </td>
                </tr>
                <tr>
                    <th>Contact No.</th>
                    <td>: <?php echo $order_data->contact_no; ?> </td>
                </tr>
            </table>


        </td>
        <td style="font-size: 12px;width: 50%" >

            <table class="gn_table">
                <tr>
                    <th>Order No.</th>
                    <td>: <?php echo $order_data->order_no; ?> </td>
                </tr>
                <tr>
                    <th>Date Time</th>
                    <td>: <?php echo $order_data->order_date; ?> <?php echo $order_data->order_time; ?>  </td>
                </tr>
                <tr>
                    <th>Payment Mode</th>
                    <td>: <?php echo $order_data->payment_mode; ?> </td>
                </tr>
                <tr>
                    <th>Txn No.</th>
                    <td>: <?php echo $payment_details['txn_id'] ? $payment_details['txn_id'] : '---'; ?> </td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>: <?php
                        if ($order_status) {
                            echo end($order_status)->status;
                        } else {
                            echo "Pending";
                        }
                        ?> </td>
                </tr>
            </table>


        </td>
    </tr>
</table>
<table class="carttable"   align="center" border="1" cellpadding="0" cellspacing="0" width="1024" style="background: #fff;padding:20px">
    <tr style="font-weight: bold">
        <td style="width: 20px;text-align: center;border: 1px solid rgb(157, 153, 150);border-collapse: collapse;">S.No.</td>
        <td colspan="2"  style="text-align: center;border: 1px solid rgb(157, 153, 150);border-collapse: collapse;">Product</td>

        <td style="text-align: right;width: 60px;border: 1px solid rgb(157, 153, 150);border-collapse: collapse;">Price<br/><span style="font-size: 10px">(In <?php echo globle_currency; ?>)</span></td>
        <td style="text-align: right;width: 60px;border: 1px solid rgb(157, 153, 150);border-collapse: collapse;">Qnty.</td>
        <td style="text-align: right;width: 60px;border: 1px solid rgb(157, 153, 150);border-collapse: collapse;">Total<br/><span style="font-size: 10px">(In  <?php echo globle_currency; ?>)</span></td>
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
                <td colspan="6">
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
            <td colspan="3"  rowspan="5" style="font-size: 12px">
               
            </td>

        </tr>
        <tr>
            <td colspan="2" style="text-align: right">Sub Total</td>
            <td style="text-align: right;width: 60px"><?php echo $order_data->sub_total_price; ?> </td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: right">Shipping Amount</td>
            <td style="text-align: right;width: 60px"><?php echo $order_data->credit_price; ?> </td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: right">Coupon Discount</td>
            <td style="text-align: right;width: 60px"><?php echo $order_data->credit_price; ?> </td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: right">Toal Amount</td>
            <td style="text-align: right;width: 60px"><?php echo $order_data->total_price; ?> </td>
        </tr>




</table>

