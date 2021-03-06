<style>
    /* Set the size of the div element that contains the map */
    #map {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
    }
</style>

<div class="container">
    <br>
    <!-- Call to Action Well -->
    <div class="row">
        <form action="<?php echo site_url() ?>/maps" method="post">
            <div id="form" class="row">
                <div class="col-md-6 mb-6">
                    <div class="form-group">
                        <label for="sel1"><b>Engine list:</b></label>
                        <select style="width: 120px; margin-right: 20px" required name="engine" class="form-control" id="engine">
                            <?php foreach ($engs_->result() as $value) { ?>
                                <option value="<?php echo $value->EngineID ?>"><?php echo ucfirst($value->Name) ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 mb-6">
                    <div class="form-group">
                        <input style="margin-top: 32px" class="form-control btn-success" id="postBtn" type="submit" value="Go!">

                    </div>
                </div>
            </div>
        </form>
        <div id="map"></div>
        <script>
    // Initialize and add the map
            function initMap() {
                // The location of Uluru
    //  var uluru = {lat: -34.0010, lng: 25.6715};
<?php if ($get_maps->result() != null): ?>
    <?php foreach ($get_maps->result() as $value) { ?>
                        var uluru = {lat: <?php echo $value->latitude ?>, lng:<?php echo $value->longitude ?>};
            //  var uluru = {lat: -34.0010, lng: 25.6715};
    <?php } ?>
<?php else: ?>
    <?php foreach ($get_maps_default->result() as $value) { ?>
                        var uluru = {lat: <?php echo $value->latitude ?>, lng:<?php echo $value->longitude ?>};
            //  var uluru = {lat: -34.0010, lng: 25.6715};
    <?php } ?>
<?php endif ?>
                // The map, centered at Uluru
                var map = new google.maps.Map(
                        document.getElementById('map'), {zoom: 17, center: uluru});
                // The marker, positioned at Uluru
                var marker = new google.maps.Marker({position: uluru, map: map});
                marker.addListener('mouseover', () => infoWindow.open(map, marker));
                marker.addListener('mouseout', () => infoWindow.close());
            }
        </script>
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqIdApN3VaLrSPmN3zNw6EcrZw0-KA4kk &callback=initMap">
        </script>
    </div>

</div> 
<br><br><br>
<!-- Page Content -->





























































































































































































































































































































































































































































































































































































































































