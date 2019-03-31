<!DOCTYPE html>
<html>
<head>
    <style>
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyDSeFidOtrSDpEs_CkJ3kkrMb3FzG94W-E&sensor=false" type="text/javascript"></script>
</head>
<body onload="initMap()">
<div id="map"></div>
<div id="content">yes we can do</div>
<?php
include 'includes/db-connection.php';
$latitude = 0;
$longtude = 0;
               $id = $_GET['markerId'];
               $query ="SELECT * FROM markers where id='$id'";
               $result=mysqli_query($connect,$query);

while ($row = mysqli_fetch_array($result)) {
                   $name = $row['name'];
                   $address = $row['address'];
                   $latitude = $row['latitude'];
                   $longtude = $row['longtude'];
                   $type = $row['type'];
                echo("addMarker($latitude, $longtude, '<b>$name</b><br />$type');\n");
               }
?>
?>
<script type="text/javascript">
    function initMap() {
        var options={
            zoom:8,
            center:{lat:<?php echo $latitude; ?>,lng:<?php echo $longtude; ?>}

        }
        var map=new google.maps.Map(document.getElementById('map'),options);
        var marker=new google.maps.Marker({
            position:{lat:<?php echo $latitude; ?>,lng:<?php echo $longtude; ?>},
            map:map
        });
        var contentString='<?php echo "<b>$name</b><br/>".$type; ?>';

        var infowindow = new google.maps.InfoWindow({
            content:contentString
        });
        marker.addListener('click', function() {
            infowindow.open(map, marker);
        });



    }
</script>
</body>
</html>