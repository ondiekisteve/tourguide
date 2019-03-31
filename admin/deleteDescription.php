<?php
$success="";
if(isset($_GET['descriptionId']))
{
    $descriptionId=$_GET['descriptionId'];
    $description="DELETE FROM place_description WHERE id='$descriptionId'";
    if(mysqli_query($connect,$description))
    {
        echo "Place Description Successfully deleted";
    }
    else{
        echo "Error occured in deleting";
    }
}
?>