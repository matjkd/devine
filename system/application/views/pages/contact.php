<?php foreach($content as $row):?>

<h1><?=$row['title'];?></h1>
<?php endforeach; ?>

<div style="float:left; width:200px; padding-right:10px;">
Our offices are located on the eighth floor, 777 Brickell Avenue; at the corner of 8th Street and Brickell Avenue.
<p>777 Brickell Avenue&nbsp;<br />Suite 850&nbsp;<br />Miami, Florida 33131&nbsp;<br /><br />P 305.374.8200&nbsp;<br />F 305.374.8208&nbsp;<br /></p>
<?php $this->load->view('/popups/contact')?>
</div>



<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">

      function initialize() {
        var mapDiv = document.getElementById('map-canvas');
        var latLng = new google.maps.LatLng(25.766349,-80.19011);
        var map = new google.maps.Map(mapDiv, {
          center: latLng,
          zoom: 15,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        });
      
        var image = 'http://code.google.com/apis/maps/documentation/javascript/examples/images/beachflag.png';
        var myLatLng = new google.maps.LatLng(25.766349,-80.19011);
        var beachMarker = new google.maps.Marker({
          position: latLng,
          map: map,

        });
      }


      google.maps.event.addDomListener(window, 'load', initialize);
    </script>

 <div id="map-canvas" style="float:left; width: 425px; height: 360px"></div>