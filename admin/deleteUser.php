<?php
$success="";
if(isset($_GET['userDeleteId']))
{
    $userDeleteId=$_GET['userDeleteId'];
    $deleteUser="DELETE FROM members WHERE id='$userDeleteId'";
    if(mysqli_query($connect,$deleteUser))
    {
        echo "Content Successfully deleted";
    }
    else{
        alert("Error occured in deleting");
    }
}
?>