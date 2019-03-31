<?php
$success="";
if(isset($_POST['submitdescription']))
{
$placeId=$_POST['place'];
$actual_price=$_POST['actual_price'];
$discount=$_POST['discount'];
$description=mysqli_real_escape_string($connect,$_POST['description']);
$amenities=$_POST['amenities'];
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$reacreation_activity=$_POST['reacreation_activity'];
$upload_image=$_FILES['upload_image']['name'];
$tmp_image=$_FILES['upload_image']['tmp_name'];
$insert="INSERT INTO place_description(place_id,image,actual_price,discount,description,surrounding_amenities,guide_assistant,email,phone,recreation_activities)
VALUES ('$placeId','$upload_image','$actual_price','$discount','$description','$amenities','$name','$email','$phone','$reacreation_activity')";

if(mysqli_query($connect,$insert))
{
    move_uploaded_file($tmp_image,"../img/$upload_image");
  $success="<div class='btn btn-success'>Information Submited successfully</div>";
}
else{
    echo 'oops! error occured in submiting please try agian';
}
}
?>
<h3 class="well" style="text-align: center;font-family: 'Lucida Bright';">Add Place Description</h3>

<form method="post"action="index.php?addplacedescription"class="form-horizontal" style="border: 1px solid lightgrey;padding: 10px;" enctype="multipart/form-data" id="addDescription">
    <div class="form-group">
        <label class="control-label col-sm-3">Select Place</label>
        <div class="col-sm-9">
            <select name="place" class="form-control" id="place">
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
            <input type="file"class="form-control"name="upload_image" id="upload_image">
        </div><!--End of col-sm-9-->
    </div><!--End of form-group-->
    <div class="form-group">
        <label class="control-label col-sm-3">Actual price</label>
        <div class="col-sm-9">
            <input type="text"class="form-control"name="actual_price" id="actual_price">
        </div><!--End of col-sm-9-->
    </div><!--End of form-group-->
    <div class="form-group">
        <label class="control-label col-sm-3">Discount</label>
        <div class="col-sm-9">
            <input type="text"class="form-control"name="discount" id="discount">
        </div><!--End of col-sm-9-->
    </div><!--End of form-group-->
    <div class="form-group">
        <label class="control-label col-sm-3">Description</label>
        <div class="col-sm-9">
            <textarea class="form-control" name="description" id="description">

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
            <input type="text" class="form-control" placeholder="enter full name" name="name" id="name">
        </div><!--End of col-sm-9-->
    </div><!--End of form-group-->
    <div class="form-group">
        <label class="control-label col-sm-3">Email of the tour Guide</label>
        <div class="col-sm-9">
            <input type="email" class="form-control" placeholder="enter email" name="email" id="email">
        </div><!--End of col-sm-9-->
    </div><!--End of form-group-->
    <div class="form-group">
        <label class="control-label col-sm-3">Tour Guide phone Number</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" placeholder="enter phone number" name="phone" id="phone">
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
            <input type="submit"name="submitdescription" value="Submit" class="btn btn-success"/>
        </div><!--End of col-sm-9-->
    </div><!--End of form-group-->
</form>
<?php echo $success; ?>