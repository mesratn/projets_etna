<?php
session_start();
$json = file_get_contents('./user/logs.json');
$parsed_json = json_decode($json, true);
if (!empty($_GET['page']) && empty($_GET['action']))
  include_once('account.php');
elseif (!empty($_GET['action']) && $_GET['action'] == '1'){
  if ($_POST['new_mdp'] != $_POST['newc_mdp'])
    $mdp_err = "Invalid password";
  elseif ($parsed_json[0][$_SESSION['user']]['mdp'] == $_POST['newc_mdp'])
    $mdp_err = "Invalid password (password doesn't change)";
  else
    {
      $parsed_json[0][$_SESSION['user']]['mdp'] = $_POST['newc_mdp'];
      $mdp_err = "";
      $str = fopen('./user/logs.json', 'w');
      fwrite($str, json_encode($parsed_json));
      fclose($str);
    }
}
elseif (!empty($_GET['action']) && $_GET['action'] == '2'){
  if ($parsed_json[0][$_SESSION['user']]['mail'] == $_POST['mail'])
    $mail_err = "Invalid mail (mail doesn't change)";
  else
    {
      $parsed_json[0][$_SESSION['user']]['mail'] = $_POST['mail'];
      $mail_err = "";
      $str = fopen('./user/logs.json', 'w');
      fwrite($str, json_encode($parsed_json));
      fclose($str);
    }
}
?>
<title>Register</title>
<div id="content">
  <div class="centercolumn">
    <h1>My Account</h1>
    <fieldset>
      <legend>My infomations</legend>
  <p>ID : <?php echo $parsed_json[0][$_SESSION['user']]['pseudo']; ?><br />
     Last name : <?php echo $parsed_json[0][$_SESSION['user']]['nom']; ?><br />
     First name : <?php echo $parsed_json[0][$_SESSION['user']]['prenom']; ?><br />
     Phone : <?php echo $parsed_json[0][$_SESSION['user']]['portable']; ?><br />
     Mail : <?php echo $parsed_json[0][$_SESSION['user']]['mail']; ?><br />
      </p>
    </fieldset>
    <fieldset>
      <legend>Other</legend>
      <p><h4>Change password :</h4>
      <form action="index.php?page=Account&amp;action=1" method="post">
	<label for="new_mdp">New password :</label><input type="password" name="new_mdp" required/><br />
	<label for="newc_mdp">Confirm password :</label><input type="password" name="newc_mdp" required/>
        <br /><span class="error"><?php echo '<br /> ' . $mdp_err;?></span>
        <center><input class="button" type="submit" value="Confirm"/></center>
      </form>
	<h4>Change mail adress :</h4>
      <form action="index.php?page=Account&amp;action=2" method="post">
	<label for="mail">New adress :</label><input type="mail" name="mail" required/>
        <span class="error"><?php echo '<br /> ' . $mail_err;?></span>
        <center><input class="button" type="submit" value="Confirm"/></center>
      </form>
      </p>
    </fieldset>
   <form action="redirect_panier.php">
      <button class="panierbutton" type="submit">
       <img src="./images/panier.png" alt="home" width="40" height="40"/>
       <h2>My cart</h2>
      </button>
   </form>
  </div><!-- .centercolumn -->
</div><!-- #content -->
<?php require_once("./footer.php"); ?>
