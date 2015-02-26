<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>Girls und Panzer</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
  </head>
  <body>
   <?php require_once("layout.php"); ?>    
    <div id="content" >
      <div class="centercolumn" >
	<div class="titledet">
	  <h1>Girls und Panzer</h1>
	  <br /><div class="bordure2"></div><br /><br />
	</div><!-- .tiltedet -->
	<div class="imgdet">
	  <p><img src="./images/book5.jpg" width="420" height="420" alt="book5" /></p>
	</div><!-- .imgdet -->
	<h3>Girls und Panzer Storyboard Collection Vol. 3</h3>
	<div class="pricedet">
	  <h2>Price</h2>
	  <p>23,99$</p>
	  <h2>Description</h2>
	  <p>
              This third volume of the Girls und Panzer Storyboard Collection features 
              Episodes 9-12 of the TV anime series as well as OVAs 5 and 6. In addition 
              to the complete storyboards that were used to create these fantastic episodes,
              the book even contains some of the scenes which were later cut from the
              finished animation! If you love this exciting series that mixes the everyday 
              lives of high school girls with high-octane tank-based action, enjoy even
              more cute illustrations with this excellent storyboard collection.
	  </p>
	</div><!-- .pricedet -->
	<br /><div class="bordure2"></div><br /><br />
	<form action="addpanier.php" method="POST">
	<input type="hidden" name="article" value="11"> 
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
