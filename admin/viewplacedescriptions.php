<h3 class="well" style="text-align: center;font-family: 'Lucida Bright';">View Place Description</h3>

<table class="table table-bordered table-condensed table-striped">
    <thead style="background-color: teal;color: white; font-family: 'Lucida Bright';">
    <tr style="text-transform: lowercase;">
        <th>NO</th>
        <th>Image</th>
        <th>ACTUAL PRICE</th>
        <th>DISCOUNT</th>
        <th>DESCRIPTION</th>
        <th>AMENITIES</th>
        <th>TOUR GUIDE NAME</th>
<!--        <th>EMAIL</th>-->
        <th>PHONE NUMBER</th>
        <th>RECREATION ACTIVITIES</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $counter=1;
    $getRecords="SELECT * FROM place_description";
    $result=mysqli_query($connect,$getRecords);
    while ($row=mysqli_fetch_array($result))
    {
        $id=$row['id'];
        $image=$row['image'];
        $actual_price=$row['actual_price'];
        $discount=$row['discount'];
        $description=$row['description'];
        $surrounding_amenities=$row['surrounding_amenities'];
        $name=$row['guide_assistant'];
        $email=$row['email'];
        $phone=$row['phone'];
        $recreation_activity=$row['recreation_activities'];
    ?>
    <tr>
        <td><?php echo $counter; ?></td>
        <td><img src="../img/<?php echo $image; ?>" width="60px" height="60px"></td>
        <td><?php echo $actual_price; ?></td>
        <td><?php echo $discount; ?></td>
        <td><?php echo $description; ?></td>
        <td><?php echo $surrounding_amenities; ?></td>
        <td><?php echo $name; ?></td>
<!--        <td>--><?php //echo $email; ?><!--</td>-->
        <td><?php echo $phone; ?></td>
        <td><?php echo $recreation_activity; ?></td>
        <td><a href="index.php?editdescriptionId=<?php echo $id; ?>">EDIT</a></td>
        <td><a href="index.php?descriptionId=<?php echo $id; ?>">DELETE</a></td>
    </tr>
    <?php
    $counter++;
    } ?>
    </tbody>
</table>