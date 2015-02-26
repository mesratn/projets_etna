<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>Figma saber</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
  </head>
  <body>
   <?php require_once("layout.php"); ?>    
    <div id="content" >
      <div class="centercolumn" >
	<div class="titledet">
	  <h1>Figma saber</h1>
	  <br /><div class="bordure2"></div><br /><br />
	</div><!-- .tiltedet -->
	<div class="imgdet">
	  <p><img src="./images/figure2.jpg" width="420" height="420" alt="figure2" /></p>
	</div><!-- .imgdet -->
	<h3>The King of Knights returns once more to the figma series!</h3>
	<div class="pricedet">
	  <h2>Price</h2>
	  <p><h4><s>47,99$</s><br />
	      Promo: 31,99$</h4></p>
	  <h2>Description</h2>
	  <p>From Fate/Stay Night comes this updated and upgraded from the 
	    ground up figma of the heroic Saber. Made using newly designed 
	    figma joints, she is now capable of many new poses including being 
	    able to wield her sword using both hands. She also comes with many 
	    additional parts including three facial expressions (standard, 
	    shouting, embarrassed), her legendary swords Excalibur and 
	    Caliburn, and even alternate hair parts for creating even more 
	    authentic poses. If you missed out last time or even if you own 
	    the original, now is your chance to own figma Saber 2.0!</p>
	</div><!-- .pricedet -->
	<br /><div class="bordure2"></div><br /><br />
	<form action="addpanier.php" method="POST">
	<input type="hidden" name="article" value="2"> 
	  <button class="panierbutton" type="submit">
	    <img src="./images/panier.png" alt="home" width="40" height="40"/> 
	    <h2>Add to cart</h2>
	  </button>
	</form>
      </div><!-- .centecolumn -->
    </div><!-- #content -->
   <?php require_once("footer.php"); ?>
  </body>
</html>
