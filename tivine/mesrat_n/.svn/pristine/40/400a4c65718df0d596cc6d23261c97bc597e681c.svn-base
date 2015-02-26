function cleanArray(array) {
  var i, j, len = array.length, out = [], obj = {};
  for (i = 0; i < len; i++) {
    obj[array[i]] = 0;
  }
  for (j in obj) {
    out.push(j);
  }
  return out;
}
function date_mnt () {
  now = new Date();
  year = "" + now.getFullYear();
  month = "" + (now.getMonth() + 1); if (month.length == 1) { month = "0" + month; }
  day = "" + now.getDate(); if (day.length == 1) { day = "0" + day; }
  date = year + month + day;
  return date;
}

function encode(url)
{
	var shaObj = new jsSHA(url, "TEXT");
	var hmac = shaObj.getHMAC("cc9f2f4aef76054fd252ee0bb326de8c", "TEXT", "SHA-512", "HEX");
	return (hmac);
}

function star(cast)
{
	if (cast != null)
	for (var x = 0; x < cast.length; x++)
	{
		cast[x] = cast[x].substr(1, cast[x].length - 1).substr(0, cast[x].length - 2);
		var url = 'http://94.23.253.36:8080/TiVineWS_V1.0/SearchStamp' + cast[x] + '10989834';
		var code = encode(url);
		$.ajax({
				url: 'http://94.23.253.36:8080/TiVineWS_V1.0/SearchStamp',
				type: "POST",
				data: {'query': cast[x], 'clientId' : '10989834', 'encodedKey': code},
				success:function(data){success_stars(data);},
				error:function(){console.log(2);}
			})
	}
}

function success_stars(data)
{
	if (data['stamps'][0] != undefined)
	{
		var section = document.getElementById('stars');
		var div = document.createElement("div");
		div.id = data['stamps'][0]['name'];
		section.appendChild(div);
		var img = document.createElement("img");
		if (data['stamps'][0]['image'] == "")
			var image = "ressources/stamp_people.png";
		else
			var image = data['stamps'][0]['image'];
		for (var x = 0; image[x] != '%' && x < image.length; x++);
		if(x != image.length)
			image = image.substr(0, x);
		$(img).error(function() {
 		 $(this).attr('src', 'ressources/stamp_people.png') 
		});
		$(img).attr({'alt' : '', 'src' : image, 'style' : "height:120px; margin:10px; display:inline-block; float:left"});
		$(div).append(img);
		var stampId = data['stamps'][0]['stampId'];
		var casting = new Object();
		var test = [image];
		casting[data['stamps'][0]['name']] = test;
		var url = 'http://94.23.253.36:8080/TiVineWS_V1.0/GetStampContent' + stampId + '10989834';
		var code = encode(url);
		$.ajax({
				url: 'http://94.23.253.36:8080/TiVineWS_V1.0/GetStampContent',
				type: "POST",
				data: {'stampId': stampId, 'clientId' : '10989834', 'encodedKey': code},
				success:function(data){success_stars_desc(data);},
				error:function(){console.log(2);}
			})
	}
}

function success_stars_desc(data)
{
	var br = document.createElement("br");
	var nom = data['stampData']['title'];
	var desc = data['stampData']['desc'];
	var div = document.getElementById(nom);
	$(div).append(br);
	var p = document.createElement("p");
	p.appendChild(document.createTextNode(desc));
//	console.log(p);
	div.appendChild(p);
	$(div).attr({'style' : 'float : left; border : 2px solid white; width : 99%;'});
}
function time_left(fin)
{
	var time_fin_hours = fin[0] + fin[1];
	time_fin_hours = time_fin_hours * 60;
	var time_fin_min = fin[3] + fin[4];
	time_fin_min = time_fin_min * 1;
	var time_fin = time_fin_hours + time_fin_min;
	var d = new Date();
	var time_hours = d.getHours() * 60;
	var time_min = d.getMinutes();
	var time = time_hours + time_min;
	return (time_fin - time);
}

