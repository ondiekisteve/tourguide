<?php
$success="";
if(isset($_POST['updatedescription']))
{
    $editdescriptionId=$_GET['editdescriptionId'];
    $placeId=$_POST['place'];
    $actual_price=$_POST['actual_price'];
    $discount=$_POST['discount'];
    $description=$_POST['description'];
    $amenities=$_POST['amenities'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $reacreation_activity=$_POST['reacreation_activity'];
    $upload_image=$_FILES['upload_image']['name'];
    $tmp_image=$_FILES['upload_image']['tmp_name'];
    $update="UPDATE place_description SET place_id='$placeId',image='$upload_image',actual_price='$actual_price',discount='$discount',description='$description',surrounding_amenities='$amenities',guide_assistant='$name',email='$email',phone='$phone',recreation_activities='$reacreation_activity' WHERE id='$editdescriptionId'";

    if(mysqli_query($connect,$update))
    {
        move_uploaded_file($tmp_image,"../img/$upload_image");
        echo "Information updated successfully";
    }
    else{
        echo 'oops! error occured in updating please try agian';
    }
}
?>
<h3 class="well" style="text-align: center;font-family: 'Lucida Bright';">Add Place Description</h3>
<?php

if(isset($_GET['editdescriptionId'])){

    $editdescriptionId=$_GET['editdescriptionId'];
    $getRecords="SELECT * FROM place_description where id='$editdescriptionId'";
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
<form method="post"action="index.php?editdescriptionId=<?php echo $editdescriptionId; ?>"class="form-horizontal" style="border: 1px solid lightgrey;padding: 10px;" enctype="multipart/form-data">
    <div class="form-group">
        <label class="control-label col-sm-3">Select Place</label>
        <div class="col-sm-9">
            <select name="place" class="form-control">
                <?php
                $getPlaces='SELECT * FROM markers';
                $result=mysqli_query($connect,$getPlaces);
                while ($row=mysqli_fetch_array($result))
                {
                    $id=$row['id'];
                    $name=$row['name'];
                    ?>
                    <option value="<?php echo $id; ?>"><?php echo $name; ?></option>
                <?php } ?>
            </select>
        </div><!--End of col-sm-9-->
    </div><!--End of form-group-->
    <div class="form-group">
        <label class="control-label col-sm-3">Image</label>
        <div class="col-sm-9">
            <input type="file"class="form-control"name="upload_image">
            <span class="form-helper"><img src="../img/<?php echo $image; ?>" width="60px"height="60px"></span>
        </div><!--End of col-sm-9-->
    </div><!--End of form-group-->
    <div class="form-group">
        <label class="control-label col-sm-3">Actual price</label>
        <div class="col-sm-9">
            <input type="text"class="form-control"name="actual_price" value="<?php echo $actual_price;  ?>">
        </div><!--End of col-sm-9-->
    </div><!--End of form-group-->
    <div class="form-group">
        <label class="control-label col-sm-3">Discount</label>
        <div class="col-sm-9">
            <input type="text"class="form-control"name="discount" value="<?php echo $discount;  ?>">
        </div><!--End of col-sm-9-->
    </div><!--End of form-group-->
    <div class="form-group">
        <label class="control-label col-sm-3">Description</label>
        <div class="col-sm-9">
            <textarea class="form-control" name="description">
                <?php echo $description; ?>
            </textarea>
        </div><!--End of col-sm-9-->
    </div><!--End of form-group-->
    <div class="form-group">
        <label class="control-label col-sm-3">Surrounding Amenities</label>
        <div class="col-sm-9">
            <input type="checkbox" name="amenities" value="Hospital"> Hospital
            <input type="checkbox" name="amenities" value="Primary School">Primary School
            <input type="checkbox" name="amenities" value="Secondary School">Secondary School
            <input type="checkbox" name="amenities" value="Police Station">Police Station
            <input type="checkbox" name="amenities" value=Market">Market
        </div><!--End of col-sm-9-->
    </div><!--End of form-group-->
    <div class="form-group">
        <label class="control-label col-sm-3">Guide Assistant Name</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="enter full name" name="name" value="<?php echo $name;  ?>">
        </div><!--End of col-sm-9-->
    </div><!--End of form-group-->
    <div class="form-group">
        <label class="control-label col-sm-3">Email of the tour Guide</label>
        <div class="col-sm-9">
            <input type="email" class="form-control" placeholder="enter email" name="email" value="<?php echo $email;  ?>">
        </div><!--End of col-sm-9-->
    </div><!--End of form-group-->
    <div class="form-group">
        <label class="control-label col-sm-3">Tour Guide phone Number</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="enter phone number" name="phone" value="<?php echo $phone;  ?>">
        </div><!--End of col-sm-9-->
    </div><!--End of form-group-->
    <div class="form-group">
        <label class="control-label col-sm-3">Recreation Activities</label>
        <div class="col-sm-9">
            <input type="checkbox" name="reacreation_activity" value="Swimming"> Swimming
            <input type="checkbox" name="reacreation_activity" value="Mountain Climbing"> Mountain Climbing
            <input type="checkbox" name="reacreation_activity" value="Scating"> Scating
            <input type="checkbox" name="reacreation_activity" value="Horse Racing"> Horse Racing
            <input type="checkbox" name="reacreation_activity" value="Sports"> Sports
        </div><!--End of col-sm-9-->
    </div><!--End of form-group-->
    <div class="form-group">
        <label class="control-label col-sm-3"></label>
        <div class="col-sm-9">
            <input type="submit"name="updatedescription" value="Update" class="btn btn-success"/>
        </div><!--End of col-sm-9-->
    </div><!--End of form-group-->
</form>

<?php }} ?>