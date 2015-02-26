function main ()
{
    $.get("http://ipinfo.io", function(response) {
    	var parisLatlng = new google.maps.LatLng(48.8550, 2.3525);
    	var mapOptions = {
       		center: parisLatlng,
       		zoom: 12
    	};
       	var map = new google.maps.Map(document.getElementById('zone_map'), mapOptions);
    	var pinColor = "2EEEA3";
    	var pinImage = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|" + pinColor,
       		new google.maps.Size(21, 34),
       		new google.maps.Point(0,0),
       		new google.maps.Point(10, 34));
    	var points = response.loc;
    	var regex = /(\d+.\d+),(\d+.\d+)/;
    	var match = regex.exec(points);
    	var geopoint = new google.maps.LatLng(match[1], match[2]);
    	var marker = new google.maps.Marker({
       	   	position: geopoint, 
           	map: map,
           	icon: pinImage
       	});
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
        						zoom: 17
       						};
        					var map = new google.maps.Map(document.getElementById('zone_map'), mapOptions);
        		      		var pinColor = "2EEEA3";
    						var pinImage = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|" + pinColor,
        						new google.maps.Size(21, 34),
        						new google.maps.Point(0,0),
        						new google.maps.Point(10, 34));
    						var points = response.loc;
    						var regex = /(\d+.\d+),(\d+.\d+)/;
    						var match = regex.exec(points);
    						var geopoint = new google.maps.LatLng(match[1], match[2]);
    						var marker = new google.maps.Marker({
            	   				position: geopoint, 
                				map: map,
                				icon: pinImage
            				});
            				var marker2 = new google.maps.Marker({
            					position: parisLatlng,
            					map: map,
            					title: data[x].fields.nom_site
            				});
            				$("#infos").empty();
            				$p = document.createElement("p");
            				var node = data[x]['fields']['adresse_complete'];
            				var test = "test";
            				$p.appendChild(document.createTextNode(node));
            				$("#infos").append($p);
        				});
       				})(x)
       			}
       		});
       	});
	}, "jsonp");
    $("#zone_map").show(); 
}

main();

var bouton = document.getElementsByClassName('fa fa-smile-o fa-5');
$(bouton).click(function(){
    $("#infos").empty();
    $("#infos").empty();
    $p = document.createElement("p");
    $p.appendChild(document.createTextNode("Ici il y aura les informations sur le hotspot Wifi selectionné"));
    $("#infos").append($p);
    main();
})
