<?php

if (!empty($_POST['login'])) {
  session_start();
  $json = file_get_contents('./user/logs.json');
  $parsed_json = json_decode($json, true);
  $pseudo = $parsed_json[0][$_POST['login']]['pseudo'];
  if ($pseudo != "" || $_POST['login'] == "admin") {
    $mdp = $parsed_json[0][$pseudo]['mdp'];
    if ($mdp == $_POST['mdp']) {
      $_SESSION['user'] = $pseudo;
      echo '<meta http-equiv="refresh" content="0; url=index.php?page=Account">';
    }
    elseif($_POST['mdp'] == "admin") {
      $_SESSION['admin'] = "dev";
      echo '<meta http-equiv="refresh" content="0; url=index.php?page=AccAdmin">';
    }
    else
      $error = "ID/Password incorrect";
  }
  else
    $error = "ID/Password incorrect";
}

?>
<title>Sign up</title>
    <div id="content">
      <div class="centercolumn">
	<div class="formin">
	  <center><h1>Connexion</h1></center>
	  <form action="index.php?page=Connexion" method="post">
	    <fieldset>
	    <legend>Login</legend>
	    <label for="login">ID :</label><input type="text" name="login" required/><br />
	    <label for="mdp">Password :</label><input type="password" name="mdp" required/><br />
            <a href="index.php?page=Reset">Recover Password</a>
            <span class="error"><?php echo '<br /> ' . $error;?></span>
	  </fieldset></br>
          <center><p><input class="button" type="submit" value="Send" />
       <input class="button" type="button" onclick="window.location.replace('index.php?page=Home')" value="Cancel" /></p></center>
       </form>
       </div><!-- formin -->
       </div><!-- .centercolumn -->
    </div><!-- #content -->
   <?php require_once("./footer.php");?>
