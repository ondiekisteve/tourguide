<?php
$success="";
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $address=$_POST['address'];
    $latitude=$_POST['latitude'];
    $longtude=$_POST['longtude'];
    $type=$_POST['type'];
    $insert="INSERT INTO markers(name,address,latitude,longtude,type) VALUES('$name','$address','$latitude','$longtude','$type')";
    if(mysqli_query($connect,$insert))
    {
        $success="<span class='form-helper btn btn-success'>Place Successfully Added</span>";
    }
}
?>
<h3 class="well" style="text-align: center;font-family: 'Lucida Bright';">Add Place</h3>
<form method="post"action="index.php?addplace"class="form-horizontal" style="border: 1px solid lightgrey;padding: 10px;" id="placeForm">
    <div class="form-group">
        <label class="control-label col-sm-3">Place Name</label>
        <div class="col-sm-9">
            <input type="text"name="name" class="form-control"placeholder="Name of the place" id="name"/>
        </div><!--End of col-sm-9-->
    </div><!--End of form-group-->
    <div class="form-group">
        <label class="control-label col-sm-3">Address</label>
        <div class="col-sm-9">
            <input type="text"name="address" class="form-control" placeholder="address of the place" id="address"/>
        </div><!--End of col-sm-9-->
    </div><!--End of form-group-->
    <div class="form-group">
        <label class="control-label col-sm-3">Latitude</label>
        <div class="col-sm-9">
            <input type="text"name="latitude" class="form-control" placeholder="latitude of the place" id="latitude"/>
        </div><!--End of col-sm-9-->
    </div><!--End of form-group-->
    <div class="form-group">
        <label class="control-label col-sm-3">Longtude</label>
        <div class="col-sm-9">
            <input type="text"name="longtude" class="form-control" placeholder="longtude of the place"id="longtude"/>
        </div><!--End of col-sm-9-->
    </div><!--End of form-group-->
    <div class="form-group">
        <label class="control-label col-sm-3">Type</label>
        <div class="col-sm-9">
            <select name="type" class="form-control" id="type">
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
            <input type="submit"name="submit" value="Add" class="btn btn-success" id="addplace"/>
            <span id="message"></span>
        </div><!--End of col-sm-9-->
    </div><!--End of form-group-->
</form>