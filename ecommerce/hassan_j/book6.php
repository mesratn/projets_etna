<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>Suichu Niso Plus</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
  </head>
  <body>
   <?php require_once("layout.php"); ?>    
    <div id="content" >
      <div class="centercolumn" >
	<div class="titledet">
	  <h1>Suichu Niso Plus</h1>
	  <br /><div class="bordure2"></div><br /><br />
	</div><!-- .tiltedet -->
	<div class="imgdet">
	  <p><img src="./images/book6.jpg" width="420" height="420" alt="book6" /></p>
	</div><!-- .imgdet -->
	<h3>Suichi Niso Plus Book 21</h3>
	<div class="pricedet">
	  <h2>Price</h2>
	  <p>18,99$</p>
	  <h2>Description</h2>
	  <p>
              Enjoy Book 2 of the strangely mesmerizing Suichu Niso (Underwater Knee-highs Plus)
              series! Swimwear, knee-high socks and swimming pools create a mysteriously
              fascinating combination of Japanese subculture icons! This sequel features 
              Manami Yamaguchi from Ebisu Muscats and Shimarisu-chan collaborating with
              new items such as mecha parts designed by Naoki, bunny ears, octopus tentacles,
              umbrellas, raincoats, beach floats, water guns and other interesting objects!
              Fans of this Japanese subculture, this unique art book is for you!
	  </p>
	</div><!-- .pricedet -->
	<br /><div class="bordure2"></div><br /><br />
	<form action="addpanier.php" method="POST">
	<input type="hidden" name="article" value="12"> 
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
