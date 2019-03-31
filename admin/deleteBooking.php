<?php
if(isset($_GET['bookingId'])){
    $deleteId=$_GET['bookingId'];
    $result="DELETE FROM bookings where id ='$deleteId'";
    if(mysqli_query($connect,$result)){
        echo "<script>alert('You have successfully deleted an item')</script>";
        echo "<script>window.open('index.php?viewBookings','_self')</script>";

    }
}
?>