function time_total(debut,fin)
{
	var time_fin_hours = fin[0] + fin[1];
	time_fin_hours = time_fin_hours * 60;
	var time_fin_min = fin[3] + fin[4];
	time_fin_min = time_fin_min * 1;
	var time_fin = time_fin_hours + time_fin_min;
	var time_debut_hours = debut[0] + debut[1];
	time_debut_hours = time_debut_hours * 60;
	var time_debut_min = debut[3] + debut[4];
	time_debut_min = time_debut_min * 1;
	var time_debut = time_debut_hours + time_debut_min;
	var time = time_fin - time_debut;
	return (time);
}

function pourcent(temps_total, temps_restant)
{	
	var res = ((temps_total - temps_restant) / temps_total) * 100;
	return(res);
}
function success_emission(data)
{
	var channel = data['programs'][0]['channel'];
	var title = data['programs'][0]['title'];
	if (data['programs'][0]['image'] == "")
		var urlimage = "ressources/stamp_topic.png";
	else
		var urlimage = data['programs'][0]['image'];
	for (var x = 0; urlimage[x] != '%' && x < urlimage.length; x++);
	if(x != urlimage.length)
		urlimage = urlimage.substr(0, x);
	if (data['programs'][0]['desc'] == '')
		var desc = "La description de ce programme n'est pas disponile, nous nous excusons de la gene occasionée. Nous travaillons pour arranger ce problème en ce moment."
	else
		var desc = data['programs'][0]['desc'];
	var categorie = data['programs'][0]['category'];
	var genre = data['programs'][0]['genre'];
	var cast = data['programs'][0]['cast'];
	var test = data['programs'][0]['cast'];
	cast = cast.sansAccent();
	cast = cast.match(/>[\w\s\'\-]+</gi);
	if(cast != null)
	{
		for (var x = 0; x < data['stamps'].length; x++)
		{

			data['stamps'][x]['name'] = ">" + data['stamps'][x]['name'] + "<";
			data['stamps'][x]['name'] = data['stamps'][x]['name'].sansAccent();
			cast.push(data['stamps'][x]['name']);
		}
		for (var test = 0; test < cast.length; test++)
			cast[test] = cast[test].toLowerCase();
		cast = cleanArray(cast);
	}
	star(cast);
	var debut = data['programs'][0]['startTime'].substr(8, 4);
	var fin = data['programs'][0]['endTime'].substr(8, 4);
	var debut = debut[0] + debut[1] + ":" + debut[2] + debut[3];
	var fin = fin[0] + fin[1] + ":" + fin[2] + fin[3];
	var horaire = debut + " - " + fin;
	var temps_total = time_total(debut, fin);
	var temps_restant = time_left(fin);
	var p = document.createElement('p');
	var ptext = document.createElement('p');
	var pourcentage = Math.floor(pourcent(temps_total, temps_restant)); 
	$(p).attr('style' , 'height : 3px; width : ' + pourcentage + "%; background-color : green; float: left; display:block");
	var emission = document.getElementById('emission');
	$(emission).attr({'style':'display:inline-block; border-bottom: 3px solid #58ACFA; border-right: 3px solid #58ACFA; border-radius: 10px;'});
	var p1 = document.createElement("h4");
	var p2 = document.createElement("p");
	var p3 = document.createElement("p");
	var pchannel = document.createElement('p');
	p1.appendChild(document.createTextNode(title + "\t" + horaire));
	p2.appendChild(document.createTextNode(desc));
	var img = document.createElement("img");
	$(img).error(function() {
 		$(this).attr('src', 'ressources/stamp_topic.png') 
	});
	$(img).attr({'alt' : '','src' : urlimage, 'style' : "float:left; height:120px; margin:10px; display:inline-block;"});
	$(emission).append(img);
	$(emission).append(p1);
	$(emission).append(p2);
	$(ptext).attr('style', 'float:left')
	var div = document.createElement('div');
	$(div).attr('style', 'height : 3px; width : 100%; background-color: grey; float:left;');
	$(ptext).text('Temps restants : ' + temps_restant + " min");
	$(emission).append(div);
	$(emission).append(p).append('<br>').append(ptext);
}
function horaire_e(data, i)
{
	var start = data['programs'][i]['startTime'].substr(8, 4);
	var end = data['programs'][i]['endTime'].substr(8, 4);
	var start1 = start[1] * 1;
	var end1 = end[1] * 1;
	var start = start[0] + (start1 + 1) + ":" + start[2] + start[3];
	if (start1 + 1 == 10 || start1 + 1 == 20)
	{
		if(start1 + 1 == 10 && start[0] == '0')
		{
			start = start.substr(3, 3);
			start = (start1 + 1) + start;
		}
		else
		{
			start = start.substr(3, 3);
			start = '20' + start;
		}
	}
	var end = end[0] + (end1 + 1) + ":" + end[2] + end[3];
	if (end1 + 1 == 10)
	{		
		if (end[0] == '0')
		{
			end = end.substr(3, 3);
			end = (end1 + 1) + 	end;
		}
		else 
		{ 
			end = end.substr(3, 3);
			end = '20' + end;
		}
		}
	if(start[0] + start[1] == "24")
		start = "00:" + start[3] + start[4];
	if(end[0] + end[1] == "24")
		end = "00:" + end[3] + end[4];
	return (start + " - " + end);
}
function success_programme(data)
{
	var programme = document.getElementById('programme');
	for (var i = 0; i < data['programs'].length; i++)
	{
		var titre = data['programs'][i]['title'];
		var horaire	= horaire_e(data, i);
		if (data['programs'][i]['image'] == "")
			var imgurl = "ressources/stamp_topic.png";
		else
			var imgurl = data['programs'][i]['image'];
		for (var x = 0; imgurl[x] != '%' && x < imgurl.length; x++);
		if(x != imgurl.length)
			imgurl = imgurl.substr(0, x);
		var div = document.createElement("div");
		$(div).attr({'style': "width: 90%;", "class": "img_prog"});
		var p1 = document.createElement("p");
		var p2 = document.createElement("p");
		p1.appendChild(document.createTextNode(titre));
		p2.appendChild(document.createTextNode(horaire));
		var img = document.createElement("img");
		$(img).error(function() {
 			$(this).attr('src', 'ressources/stamp_topic.png') 
		});
		$(img).attr({'alt' : '','src' : imgurl, 'style' : "height:50px; margin:5px; margin-left:auto;  margin-right:auto"});
		$(div).append(img);
		$(div).append(p1);
		$(div).append(p2);
		$(programme).append(div);
	}
}

$('.refresh').on('click', function() {
    location.reload();
});
var button = document.getElementsByClassName('list-group-item');
	for(var x = 1; x < button.length;x++)
	(function(x) {$(button[x]).click(function(){
		var top = document.getElementsByName('top');
		$(top).remove();
		$('#deco').remove();
		$('#programme').children().remove();
		$('#emission').children().remove();
		$('#stars').children().remove();
		var programme = document.getElementById('programme');
		var button = document.getElementsByClassName('list-group-item');
		var id = $(button[x]).attr('id');
		var logo = $('img', $(button[x])).attr('src');
		var img = document.createElement("img");
		$(img).attr({'alt' : '','src' : logo, 'style' : "width: 80%; display:block; margin-left:auto;  margin-right:auto"});
		$(programme).append(img);
		var url = 'http://94.23.253.36:8080/TiVineWS_V1.0/GetAllContentForPartAndChannel0' + id + '10989834';
		var code = encode(url);
		$.ajax(
		{
				url: 'http://94.23.253.36:8080/TiVineWS_V1.0/GetAllContentForPartAndChannel',
				type: "POST",
				data: {'part': '0', 'channel' : id , 'clientId' : '10989834', 'encodedKey': code}
			}).done(function(data){
			success_emission(data);});
			var date = date_mnt();
			var url2 = 'http://94.23.253.36:8080/TiVineWS_V1.0/GetChannelContentForDay' + date + id + '10989834';
			var code2 = encode(url2);
			$.ajax({
				url: 'http://94.23.253.36:8080/TiVineWS_V1.0/GetChannelContentForDay',
				type: "POST",
				data: {'day': date, 'channel' : id ,'clientId' : '10989834', 'encodedKey': code2},
				success:function(data){success_programme(data);},
				error:function(){console.log(2);}
			})
		})
	})(x);
	