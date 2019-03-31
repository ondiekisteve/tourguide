<?php
if(isset($_GET['deletePlaceId']))
{
    $deletePlaceId=($_GET['deletePlaceId']);
    $deletePlace="DELETE FROM markers WHERE id='$deletePlaceId'";
    if(mysqli_query($connect,$deletePlace))
    {
        echo "<script>
             alert('Place Successfully deleted');

              </script>";
    }
    else{
        echo "<script>alert('Oops! Error occured in deleting please try again')</script>";
    }
}
?>