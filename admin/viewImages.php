<h3 class="well" style="text-align: center;font-family: 'Lucida Bright';">View Uploaded Images</h3>

<table class="table table-bordered table-striped" >
    <thead style="background-color: teal;color: white;">
    <tr>
    <th>NO</th>
    <th>PLACE</th>
    <th>CAPTION</th>
    <th>IMAGE</th>
    <th>EDIT</th>
    <th>DELETE</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $counter=1;
    $getImages="SELECT i.id,i.place_id,i.caption,i.image,p.name FROM images i,markers p WHERE i.place_id=p.id";
    $result=mysqli_query($connect,$getImages);
    while ($row=mysqli_fetch_array($result))
    {
        $id=$row['id'];
        $place_id=$row['place_id'];
        $caption=$row['caption'];
        $name=$row['name'];
        $image=$row['image'];
        ?>
        <tr>
            <td><?php echo $counter; ?></td>
            <td><?php echo $name; ?></td>
            <td><?php echo $caption; ?></td>
            <td><img src="../img/<?php echo $image; ?>" width="60px"height="60px"></td>
            <td><a href="index.php?editImageId=<?php echo $id; ?>">EDIT</a></td>
            <td><a href="index.php?deleteImageId=<?php echo $id; ?>">DELETE</a></td>
        </tr>
        <?php
        $counter++;
    } ?>
    </tbody>
</table>