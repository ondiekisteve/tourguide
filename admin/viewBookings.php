<h3 class="well well-sm" style="text-align: center;font-family: 'Lucida Bright';">Booking History</h3>
<table class="table table-bordered table-condensed" style="background-color: teal;color: white;"id="bookingtable">
    <thead>
    <tr>
        <th>Place</th>
        <th>From Date </th>
        <th>To Date </th>
        <th>Price</th>
        <th>Days</th>
        <th>Remove</th>
    </tr>
    </thead>

    <tbody>
    <?php
        $getBookings = "SELECT * FROM bookings";
        $result=mysqli_query($connect,$getBookings);
        while ($row=mysqli_fetch_array($result)){
            $id=$row['id'];
            $place=$row['place'];
            $fromdate=$row['fromdate'];
            $todate=$row['todate'];
            $price=$row['price'];
            $days=$row['days'];
            ?>
            <tr>
                <td><?php echo $place; ?></td>
                <td><?php echo $fromdate;  ?></td>
                <td><?php echo $todate; ?></td>
                <td><?php echo $price; ?></td>
                <td><?php echo $days; ?></td>
                <td><a href="index.php?bookingId=<?php echo $id;  ?>" class="btn btn-danger btn-block"><span class="glyphicon glyphicon-remove"></span></a></td>
            </tr>
            <?php

    }
    ?>
    </tbody>
</table>