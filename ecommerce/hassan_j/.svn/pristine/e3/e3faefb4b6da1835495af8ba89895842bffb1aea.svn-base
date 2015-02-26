<?php

ob_start();
if (empty($_GET['page']) || $_GET['page'] == 'Home'){
  include_once('accueil.php');
} elseif (empty($_GET['page']) || $_GET['page'] == 'Register'){
  include_once('inscription.php');
} elseif (empty($_GET['page']) || $_GET['page'] == 'Account'){
  include_once('account.php');
} elseif (empty($_GET['page']) || $_GET['page'] == 'Products'){
  include_once('produit.php');
} elseif (empty($_GET['page']) || $_GET['page'] == 'Cart'){
  include_once('panier.php');
} elseif (empty($_GET['page']) || $_GET['page'] == 'FAQ'){
  include_once('FAQ.php');
} elseif (empty($_GET['page']) || $_GET['page'] == 'Connexion'){
  include_once('connexion.php');
} elseif (empty($_GET['page']) || $_GET['page'] == 'Contact'){
  include_once('contact.php');
} elseif (empty($_GET['page']) || $_GET['page'] == 'Report'){
  include_once('bug.php');
} elseif (empty($_GET['page']) || $_GET['page'] == 'About'){
  include_once('about_us.php');
} elseif (empty($_GET['page']) || $_GET['page'] == 'Privacy'){
  include_once('privacy.php');
} elseif (empty($_GET['page']) || $_GET['page'] == 'Reset'){
  include_once('mdp_reset.php');
} elseif (empty($_GET['page']) || $_GET['page'] == 'AccAdmin'){
  include_once('accadmin.php');
} elseif (empty($_GET['page']) || $_GET['page'] == 'CartAdmin'){
  include_once('cartadmin.php');
}
$content = ob_get_contents();
ob_clean();
include_once('layout.php');
