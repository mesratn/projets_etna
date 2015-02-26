<?php
function        article11($parsed_json, $panier)
{
  $nb = $parsed_json[0][$_SESSION['user']]['panier'][11];
  if ($nb == 0)
    return ($panier);
  echo '<tr>';
  echo '<td><a href="book5.php" >Girls und Panzer</a></td>';
  echo '<td><font color="green">In stock</td>';
  echo '<td>' . $nb . '</td>';
  echo '<td>23.99$</td>';
  echo '<td><center><form action="delete_article.php?article=11" method="post">';
  echo '<input class="button" type="submit" value="-" />';
  echo '</form>';
  echo '<form action="addpanier.php?article=11" method="post">';
  echo '<input class="button" type="submit" value="+" />';
  echo '</form></center></td>';
  echo '</tr>';
  $panier = 23.99 * $nb + $panier;
  return ($panier);
}

function        article12($parsed_json, $panier)
{
  $nb = $parsed_json[0][$_SESSION['user']]['panier'][12];
  if ($nb == 0)
    return ($panier);
  echo '<tr>';
  echo '<td><a href="book6.php" >Suichu Niso Plus</a></td>';
  echo '<td><font color="green">In stock</td>';
  echo '<td>' . $nb . '</td>';
  echo '<td>18.99$</td>';
  echo '<td><center><form action="delete_article.php?article=12" method="post">';
  echo '<input class="button" type="submit" value="-" />';
  echo '</form>';
  echo '<form action="addpanier.php?article=12" method="post">';
  echo '<input class="button" type="submit" value="+" />';
  echo '</form></center></td>';
  echo '</tr>';
  $panier = 18.99 * $nb + $panier;
  return ($panier);
}

function        cart_empty()
{
  echo '<tr>';
  echo '<td>EMPTY</td>';
  echo '<td>EMPTY</td>';
  echo '<td>EMPTY</td>';
  echo '<td>EMPTY</td>';
  echo '</tr>';
}

function        cart_full($panier)
{
  echo '<tr>';
  echo '<td></td>';
  echo '<td></td>';
  echo '<td>Total</td>';
  echo '<td>' . $panier . '$</td>';
  echo '</tr>';
}