
<?php
if(isset($_GET['editImageId']))
{

$editImageId=$_GET['editImageId'];
$getImages="SELECT * FROM images WHERE id='$editImageId'";
$result=mysqli_query($connect,$getImages);
while ($row=mysqli_fetch_array($result))
{
$caption=$row['caption'];
$image=$row['image'];
?>

<form method="post"action="index.php?editImageId=<?php echo $editImageId ?>"class="form-horizontal" style="border: 1px solid lightgrey;padding: 10px;" enctype="multipart/form-data">
    <div class="form-group">
        <label class="control-label col-sm-3">Caption</label>
        <div class="col-sm-9">
            <input type="text"name="caption" class="form-control" value="<?php echo $caption?>"/>
        </div><!--End of col-sm-9-->
    </div><!--End of form-group-->
    <div class="form-group">
        <label class="control-label col-sm-3">Upload Image</label>
        <div class="col-sm-9">
            <span class="form-helper"><img src="../img/<?php echo $image ?>" width="60px" height="60px"></span>
            <input type="file"name="image" class="form-control"/>
        </div><!--End of col-sm-9-->
    </div><!--End of form-group-->
    <div class="form-group">
        <label class="control-label col-sm-3"></label>
        <div class="col-sm-9">
            <input type="submit"name="updateImage" value="Upload" class="btn btn-success"/>
        </div><!--End of col-sm-9-->
    </div><!--End of form-group-->
</form>
<?php }} ?>
<?php
if(isset($_POST['updateImage']) && isset($_GET['editImageId']))
{
    $editImageId=$_GET['editImageId'];
    $caption=$_POST['caption'];
    $image=$_FILES['image']['name'];
    $tmp_image=$_FILES['image']['tmp_name'];
    $uploadImage="UPDATE  images SET caption='$caption',image='$image' WHERE id='$editImageId'";
    if(mysqli_query($connect,$uploadImage))
    {
        move_uploaded_file($tmp_image,"../img/$image");
        echo "Image updated successfully";
    }
    else
    {
        echo "Error occured in updating image";
    }
}
?>
