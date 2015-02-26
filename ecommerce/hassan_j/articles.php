<?php
function	article1($parsed_json, $panier)
{
  $nb = $parsed_json[0][$_SESSION['user']]['panier'][1];
  if ($nb == 0)
    return ($panier);
  echo '<tr>';
  echo '<td>';
  echo '<a href="figure1.php" >Figure Figma Sinon</a>';
  echo '</td>';
  echo '<td><font color="green">In stock</td>';
  echo '<td>' . $nb . '</td>';
  echo '<td>59.99$</td>';
  echo '<td><center><form action="delete_article.php?article=1" method="post">';
  echo '<input class="button" type="submit" value="-" />';
  echo '</form>';
  echo '<form action="addpanier.php?article=1" method="post">';
  echo '<input class="button" type="submit" value="+" />';
  echo '</form></center></td>';
  echo '</tr>';
  $panier = 59.99 * $nb + $panier;
  return ($panier);
}

function	article2($parsed_json, $panier)
{
  $nb = $parsed_json[0][$_SESSION['user']]['panier'][2];
  if ($nb == 0)
    return ($panier);
  echo '<tr>';
  echo '<td><a href="figure2.php" >Figure Figma saber</a></td>';
  echo '<td><font color="green">In stock</td>';
  echo '<td>' . $nb . '</td>';
  echo '<td>31.99$</td>';
  echo '<td><center><form action="delete_article.php?article=2" method="post">';
  echo '<input class="button" type="submit" value="-" />';
  echo '</form>';
  echo '<form action="addpanier.php?article=2" method="post">';
  echo '<input class="button" type="submit" value="+" />';
  echo '</form></center></td>';
  echo '</tr>';
  $panier = 31.99 * $nb + $panier;
  return ($panier);
}

function	article3($parsed_json, $panier)
{
  $nb = $parsed_json[0][$_SESSION['user']]['panier'][3];
  if ($nb == 0)
    return ($panier);
  echo '<tr>';
  echo '<td><a href="figure3.php" >Figure Kuroneko</a></td>';
  echo '<td><font color="green">In stock</td>';
  echo '<td>' . $nb . '</td>';
  echo '<td>61.99$</td>';
  echo '<td><center><form action="delete_article.php?article=3" method="post">';
  echo '<input class="button" type="submit" value="-" />';
  echo '</form>';
  echo '<form action="addpanier.php?article=3" method="post">';
  echo '<input class="button" type="submit" value="+" />';
  echo '</form></center></td>';
  echo '</tr>';
  $panier = 61.99 * $nb + $panier;
  return ($panier);
}

function	article4($parsed_json, $panier)
{
  $nb = $parsed_json[0][$_SESSION['user']]['panier'][4];
  if ($nb == 0)
    return ($panier);
  echo '<tr>';
  echo '<td><a href="figure4.php" >Figure Kirino Kousaka</a></td>';
  echo '<td><font color="green">In stock</td>';
  echo '<td>' . $nb . '</td>';
  echo '<td>87.99$</td>';
  echo '<td><center><form action="delete_article.php?article=4" method="post">';
  echo '<input class="button" type="submit" value="-" />';
  echo '</form>';
  echo '<form action="addpanier.php?article=4" method="post">';
  echo '<input class="button" type="submit" value="+" />';
  echo '</form></center></td>';
  echo '</tr>';
  $panier = 87.99 * $nb + $panier;
  return ($panier);
}

function	article5($parsed_json, $panier)
{
  $nb = $parsed_json[0][$_SESSION['user']]['panier'][5];
  if ($nb == 0)
    return ($panier);
  echo '<tr>';
  echo '<td><a href="figure5.php" >Figure Haruka Koumi</a></td>';
  echo '<td><font color="green">In stock</td>';
  echo '<td>' . $nb . '</td>';
  echo '<td>41.99$</td>';
  echo '<td><center><form action="delete_article.php?article=5" method="post">';
  echo '<input class="button" type="submit" value="-" />';
  echo '</form>';
  echo '<form action="addpanier.php?article=5" method="post">';
  echo '<input class="button" type="submit" value="+" />';
  echo '</form></center></td>';
  echo '</tr>';
  $panier = 41.99 * $nb + $panier;
  return ($panier);
}