<?php session_start();
if(!isset($_SESSION['userId'])){
    header("Location:login.php");
}
?>
<?php include "header.php";  ?>
<div class="row">
    <div class="col-sm-4">
        <h3 class="well well-sm" style="text-align: center;">Find Directions Below</h3>

        <?php

if(isset($_GET['details'])) {
   include "map2.php";
}
else{
    include "map.php";
}
        if(isset($_GET['bookId'])){
            $deleteId=$_GET['bookId'];
            $result="DELETE FROM bookings where id ='$deleteId'";
            if(mysqli_query($connect,$result)){
                echo "<script>alert('You have successfully deleted an item')</script>";

            }
        }
        ?>
        <h3 class="well well-sm" style="text-align: center;font-family: 'Lucida Bright';">My Booking History</h3>
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
            if(isset($_SESSION['userId'])) {
                $userId= $_SESSION['userId'];
                $getBookings = "SELECT * FROM bookings where userId='$userId'";
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
                <td><a href="user.php?bookId=<?php echo $id;  ?>" class="btn btn-danger btn-block"><span class="glyphicon glyphicon-remove"></span></a></td>
            </tr>
                    <?php

                }

            }
                    ?>
            </tbody>
        </table>
    </div><!--End of col-sm-4-->
    <div class="col-sm-8">
        <?php
        if(isset($_GET['details'])){
            include 'details.php';
        }else{
            include "places.php";
        }

        ?>
    </div><!--End of col-sm-8-->
</div><!--End of row-->
<?php include "footer.php";  ?>