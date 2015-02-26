<?php
session_start();
$json = file_get_contents('./user/logs.json');
$parsed_json = json_decode($json, true);
if (!empty($_GET['page']) && empty($_POST['login']))
  include_once('mdp_reset.php');
elseif (!empty($_POST['login']) && $parsed_json[0][$_POST['login']]['pseudo'] == $_POST['login'])
  $valid = "A mail has been sended to " . $parsed_json[0][$_POST['login']]['mail'] . ", please check it.";
else
  $error = "Unknow ID";
?>
<title>Recover Password</title>
    <div id="content">
      <div class="centercolumn">
        <div class="formin">
          <center><h1>Recover Password</h1></center>
          <form action="index.php?page=Reset" method="post">
            <fieldset>
            <legend>Login</legend>
            <label for="login">ID :</label><input type="text" name="login" required/><br /><br />
            <span class="error"><?php echo $error;?></span>
            <span class="valid"><?php echo $valid;?></span>
          </fieldset></br>
          <center><p><input class="button" type="submit" value="Send" />
       <input class="button" type="button" onclick="window.location.replace('index.php?page=Home')" value="Cancel" /></p></center>
       </form>
       </div><!-- formin -->
       </div><!-- .centercolumn -->
    </div><!-- #content -->
   <?php require_once("./footer.php");?>