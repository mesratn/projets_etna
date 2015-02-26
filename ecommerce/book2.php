<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>Bessatsu Spoon</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
  </head>
  <body>
   <?php require_once("layout.php"); ?>    
    <div id="content" >
      <div class="centercolumn" >
	<div class="titledet">
	  <h1>Bessatsu Spoon</h1>
	  <br /><div class="bordure2"></div><br /><br />
	</div><!-- .tiltedet -->
	<div class="imgdet">
	  <p><img src="./images/book2.jpg" width="420" height="420" alt="book2" /></p>
	</div><!-- .imgdet -->
	<h3>Bessatsu Spoon 2Di Vol.58 w/Bonus A1 K & Ace of Diamond Poster + Psycho-Pass 2</h3>
	<div class="pricedet">
	  <h2>Price</h2>
	  <p>12,99$</p>
	  <h2>Description</h2>
	  <p>	  
             This 58th volume of the popular Bessatsu Spoon magazine has tons of
             info on your favorite current popular anime! What’s more, 
             this issue also includes two great bonuses: <br />
             An A1-size K & Ace of Diamond poster and a Psycho-Pass 2
             & Free! Eternal Summer pin-up file.<br />
             The contents of this jam-packed issue include :<br />
             - Psycho-Pass 2 Cover Special.<br />
             - Double K Cover.<br />
             - Free! Eternal Summer.<br />
             ...and much more!<br />
	  </p>
	</div><!-- .pricedet -->
	<br /><div class="bordure2"></div><br /><br />
	<form action="addpanier.php" method="POST">
	<input type="hidden" name="article" value="8"> 
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
