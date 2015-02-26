<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>Senran Kagura 2</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
  </head>
  <body>
   <?php require_once("layout.php"); ?>    
    <div id="content" >
      <div class="centercolumn" >
	<div class="titledet">
	  <h1>Senran Kagura 2</h1>
	  <br /><div class="bordure2"></div><br /><br />
	</div><!-- .tiltedet -->
	<div class="imgdet">
	  <p><img src="./images/book3.jpg" width="420" height="420" alt="book3" /></p>
	</div><!-- .imgdet -->
	<h3>Senran Kagua 2: Deep Crimson Offisial Perfect Bible & Illustration Collection</h3>
	<div class="pricedet">
	  <h2>Price</h2>
	  <p>25,99$</p>
	  <h2>Description</h2>
	  <p>	  
             The much-expected encyclopedia/art book for the popular side-scroller Senran Kagura 2:
             Deep Crimson is finally here! Roughly 300 pages of information and beautiful art by
             Nan Yaegashi awaits fans in this volume, including all you need to know about the missions
             (main and special alike), analysis of the strongest enemies, CG art from the DLC,
             character illustrations, a youma illustration collection, event CG, background illustrations
             and much more! Broaden your library with this comprehensive volume and you can always turn to
             it when in need of some advice or if you just want to appreciate its beautiful artwork!
	  </p>
	</div><!-- .pricedet -->
	<br /><div class="bordure2"></div><br /><br />
	<form action="addpanier.php" method="POST">
	<input type="hidden" name="article" value="9"> 
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
