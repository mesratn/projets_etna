$('#submit').click(function(){
	if (!isNaN($('#arrondissement').val()) && $('#arrondissement').val() < 22 && $('#arrondissement').val() > 0)
		{
            $("#tab").empty();
            $("#show_list").empty();
			$('err').remove();
			if ($('select').val() == "carte")
				show_map();
			else
				show_liste();
		}
	else
	{
        $("#show_list").empty();
		$("#tab").empty();
		$('err').remove();
		$('article').append('<err> Veuillez entrer un nombre entre 1 et 20</err>');
	}
});

function show_liste()
{
	$('#show_list').append('<a href="#" class="list-group-item active" ID="machin"><h3 class="list-group-item-heading" id = "list_arr"></h3></a>');
	$('#list_arr').text('Arrondissement : ' + $('#arrondissement').val());
	var num_arr = $('#arrondissement').val();
	if (num_arr.length == 1)
		num_arr = '0' + num_arr;
    $(document).ready(function() {
        $.getJSON("http://parisdata.opendatasoft.com/api/records/1.0/download?dataset=liste_des_sites_des_hotspots_paris_wifi&format=json").done( function(data)
            {
            	console.log(data[0]);
                var markers = [];
     			var tab_arr = [];
     			for(var x = 0; x < data.length; x++)
     				if (num_arr == data[x].fields.arrondissement)
     					tab_arr.push(data[x]);
     				data = tab_arr;
     			for(var y = 0; y < data.length; y++)
     			{
     				console.log(data[y].fields.adresse_complete);
     				$('#show_list').append('<div href="#" class="list-group-item"><h4 class="list-group-item-heading"></h4><p class="list-group-item-text"></p></div>');
     				$('h4:last', '#show_list').text('Adresse complete : ' + data[y].fields.adresse_complete);
     				$('p:last', '#show_list').text('Nom du site : ' + data[y].fields.nom_site);
     			}
     		});
    });
}
function show_map()
{
	var num_arr = $('#arrondissement').val();
	if (num_arr.length == 1)
		num_arr = '0' + num_arr;
    $(document).ready(function() {
        $.getJSON("http://parisdata.opendatasoft.com/api/records/1.0/download?dataset=liste_des_sites_des_hotspots_paris_wifi&format=json").done( function(data)
            {
                var markers = [];
     			var tab_arr = [];
     			for(var x = 0; x < data.length; x++)
     				if (num_arr == data[x].fields.arrondissement)
     					tab_arr.push(data[x]);
     				data = tab_arr;
			        	console.log(1);
     		    for (var x = 0; x < data.length; x++)
			        {
			                (function(x){
   			                	$('#tab').append('<div class="col-lg-3 col-sm-4 col-xs-6"><div class="thumbnail img-responsive" id = ' + x + ' style = "height: 200px"></div></div>');
		                	    var parisLatlng = new google.maps.LatLng(data[x].fields.geo_coordinates[0], data[x].fields.geo_coordinates[1]);
			              	    var myOptions = {
				                      zoom: 15,
				                      center: parisLatlng,
				                      mapTypeId: google.maps.MapTypeId.ROADMAP
				                    }
				                var carte = new google.maps.Map(document.getElementById(x), myOptions);   
				                var geopoint = new google.maps.LatLng(data[x].fields.geo_coordinates[0], data[x].fields.geo_coordinates[1]);
				                markers.push(new google.maps.Marker({
				                                position: geopoint, 
				                                map: carte,
			    	                            title: data[x].fields.adresse_complete
			        	                       }));
				              	
			            	    $('#' + x).show(); 
			               	})(x)
			    	}
			}); 
        });

}