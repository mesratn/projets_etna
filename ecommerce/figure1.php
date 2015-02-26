<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>Figma Sinon</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
  </head>
  <body>
   <?php require_once("layout.php"); ?>    
    <div id="content" >
      <div class="centercolumn" >
	<div class="titledet">
	  <h1>Figma Sinon</h1>
	  <br /><div class="bordure2"></div><br /><br />
	</div><!-- .tiltedet -->
	<div class="imgdet">
	  <p><img src="./images/figure1.jpg" width="420" height="420" alt="figure1" /></p>
	</div><!-- .imgdet -->
	<h3>"Let me show you... how the bullet of defeat tastes"</h3>
	<div class="pricedet">
	  <h2>Price</h2>
	  <p>59,99$</p>
	  <h2>Description</h2>
	  <p>Sinon, a skilled sniper player in GGO from Sword Art Online II,
	  is now available and ready for action as a figma! This figure
	  accurately conveys the blue-haired avatar’s calm, cool demeanor
	  with her usual serious face and fierce military gear. Two alternate
	  expressions - a fighting face with clenched teeth and a shy,
	  smiling one - reveal Sinon’s violent temper, as well as her cute,
	  friendly side! Easily recreate action scenes with the figma’s
	  poseable joints and areas of flexible plastic! Sinon comes with
	  her beloved Hecate II sniper rifle with a bipod support, white
	  muffler, and pistol with an effects piece. For her signature
	  sniper pose, an alternate head piece is also provided! Safeguard
	  your collection with this tough chick!</p>
	</div><!-- .pricedet -->
	<br /><br /><div class="bordure2"></div>
	<form action="addpanier.php" method="POST">
	<input type="hidden" name="article" value="1"> 
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
