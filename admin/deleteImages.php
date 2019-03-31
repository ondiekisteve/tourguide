<?php
$success="";
if(isset($_GET['deleteImageId']))
{
    $deleteImageId=$_GET['deleteImageId'];
    $deleteImage="DELETE FROM images WHERE id='$deleteImageId'";
    if(mysqli_query($connect,$deleteImage))
    {
        echo "Image Successfully deleted";
    }
    else{
        alert("Error occured in deleting");
    }
}
?>