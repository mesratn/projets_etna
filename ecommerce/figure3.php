<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>Kuroneko</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
  </head>
  <body>
   <?php require_once("layout.php"); ?>
    <div id="content" >
      <div class="centercolumn" >
	<div class="titledet">
	  <h1>Kuroneko</h1>
	  <br /><div class="bordure2"></div><br /><br />
	</div><!-- .tiltedet -->
	<div class="imgdet">
	  <p><img src="./images/figure3.jpg" width="420" height="420" alt="figure2" /></p>
	</div><!-- .imgdet -->
	<h3>The Goth-Loli Kuroneko is dressed up in a graceful yukata!</h3>
	<div class="pricedet">
	  <h2>Price</h2>
	  <p><h4><s>87,99$</s><br />
	      Promo: 61,99$</h4></p>
	  <h2>Description</h2>
	  <p>
	    From 'Ore no Imouto ga Konnani Kawaii Wake ga Nai' comes a figure 
	    of Kuroneko in a yukata! The outfit gives her a different charm to 
	    her standard Goth-Loli style, while still keeping a darker color 
	    scheme for a chic look that suits her character.<br />
	    She also comes with a folding fan and pouch to bring out the 
	    festival atmosphere! For even more cuteness, be sure to display 
	    her with the previously announced Kirino Kousaka: Yukata Ver.!
	  </p>
	</div><!-- .pricedet -->
	<br /><div class="bordure2"></div><br /><br />
	<form action="addpanier.php" method="POST">
	<input type="hidden" name="article" value="3"> 
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
