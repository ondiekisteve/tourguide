<?php
$success="";
if(isset($_POST['submit']))
{
    $editPlaceId=$_GET['editPlaceId'];
    $name=$_POST['name'];
    $address=$_POST['address'];
    $latitude=$_POST['latitude'];
    $longtude=$_POST['longtude'];
    $type=$_POST['type'];
    $update="UPDATE  markers SET name='$name',address='$address',latitude='$latitude',longtude='$longtude',type='$type' WHERE id='$editPlaceId'";
    if(mysqli_query($connect,$update))
    {
        $success="<span class='form-helper btn btn-success'>Place Updated Successfully</span>";
    }
    else{
        $success="<span class='form-helper btn btn-danger'>Oops! we are sory an error accured try again</span>";
    }
}
?>
<h3 class="well" style="text-align: center;font-family: 'Lucida Bright';">Edit Place</h3>
<?php
if(isset($_GET['editPlaceId'])){
    $editPlaceId=$_GET['editPlaceId'];
    $getPlace="SELECT * FROM markers WHERE id='$editPlaceId'";
    $result=mysqli_query($connect,$getPlace);
    while ($row=mysqli_fetch_array($result))
    {
        $id=$row['id'];
        $name=$row['name'];
        $address=$row['address'];
        $latitude=$row['latitude'];
        $longtude=$row['longtude'];
        $type=$row['type'];
?>
<form method="post"action="index.php?editPlaceId=<?php echo $id;?>"class="form-horizontal" style="border: 1px solid lightgrey;padding: 10px;" id="property">
    <div class="form-group">
        <label class="control-label col-sm-3">Place Name</label>
        <div class="col-sm-9">
            <input type="text"name="name" class="form-control"value="<?php echo $name; ?>"/>
        </div><!--End of col-sm-9-->
    </div><!--End of form-group-->
    <div class="form-group">
        <label class="control-label col-sm-3">Address</label>
        <div class="col-sm-9">
            <input type="text"name="address" class="form-control" value="<?php echo $address; ?>" id="address"/>
        </div><!--End of col-sm-9-->
    </div><!--End of form-group-->
    <div class="form-group">
        <label class="control-label col-sm-3">Latitude</label>
        <div class="col-sm-9">
            <input type="text"name="latitude" class="form-control" value="<?php echo $latitude; ?>"/>
        </div><!--End of col-sm-9-->
    </div><!--End of form-group-->
    <div class="form-group">
        <label class="control-label col-sm-3">Longtude</label>
        <div class="col-sm-9">
            <input type="text"name="longtude" class="form-control" value="<?php echo $longtude; ?>"/>
        </div><!--End of col-sm-9-->
    </div><!--End of form-group-->
    <div class="form-group">
        <label class="control-label col-sm-3">Type</label>
        <div class="col-sm-9">
            <select name="type" class="form-control">
                <option value="Bar">Bar</option>
                <option value="Restraunt">Restraunt</option>
                <option value="Game Reserve">Game Reserve</option>
                <option value="Sports Club">Sports Club</option>
                <option value="National Park">National Park</option>
                <option value="Water Fall">Water Fall</option>
                <option value="Mountain">Mountain</option>
                <option value="River">River</option>
                <option value="Forest">forest</option>
                <option value="Other">Other</option>
            </select>
        </div><!--End of col-sm-9-->
    </div><!--End of form-group-->
    <div class="form-group">
        <label class="control-label col-sm-3"></label>
        <div class="col-sm-9">
            <?php
            echo $success;
            ?>
        </div><!--End of col-sm-9-->
    </div><!--End of form-group-->
    <div class="form-group">
        <label class="control-label col-sm-3"></label>
        <div class="col-sm-9">
            <input type="submit"name="submit" value="Edit" class="btn btn-success"/>
        </div><!--End of col-sm-9-->
    </div><!--End of form-group-->
</form>

<?php }} ?>