<div class="row">
    <?php
    $counter=1;
    $getRecords="SELECT * FROM place_description";
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
        while ($row2=mysqli_fetch_array($result2))
        {
            $place_name=$row2['name'];
            $type=$row2['type'];
        ?>
        <div class="img-thumbnail">
            <div class='thumbnail-caption'style='text-align:center;font-family:impact;font-size:18px;'><?php echo $place_name." ".$type; ?></div>
            <img src="img/<?php echo $image; ?>" width='245px'height='190px'>
            <a href="user.php?details=<?php echo $id;?>&markerId=<?php echo $place_id; ?>" class="btn btn-success btn-block">View Details</a>
        </div>
    <?php }} ?>
    
</div>