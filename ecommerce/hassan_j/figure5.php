<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>Haruka Koumi</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
  </head>
  <body>
   <?php require_once("layout.php"); ?>
    <div id="content" >
      <div class="centercolumn" >
	<div class="titledet">
	  <h1>Haruka Koumi</h1>
	  <br /><div class="bordure2"></div><br /><br />
	</div><!-- .tiltedet -->
	<div class="imgdet">
	  <p><img src="./images/figure5.jpg" width="420" height="420" alt="figure5" /></p>
	</div><!-- .imgdet -->
	<h3>Marine-chan from Sea Story is joining the Nendoroids?! Super Lucky!</h3>
	<div class="pricedet">
	  <h2>Price</h2>
	  <p>41,99$</p>
	  <h2>Description</h2>
	  <p>
	    From the popular pachinko series 'Sea Story' comes a Nendoroid of 
	    Marine-chan! Her cheerful and energetic personality has been 
	    converted into chibi size for fans to enjoy!
	    Marine-chan comes with three different expressions including her 
	    standard face, a radiant smiling face as well as a cute winking 
	    face. She also comes with flippers and a selection of sea creatures 
	    as optional parts allowing you to recreate various scenes and poses 
	    from the pachinko machine!
	  </p>
	</div><!-- .pricedet -->
	<br /><div class="bordure2"></div><br /><br />
	<form action="addpanier.php" method="POST">
	<input type="hidden" name="article" value="5"> 
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
