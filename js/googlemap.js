var map;
var geocoder;

function loadMap() {
	var mumbai = {lat:19.1364, lng:72.8296};
    map = new google.maps.Map(document.getElementById('map'), {
      zoom: 12,
      center: mumbai
    });

    var marker = new google.maps.Marker({
      position: mumbai,
      map: map
    });

    var cdata = JSON.parse(document.getElementById('data').innerHTML);
    geocoder = new google.maps.Geocoder();  
    codeAddress(cdata);

    var allData = JSON.parse(document.getElementById('allData').innerHTML);
    showAllregister_garage(allData)
}

function showAllregister_garage(allData) {
	var infoWind = new google.maps.InfoWindow;
	Array.prototype.forEach.call(allData, function(data){
		var content = document.createElement('div');
		var strong = document.createElement('strong');
		var strong1 = document.createElement('strong1');

		strong.textContent = data.gname;
		content.appendChild(strong);

		strong1.textContent = data.address;
		content.appendChild(strong1);

		var marker = new google.maps.Marker({
	      position: new google.maps.LatLng(data.lat, data.lng),
	      map: map
	    });

	    marker.addListener('mouseover', function(){
	    	infoWind.setContent(content);
	    	infoWind.open(map, marker);
	    })
	})
}

function codeAddress(cdata) {
   Array.prototype.forEach.call(cdata, function(data){
    	var address = data.gname + ' ' + data.address;
	    geocoder.geocode( { 'address': address}, function(results, status) {
	      if (status == 'OK') {
	        map.setCenter(results[0].geometry.location);
	        var points = {};
	        points.id = data.id;
	        points.lat = map.getCenter().lat();
	        points.lng = map.getCenter().lng();
	        updateregister_garageWithLatLngWithLatLng(points);
	      } else {
	        alert('Geocode was not successful for the following reason: ' + status);
	      }
	    });
	});
}

function updateregister_garageWithLatLng(points) {
	$.ajax({
		url:"action.php",
		method:"post",
		data: points,
		success: function(res) {
			console.log(res)
		}
	})
	
}