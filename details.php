<?php
include 'includes/db-connection.php';
$success="";
if(isset($_POST['book'])){
    $userId="";
   $fromdate=$_POST['fromdate'];
   $todate=$_POST['todate'];
   $totalprice=$_POST['totalprice'];
   $days=$_POST['days'];
   $placeName=$_POST['placeName'];
   if(isset($_SESSION['userId']))
   {
       $userId=$_SESSION['userId'];
   }
   $insertdata="INSERT INTO bookings (fromdate,place,todate,price,days,userId)VALUES ('$fromdate','$placeName','$todate','$totalprice','$days','$userId')";
   if(mysqli_query($connect,$insertdata))
   {
       echo "<script>alert('Booking made successfully')</script>";
   }
}
?>
<div class="row">
    <?php
    if(isset($_GET['details']))
    {
        $detail_id=$_GET['details'];
    $counter=1;
    $getRecords="SELECT * FROM place_description WHERE id='$detail_id'";
    $result=mysqli_query($connect,$getRecords);
    while ($row=mysqli_fetch_array($result)) {
        $id = $row['id'];
        $place_id=$row['place_id'];
        $image = $row['image'];
        $actual_price = $row['actual_price'];
        $discount = $row['discount'];
        $description = $row['description'];
        $surrounding_amenities = $row['surrounding_amenities'];
        $name = $row['guide_assistant'];
        $email = $row['email'];
        $phone = $row['phone'];
        $recreation_activity = $row['recreation_activities'];
        $getMarkers="SELECT * from markers WHERE id='$place_id'";
        $result2=mysqli_query($connect,$getMarkers);
        
        ?>

        <?php
        while ($row2=mysqli_fetch_array($result2))
        {
            $place_name=$row2['name'];
            $type=$row2['type']; 
            ?>
            <div class="row">
                <div class="col-sm-12">
                    <div class="well well-sm">
                        <h3 style="text-align: center;"><?php echo $place_name." ".$type ; ?></h3>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="thumbnail">
                            <p style="padding: 10px;">
                                <h3 style="text-align: center;">Description</h3>
                                <hr/>
                                <?php echo $description; ?>
                            </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="thumbnail">
                                <p style="padding: 10px;">
                                <h3 style="text-align: center;">Price</h3>
                                <hr/>
                                <li class="list-group-item">Original Price: <b class="badge">ksh.<i style="text-decoration: line-through;"><?php echo $actual_price; ?></i></b></li>
                                <li class="list-group-item">Discount :<b class="badge"><?php echo $discount ?>%</b></li>
                                <li class="list-group-item">Discounted Price : <b class="badge">Ksh.<?php echo $actual_price-(($actual_price*$discount)/100); ?></b></li>
                                <li class="list-group-item"><a href="#" class="btn btn-success btn-block" id="bookformbutton">Make a Booking</a> </li>
                                <li class="list-group-item" id="bookformbutton">
                                    <form method="post" class="form-horizontal" id="bookform" action="user.php?details=<?php echo $id; ?>">
                                        <div class="form-group">
                                            <label class="control-label col-sm-3">From</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="fromdate" class="form-control"id="from">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-3">To</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="todate" class="form-control" id="to">
                                            </div>
                                        </div>
                                        <div class="form-group hidden">
                                            <label class="control-label col-sm-3"></label>
                                            <div class="col-sm-9">
                                                <input type="text" name="actualprice" class="form-control" id="price"value="<?php echo $actual_price-(($actual_price*$discount)/100); ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-3">Number of Days</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="days" class="form-control" id="days" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-3">Place Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="placeName" class="form-control" id="placeName" value="<?php echo $place_name; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-3">Total Price</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="totalprice" class="form-control" id="totalprice" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-3"></label>
                                            <div class="col-sm-9">
                                                <span class="form-helper"><?php echo $success;  ?></span>
                                                <input type="submit" value="Book" class="btn btn-success"name="book"/>
                                            </div>
                                        </div>
                                    </form>
                                </li>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End of row-->
    <div class="row">
        <div class="col-sm-12">
            <h3 style="text-align: center" class="well well-sm">Gallery</h3>
        </div>
    </div>
            <div class="row">
            <?php

            $getImages="SELECT * FROM images where place_id='$place_id'";
            $result3=mysqli_query($connect,$getImages);
            while ($row3=mysqli_fetch_array($result3))
            {
                $imageId=$row3['id'];
                $place_image=$row3['image'];
                $caption=$row3['caption'];
            ?>
            <div class="img-thumbnail">
                <div class='thumbnail-caption'style='text-align:center;font-family:impact;font-size:18px;'><?php echo $caption ?></div>
                <img src="img/<?php echo $place_image; ?>" width='245px'height='190px'>
            </div>
        <?php } ?>
            </div>
            <div  class="row">
                <h3 style="text-align: center;" class="well well-sm">Tour Guide Details</h3>
            </div>
                <div class="row">
        <div>
            <table class="table table-bordered" style="background-color: teal;color: white;">
                <tr>
                    <td>Full Name: </td>
                    <td><?php echo $name ?></td>
                </tr>
                <tr>
                    <td>Email: </td>
                    <td><?php echo $email ?></td>
                </tr>
                <tr>
                    <td>Telephone: </td>
                    <td><?php echo $phone ?></td>
                </tr>
            </table>
        </div>
    </div>
    <?php }} } ?>

</div>