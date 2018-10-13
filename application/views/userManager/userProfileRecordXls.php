<?php
function userReportFunction($users) {
    ?>
    <table border="1">
        <thead>
            <tr>
                <th style="width: 20px;">S.N.</th>
                <th style="width: 100px;">Customer Type</th>
                <th style="width: 250px;">Name</th>
                <th style="width: 250px;">Email</th>
                <th style="width: 100px;">Contact No.</th>
                <th style="width: 200px;">Reg. Date Time</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (count($users)) {

                $count = 1;
                foreach ($users as $key => $value) {
                    ?>
                    <tr>
                        <td><?php echo $count; ?></td>
                        <td><?php echo $value->user_type; ?></td>
                        <td><?php echo $value->first_name; ?><?php echo $value->last_name; ?></td>
                        <td><?php echo $value->email; ?></td>
                        <td><?php echo $value->contact_no; ?></td>

                        <td><?php echo $value->registration_datetime; ?></td>
                    </tr>
                    <?php
                    $count++;
                }
            }
            ?>
        </tbody>
    </table>
    <?php
}
?>
<?php
userReportFunction($users_all);
?>
             