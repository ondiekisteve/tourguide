<?php
session_start();
if(!isset($_SESSION['admin']))
{
    header("Location:admin_login.php");
}
include "admin-header.php";
include '../includes/db-connection.php';
?>

<div class="row">
    <div class="col-sm-3">
        <h3 class="well well-sm">Admin Operations</h3>
        <div style="background-color: teal;color: white;" id="admin-sidebar-links">
            <?php include "admin-sidebar.php" ?>
        </div>
    </div><!--End of col-sm-4-->
    <div class="col-sm-9 content">
        <?php
        if(isset($_GET['addplace']))
        {
            include 'addplace.php';
        }
        if(isset($_GET['viewplaces']))
        {
            include 'viewplaces.php';
        }
        if(isset($_GET['addplacedescription']))
        {
            include 'addplacedescription.php';
        }
        if(isset($_GET['viewplacedescriptions']))
        {
            include 'viewplacedescriptions.php';
        }
        if(isset($_GET['uploadImages']))
        {
            include 'uploadImages.php';
        }
        if(isset($_GET['deletePlaceId']))
        {
            include 'deleteplace.php';
        }
        if(isset($_GET['editPlaceId']))
        {
            include 'editPlace.php';
        }
        if(isset($_GET['descriptionId']))
        {
            include 'deleteDescription.php';
        }
        if(isset($_GET['viewServices']))
        {
            include 'viewUsers.php';
        }
        if(isset($_GET['editServiceId']))
        {
            include 'editPlace.php';
        }
        if(isset($_GET['bookingId']))
        {
            include 'deleteBooking.php';
        }
        if(isset($_GET['editdescriptionId']))
        {
            include 'editDescription.php';
        }
        if(isset($_GET['deleteDownloadId']))
        {
            include 'editDescription.php';
        }
        if(isset($_GET['viewBookings']))
        {
            include 'viewBookings.php';
        }
        if(isset($_GET['viewImages']))
        {
            include 'viewImages.php';
        }
        if(isset($_GET['deleteImageId']))
        {
            include 'deleteImages.php';
        }
        if(isset($_GET['viewUsers']))
        {
            include 'viewUsers.php';
        }
        if(isset($_GET['editImageId']))
        {
            include 'editImages.php';
        }
        if(isset($_GET['viewnavbar']))
        {
            include 'viewplaces.php';
        }
        



        ?>
    </div><!--End of col-sm-4-->
</div><!--End of row-->

<?php include "admin-footer.php";    ?>
