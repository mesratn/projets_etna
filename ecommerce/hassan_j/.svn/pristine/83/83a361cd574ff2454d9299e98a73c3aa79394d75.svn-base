<?php
include_once('articles.php');
include_once('articles2.php');
include_once('articles3.php');
session_start();
$json = file_get_contents('./user/logs.json');
$parsed_json = json_decode($json, true);
$panier = 0;
if (empty($_SESSION['user']) && empty($_SESSION['admin']))
  echo '<meta http-equiv="refresh" content="0; URL=index.php?page=Connexion">';
?>
<title>Your Cart</title>
<div id="content" >
  <div class="centercolumn">
    <h2>My cart</h2>
    <table id="t01">
      <tr>
	<th>Product(s)</th>
	<th>Disponibility</th>
	<th>Quantity</th>
	<th>Price</th>
      </tr>
      <?php
      $panier = article1($parsed_json, $panier);
      $panier = article2($parsed_json, $panier);
      $panier = article3($parsed_json, $panier);
      $panier = article4($parsed_json, $panier);
      $panier = article5($parsed_json, $panier);
      $panier = article6($parsed_json, $panier);
      $panier = article7($parsed_json, $panier);
      $panier = article8($parsed_json, $panier);
      $panier = article9($parsed_json, $panier);
      $panier = article10($parsed_json, $panier);
      $panier = article11($parsed_json, $panier);
      $panier = article12($parsed_json, $panier);
      if ($panier == 0)
	cart_empty();
      else
	cart_full($panier);
      ?>
    </table>
    <input class="button" type="submit" value="OK" />
    <div class="blank"></div>
  </div><!-- .centercolumn -->
</div><!-- #content -->
<?php require_once("./footer.php");?>
