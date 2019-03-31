<?php
$success="";
if(isset($_POST['projectDescription']))
{
    $heading=$_POST['heading'];
    $content=$_POST['content'];
    $image=$_FILES['uploadded-file']['name'];
    $tmp_image=$_FILES['uploadded-file']['tmp_name'];
    $insert="INSERT INTO projectDescription(heading,content,image)VALUES ('$heading','$content','$image')";

    if(mysqli_query($connect,$insert))
    {
        move_uploaded_file($tmp_image,"../img/$image");
        echo "Inserted";
    }
    else{
        echo 'error occured';
    }
}
?>
<form method="post"action="index.php?addProjectDescription"class="form-horizontal" style="border: 1px solid lightgrey;padding: 10px;" enctype="multipart/form-data">
    <div class="form-group">
        <label class="control-label col-sm-3">Image</label>
        <div class="col-sm-9">
            <input type="file"class="form-control"name="uploadded-file">
        </div><!--End of col-sm-9-->
    </div><!--End of form-group-->
    <div class="form-group">
        <label class="control-label col-sm-3">Heading</label>
        <div class="col-sm-9">
            <input type="text"class="form-control"name="heading">
        </div><!--End of col-sm-9-->
    </div><!--End of form-group-->
    <div class="form-group">
        <label class="control-label col-sm-3">Content</label>
        <div class="col-sm-9">
            <textarea rows="5" class="form-control" name="content">

            </textarea>
        </div><!--End of col-sm-9-->
    </div><!--End of form-group-->
    <div class="form-group">
        <label class="control-label col-sm-3"></label>
        <div class="col-sm-9">
            <input type="submit"name="projectDescription" value="Publish" class="btn btn-success"/>
        </div><!--End of col-sm-9-->
    </div><!--End of form-group-->
</form>