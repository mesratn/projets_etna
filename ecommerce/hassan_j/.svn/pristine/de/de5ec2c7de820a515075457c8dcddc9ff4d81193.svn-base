<?php
session_start();
$json = file_get_contents('./user/logs.json');
$parsed_json = json_decode($json, true);
$i = 0;
$j = 1;
foreach ($parsed_json[0] as $acc => $infos)
  {
    $pseudo = "pseudo" . $j;
    $mail = "mail" . $j;
    if ($pseudo == $_GET['acc'])
      $parsed_json[0][$acc]['pseudo'] = $_POST[$pseudo];
    if ($mail == $_GET['acc'])
      $parsed_json[0][$acc]['mail'] = $_POST[$mail];
    $j++;
  }

$str = fopen('./user/logs.json', 'w');
fwrite($str, json_encode($parsed_json));
fclose($str);
?>
<?php if (empty($_SESSION['admin'])): ?>
<?php echo '<meta http-equiv="refresh" content="0; URL=index.php?page=Home">'; ?>
<?php elseif (!empty($_SESSION['admin'])): ?>
<title>Register</title>
<div id="content">
  <div class="centercolumn">
    <h1>Admin</h1>
  <?php foreach ($parsed_json[0] as $acc => $infos): ?>
  <?php $i++;
  $pseudo = "pseudo" . $i;
  $mail = "mail" . $i;
  ?>
    <fieldset>
      <legend><?php echo $acc ?></legend>
   <p><label for="pseudo">ID :</label><?php echo $parsed_json[0][$acc]['pseudo']; ?><br />
   <form action="index.php?page=AccAdmin&amp;acc=<?php echo $pseudo ?>" method="post">
     <label for="pseudo">Change ID :</label><input type="text" name="<?php echo $pseudo?>" required/>
     <input class="button" type="submit" value="Send" /><br /><br />
   </form>
   <label for="mail">Mail :</label><?php echo $parsed_json[0][$acc]['mail']; ?><br />
   <form action="index.php?page=AccAdmin&amp;acc=<?php echo $mail ?>" method="post">
     <label for="mail">Change Mail :</label><input type="mail" name="<?php echo $mail?>" required/>
     <input class="button" type="submit" value="Send" /><br /><br />
   </form>
   <label for="Last name">Last name :</label><?php echo $parsed_json[0][$acc]['nom']; ?><br />
   <label for="First name">First name :</label><?php echo $parsed_json[0][$acc]['prenom']; ?><br />
   <label for="Phone">Phone :</label><?php echo $parsed_json[0][$acc]['portable']; ?><br />
      </p>
    </fieldset>
<?php endforeach; ?>
  </div><!-- .centercolumn -->
</div><!-- #content -->
   <?php require_once("./footer.php"); ?>
  <?php endif; ?>