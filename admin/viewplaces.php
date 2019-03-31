<h3 class="well" style="text-align: center;font-family: 'Lucida Bright';">View Places</h3>

<table class="table table-bordered table-striped">
    <thead style="background-color: teal;color: white;font-family: 'Lucida Bright';">
    <th>NO</th>
    <th>NAME</th>
    <th>ADDRESS</th>
    <th>LATITUDE</th>
    <th>LONGTUDE</th>
    <th>TYPE</th>
    <th>EDIT</th>
    <th>DELETE</th>
    </thead>
    <tbody>
    <?php
    $counter=1;
    $getPlaces="SELECT * FROM markers";
    $result=mysqli_query($connect,$getPlaces);
    while ($row=mysqli_fetch_array($result))
    {
        $id=$row['id'];
        $name=$row['name'];
        $address=$row['address'];
        $latitude=$row['latitude'];
        $longtude=$row['longtude'];
        $type=$row['type'];
        ?>
        <tr>
            <td><?php echo $counter; ?></td>
            <td><?php echo $name; ?></td>
            <td><?php echo $address; ?></td>
            <td><?php echo $latitude; ?></td>
            <td><?php echo $longtude; ?></td>
            <td><?php echo $type; ?></td>
            <td><a href="index.php?editPlaceId=<?php echo $id; ?>">EDIT</a></td>
            <td><a href="index.php?deletePlaceId=<?php echo $id; ?>">DELETE</a></td>
        </tr>
        <?php
        $counter++;
    } ?>
    </tbody>
</table>