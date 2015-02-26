function fail(position) {
    	var parisLatlng = new google.maps.LatLng(48.8550, 2.3525);
    	var mapOptions = {
       		center: parisLatlng,
       		zoom: 12
    	};
      var map = new google.maps.Map(document.getElementById('zone_map'), mapOptions);
		  var markers = [];
		  var tab_stat = [];
      $(document).ready(function() {
       		$.getJSON("http://parisdata.opendatasoft.com/api/records/1.0/download?dataset=liste_des_sites_des_hotspots_paris_wifi&format=json").done( function(data)
         	{
            	for (var x = 0; x < data.length; x++)
        			{
          				(function(x) {
        	     			var infowindow = new google.maps.InfoWindow({
                        	content: data[x].fields.adresse_complete
                		});
		                var geopoint = new google.maps.LatLng(data[x].fields.geo_coordinates[0], data[x].fields.geo_coordinates[1]);
        		        markers.push(new google.maps.Marker({
                        position: geopoint, 
                        map: map,
                        title: data[x].fields.nom_site
                    }));
        		        google.maps.event.addListener(markers[x], 'click', function() {
        				  	    var parisLatlng = new google.maps.LatLng(markers[x]['position']['k'], markers[x]['position']['D']);
                        var mapOptions = {
                            center: parisLatlng,
                            zoom: 12
                        };
        				        var map = new google.maps.Map(document.getElementById('zone_map'), mapOptions);
            				    var marker2 = new google.maps.Marker({
                            position: parisLatlng,
            				  	    map: map,
            				  	    title: data[x].fields.nom_site
            				    });
                        $("#infos").empty();               
                        $p = document.createElement("p");
                        $p1 = document.createElement("p");
                        var node = data[x]['fields']['nom_site'];
                        var node1 = data[x]['fields']['adresse_complete'];
                        $p.appendChild(document.createTextNode(node));
                        $p1.appendChild(document.createTextNode(node1));
                        $("#infos").append($p);
                        $("#infos").append($p1);
        				    });
                  })(x)
       			  }
       		});
      });
  $("#zone_map").show();
}