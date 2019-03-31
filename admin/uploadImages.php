<?php
if(isset($_POST['uploadImage']))
{
    $caption=$_POST['caption'];
    $place=$_POST['place'];
    $image=$_FILES['image']['name'];
    $tmp_image=$_FILES['image']['tmp_name'];
    $uploadImage="INSERT INTO images(place_id,image,caption)VALUES ('$place','$image','$caption')";
    if(mysqli_query($connect,$uploadImage))
    {
        move_uploaded_file($tmp_image,"../img/$image");
        echo "Image uploaded successfully";
    }
    else
    {
        echo "OOps! Error occured in uploading Image please try agian";
    }
}
?>
<h3 class="well" style="text-align: center;font-family: 'Lucida Bright';">Upload Images of a Place</h3>

<form method="post"action="index.php?uploadImages"class="form-horizontal" style="border: 1px solid lightgrey;padding: 10px;" enctype="multipart/form-data">

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
        <label class="control-label col-sm-3">Caption</label>
        <div class="col-sm-9">
            <input type="text"name="caption" class="form-control"/>
        </div><!--End of col-sm-9-->
    </div><!--End of form-group-->
    <div class="form-group">
        <label class="control-label col-sm-3">Upload Image</label>
        <div class="col-sm-9">
            <input type="file"name="image" class="form-control"/>
        </div><!--End of col-sm-9-->
    </div><!--End of form-group-->
    <div class="form-group">
        <label class="control-label col-sm-3"></label>
        <div class="col-sm-9">
            <input type="submit"name="uploadImage" value="Upload" class="btn btn-success"/>
        </div><!--End of col-sm-9-->
    </div><!--End of form-group-->
</form>
