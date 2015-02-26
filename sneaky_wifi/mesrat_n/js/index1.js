function main ()
{
  $.when (
    $.getScript("../js/success.js"),
    $.getScript("../js/fail.js"),
    $.Deferred(function(deferred){
      $(deferred.resolve);
    })
  ).done(function(){
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(success, fail);
      } else {
        error('Geo Location is not supported');
      } 
  });
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