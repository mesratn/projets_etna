 google.load("visualization", "1.1", {packages:["bar"]});
      var tab = new Array();

  $(document).ready(function() {
        $.getJSON("http://parisdata.opendatasoft.com/api/records/1.0/download?dataset=liste_des_sites_des_hotspots_paris_wifi&format=json").done( function(data)
            {
              for (var x = 0; x < data.length; x++)
                tab.push(data[x]['fields']['arrondissement']);
             tab.sort();
             var  count = {}; 
            tab.forEach(function(i) {
                  count[i] = (count[i]||0)+1;
              });
            drawStuff(count)
 });       
      });
      function drawStuff(count) {
        var tab = [];
        $.each(count, function(key, value){
          tab.push([key, value])
        })
        tab.sort();
        tab.unshift(["arrondissement", "nombre"]);
        var data = new google.visualization.arrayToDataTable(tab);
            var options = {
          title: 'Hotspot dans Paris',
          colors: ['red'],
          width: 900,
          legend: { position: 'none'},
          colors : ['#da3f3f'],
          chart: { subtitle: 'Nombre de HotSpot dans chaque arrondissement' },
          axes: {
            x: {
              0: { side: 'bottom', label: 'Arrondissements'} // Top x-axis.
            },
            y: {
              0: { side: 'left', label: 'Nombre de Hotspot'}
            }
          },
          bar: { groupWidth: "90%" }
        }
      google.load("visualization", "1.1", {packages:["bar"]});
      var chart = new google.charts.Bar(document.getElementById('diag'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };