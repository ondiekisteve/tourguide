<h3 class="well" style="text-align: center;font-family: 'Lucida Bright';">View Registered Users</h3>

<table class="table table-bordered table-striped">
    <thead style="background-color: teal;color: white;">
    <th>NO</th>
    <th>FIRST NAME</th>
    <th>LAST NAME</th>
    <th>ID NUMBER</th>
    <th>PHONE </th>
    <th>EMAIL</th>
    <th>RESIDENCE</th>
    <th>DELETE</th>
    </thead>
    <tbody>
    <?php
    $counter=1;
    $getRecords="SELECT * FROM members";
    $result=mysqli_query($connect,$getRecords);
    while ($row=mysqli_fetch_array($result))
    {
        $id=$row['id'];
        $fname=$row['fname'];
        $lname=$row['lname'];
        $idno=$row['idno'];
        $mobile=$row['mobile'];
        $email=$row['email'];
        $residence=$row['residence'];
        ?>
        <tr>
            <td><?php echo $counter; ?></td>
            <td><?php echo $fname; ?></td>
            <td><?php echo $lname; ?></td>
            <td><?php echo $idno; ?></td>
            <td><?php echo $mobile; ?></td>
            <td><?php echo $email; ?></td>
            <td><?php echo $residence; ?></td>
            <td><a href="index.php?userDeleteId=<?php echo $id; ?>">DELETE</a></td>
        </tr>
        <?php
        $counter++;
    } ?>
    </tbody>
</table>