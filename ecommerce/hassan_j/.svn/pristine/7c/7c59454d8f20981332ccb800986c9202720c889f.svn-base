<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <link rel="stylesheet" href="style.css" type="text/css" />
  </head>
  <body>
   <header>
   <div class="centercolumnheader">
   <nav>
   <?php session_start(); ?>
   <?php if ($_SESSION['user'] == NULL && $_SESSION['admin'] == NULL): ?>
   <ul>
   <li><a href="index.php?page=Home">Home</a></li>
   <li><a href="index.php?page=Connexion">Connexion</a></li>
   <li><a href="index.php?page=Register">Register</a></li>
   <li><a href="index.php?page=Products">Products</a></li>
   <li><a href="index.php?page=Cart">Cart</a></li>
   <li><a href="index.php?page=FAQ">FAQ</a></li>
   </ul>
   <?php elseif ($_SESSION['user'] != NULL): ?>
   <ul>
   <li><a href="index.php?page=Home">Home</a></li>
   <li><a href="index.php?page=Account">My account</a></li>
   <li><a href="index.php?page=Products">Products</a></li>
   <li><a href="index.php?page=Cart">Cart</a></li>
   <li><a href="index.php?page=FAQ">FAQ</a></li>
   <li><a href="disconnect.php">Disconnect</a></li>
   </ul>
   <?php elseif ($_SESSION['admin'] != NULL): ?>
   <ul>
   <li><a href="index.php?page=Home">Home</a></li>
   <li><a href="index.php?page=AccAdmin">Accounts</a></li>
   <li><a href="index.php?page=Products">Products</a></li>
   <li><a href="index.php?page=CartAdmin">Carts</a></li>
   <li><a href="index.php?page=FAQ">FAQ</a></li>
   <li><a href="disconnect.php">Disconnect</a></li>
   </ul>
   <?php endif; ?>
   </nav>
   </div><!-- .centercolumn -->
   <div class="bordure"></div>
   </header>
   <?php echo $content ?>
</body>
</html>