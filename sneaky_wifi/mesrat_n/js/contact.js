setTimeout(function(){var parisLatlng = new google.maps.LatLng(48.813244, 2.393041);
        var mapOptions = {
                center: parisLatlng,
                zoom: 16
        };
    var map = new google.maps.Map(document.getElementById('map'), mapOptions);
    $('#map').show();}, 300);

var button = document.getElementByClass('btn btn-action');