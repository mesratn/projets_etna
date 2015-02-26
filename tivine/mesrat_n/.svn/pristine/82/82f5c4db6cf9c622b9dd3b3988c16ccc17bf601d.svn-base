String.prototype.sansAccent = function(){
    var accent = [
        /[\300-\306]/g, /[\340-\346]/g, // A, a
        /[\310-\313]/g, /[\350-\353]/g, // E, e
        /[\314-\317]/g, /[\354-\357]/g, // I, i
        /[\322-\330]/g, /[\362-\370]/g, // O, o
        /[\331-\334]/g, /[\371-\374]/g, // U, u
        /[\321]/g, /[\361]/g, // N, n
        /[\307]/g, /[\347]/g, // C, c
    ];
    var noaccent = ['A','a','E','e','I','i','O','o','U','u','N','n','C','c'];
     
    var str = this;
    for(var i = 0; i < accent.length; i++){
        str = str.replace(accent[i], noaccent[i]);
    }
     
    return str;
}

var tab = new Array();

function date_hier () {
	$today = new Date();
	$yesterday = new Date($today);
	$yesterday.setDate($today.getDate() - 1);
	var $dd = $yesterday.getDate();
	var $mm = $yesterday.getMonth()+1;
	var $yyyy = $yesterday.getFullYear();
	if ($dd < 10) 
		$dd = '0' + $dd;
	if ($mm < 10)
		$mm = '0' + $mm;
	$yesterday = $yyyy + $mm + $dd;
	return($yesterday);
}

function stars_name(data, tab, id)
{
	for (var y = 0; y < data['programs'].length; y++)
	{
		cast = data['programs'][y]['cast'];
		cast = cast.sansAccent();
		cast = cast.match(/>[\w\s\'\-]+</gi);
		if (cast != null)
		for (var x = 0 ; x < cast.length; x++)
		{
			cast[x] = cast[x].substr(1, cast[x].length - 1).substr(0, cast[x].length - 2);
			tab.push(cast[x]);
		}
	}
	return (tab);
}

function img_stars(data, top, name)
{
	if (data['stamps'][0] == undefined)
		var image = "ressources/stamp_people.png"
	else
		var image = data['stamps'][0]['image'];
	var deco = document.getElementById('all_info');
	var div = document.createElement("div");
	var img = document.createElement("img");
	var nom = document.createElement("p");
	var xtop = document.createElement("p");
	nom.appendChild(document.createTextNode(name));
	xtop.appendChild(document.createTextNode(name + " est apparu " + top + " fois à la télé hier."));
	$(img).error(function() {
 		$(this).attr('src', 'ressources/stamp_people.png') 
		});
	$(img).attr({'alt' : '','src' : image, 'style' : "height:120px; margin:10px; display:inline-block; float:left"});
	$(div).append(img);
	$(div).append(nom);
	$(div).append(xtop);
	$(deco).append(div);
	$(div).attr({'name': 'top','style' : 'float : left; border : 2px solid white; width : 99%;'});
	$(div).attr('name' , 'top');
}

function tri(tab, n)
{
	var	min = 0;
	var	j = 0;
	var tmp = 0;

  for (var i = 0; i < (n - 1); i++)
    {
      min = i;
      for (j = (i + 1); j < n; j++)
		if (tab[j] < tab[min])
	  		min = j;
      	if (min != i)
		{
			tmp = tab[i];
			tab[i] = tab[min];
			tab[min] = tmp;
		}
    }
}


function stars()
{
	var num = new Array();
	var  j = i = number = 0;
	tab = tab.sort();
	var  count = {}; 
	tab.forEach(function(i) {
		count[i] = (count[i]||0)+1;
	});
	//top1
	for (i = 0; i < tab.length; i++, j++)
		num[j] = count[tab[i]];
	var n = num.length;
	tri(num, n);
	var top1 = num[num.length -1];
	for (i = 0 , j = 0; i < tab.length; i++, j++)
		{
			if (count[tab[i]] == top1)
				{
					var top1_n = tab[i];
					delete count[top1_n];
					break;
				}
		}
	var url1 = 'http://94.23.253.36:8080/TiVineWS_V1.0/SearchStamp' + top1_n + '10989834';
	var code = encode(url1);
	$.ajax({
			url: 'http://94.23.253.36:8080/TiVineWS_V1.0/SearchStamp',
			type: "POST",
			data: {'query': top1_n, 'clientId' : '10989834', 'encodedKey': code},
			success:function(data){
				img_stars(data, top1, top1_n);
				},
				error:function(){;}
			});
	//top2
	for (i = 0; i < tab.length; i++, j++)
		num[j] = count[tab[i]];
	var n = num.length;
	tri(num, n);
	var top2 = num[num.length -1];
	for (i = 0, j = 0; i < tab.length; i++, j++)
		{
			if (count[tab[i]] == top2)
				{
					var top2_n = tab[i];
					delete count[top2_n];
					break;
				}
		}
	var url2 = 'http://94.23.253.36:8080/TiVineWS_V1.0/SearchStamp' + top2_n + '10989834';
	var code = encode(url2);
	$.ajax({
			url: 'http://94.23.253.36:8080/TiVineWS_V1.0/SearchStamp',
			type: "POST",
			data: {'query': top2_n, 'clientId' : '10989834', 'encodedKey': code},
			success:function(data){
				img_stars(data, top2, top2_n);
			},
			error:function(){;}
			});
	//top3
	for (i = 0 ; i < tab.length; i++, j++)
		num[j] = count[tab[i]];
	var n = num.length;
	tri(num, n);
	var top3 = num[num.length -1];
	for (i = 0, j = 0; i < tab.length; i++, j++)
		{
			if (count[tab[i]] == top3)
				{
					var top3_n = tab[i];
					delete count[top3_n];
					break;
				}
		}
	var url3 = 'http://94.23.253.36:8080/TiVineWS_V1.0/SearchStamp' + top3_n + '10989834';
	var code = encode(url3);
	$.ajax({
			url: 'http://94.23.253.36:8080/TiVineWS_V1.0/SearchStamp',
			type: "POST",
			data: {'query': top3_n, 'clientId' : '10989834', 'encodedKey': code},
			success:function(data){
				img_stars(data, top3, top3_n);
			},
			error:function(){;}
			});
}

function programme_channel()
{
	var done = 0;
	for (var id = 1; id < 37; id++, done ++)
	{
		(function(id){var date = date_hier();
		var url = 'http://94.23.253.36:8080/TiVineWS_V1.0/GetChannelContentForDay' + date + id + '10989834';
		var code = encode(url);
		$.ajax({
			url: 'http://94.23.253.36:8080/TiVineWS_V1.0/GetChannelContentForDay',
			type: "POST",
			data: {'day': date, 'channel' : id , 'clientId' : '10989834', 'encodedKey': code},
			success:function(data){
				stars_name(data, tab, id);
			},
			error:function(){;}
			});
	})(id);
	}
}
programme_channel();
setTimeout(function(){stars()},1500);