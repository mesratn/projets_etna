<?php
$id_err = $adr_err = $mail_err = $mdp_err = "";
if (is_file("./user/logs.json")) {
  $json = file_get_contents("./user/logs.json");
  $parsed_json = json_decode($json, true);
}
if ($_SERVER["REQUEST_METHOD"] == "POST")
  {
    if (empty($_POST["pseudo"]) || $_POST["pseudo"] == $parsed_json[0][$_POST["pseudo"]]['pseudo'])
      $id_err = "Incorrect or already used.";
    
    if (empty($_POST["adresse"]))
      $adr_err = "Missing";

    if (empty($_POST["email"]) || $_POST["email"] == $parsed_json[0][$_POST["email"]]["mail"])
      $mail_err = "Incorrect or already used.\n";
    
    if (strlen($_POST["mdp"]) < 6)
      $mdp_err = "Password must be at least 6 characters.\n";
    
    if (strlen($_POST["mdp"]) > 20)
      $mdp_err = "Password must have less than 20 characters.\n";
  }
if ($id_err == "" && $adr_err == "" && $mail_err == "" && $mdp_err == "" && !empty($_POST)) {
  $parsed_json[0][$_POST['pseudo']]['pseudo'] = $_POST['pseudo'];
  $parsed_json[0][$_POST['pseudo']]['mdp'] = $_POST['mdp'];
  $parsed_json[0][$_POST['pseudo']]['nom'] = $_POST['nom'];
  $parsed_json[0][$_POST['pseudo']]['prenom'] = $_POST['prenom'];
  $parsed_json[0][$_POST['pseudo']]['mail'] = $_POST['email'];
  $parsed_json[0][$_POST['pseudo']]['pays'] = $_POST['pays'];
  $parsed_json[0][$_POST['pseudo']]['adresse'] = $_POST['adresse'];
  $parsed_json[0][$_POST['pseudo']]['codepostal'] = $_POST['codepostal'];
  $parsed_json[0][$_POST['pseudo']]['portable'] = $_POST['portable'];
  $parsed_json[0][$_POST['pseudo']]['age'] = $_POST['age'];
  $parsed_json[0][$_POST['pseudo']]['sex'] = $_POST['sexe'];
  $parsed_json[0][$_POST['pseudo']]['panier'] = "";
  $str = fopen('./user/logs.json', 'w');
  fwrite($str, json_encode($parsed_json));
  fclose($str);
  echo '<meta http-equiv="refresh" content="0; URL=index.php?page=Home">';
}
?>
<?php if ($_SESSION['user'] != NULL || $_SESSION['admin'] != NULL): ?>
<?php echo '<meta http-equiv="refresh" content="0; URL=index.php?page=Home">'; ?>
<?php elseif ($_SESSION['user'] == NULL): ?>
<title>Register</title>
<div id="content">
   <div class="centercolumn">
	<div class="formin">
	  <center><h1>Registration form</h1></center>
	    <form action="index.php?page=Register" method="post">
		<fieldset>
		   <legend>Login</legend>
		   <label for="pseudo">ID :</label><input type="text" name="pseudo" value="<?php echo htmlspecialchars($pseudo); ?>" required/> <br />
		   <span class="error"><?php echo $id_err;?></span><br />
		   <label for="mdp">Password :</label><input type="password" name="mdp" required/>
		   <br /><span class="error"><?php echo $mdp_err;?></span><br />
		</fieldset></br>
		<fieldset>
		   <legend>Contact</legend>
		   <label for="nom">Last name :</label><input type="text" name="nom" placeholder="Hassani" required/><br />
		   <label for="prenom">First name :</label><input type="text" name="prenom" placeholder="Jawad" required/><br />
		   <label for="portable">Phone :</label><input type="tel" name="portable" placeholder="06XXXXXXXX" required/><br />
		   <label for="email">Mail :</label><input type="email" name="email" placeholder="name.lastname@gmail.com" value="<?php echo htmlspecialchars($email); ?>"  required/><br />
                   <span class="error"><?php echo '<br />' . $mail_err;?></span>
                </fieldset></br>
		<fieldset>
		   <legend>Personnal informations</legend>
		   <label for="age">Age :</label><input type="number" name="age" placeholder="XX" min="16" max="99" required/><br />
		   <p>
		   <label for="sexe">Sex</label>
		   <select name="sexe" id="sexe">
		   <option id="sexe" value="femme">Woman</option>
		   <option id="sexe" value="Homme">Man</option>
		   </select>
                   <p>
                   <label for="country">Country</label>
                   <select name="pays" id="country">
                   <option value="France">France</option>
                   <option value="Spain">Spain</option>
                   <option value="Italia">Italia</option>
                   <option value="United Kingdom">United Kingdom</option>
                   <option value="Canada">Canada</option>
                   <option value="United-States">United-States</option>
                   <option value="China">China</option>
                   <option value="Japan">Japan</option>
                   </select>
                   </p>
		   <label for="adresse">Adresse :</label><input type="text" name="adresse" placeholder="15 rue Maurice" value="<?php echo htmlspecialchars($adresse); ?>"  required/><br />
		   <span class="error"><?php echo '<br />' . $adr_err;?></span>
                   <label for="codepostal">Postcode :</label><input type="number" name="codepostal" placeholder="94200" min="0" value="<?php echo htmlspecialchars($codepostal); ?>"  required/><br />
		   <span class="error"><?php echo '<br />' . $adr_err;?></span>
                </fieldset></br>
		<fieldset>
		   <legend>Other</legend>
		   <label2 for="comments">How did you find our website?</label2><br />
		   <p>
		   <input type="radio" name="knowledge" value="ami" />Friend(s)<br />
		   <input type="radio" name="knowledge" value="collegue" />Collegue(s)<br />
		   <input type="radio" name="knowledge" value="famille" />Family<br />
		   <input type="radio" name="knowledge" value="autre" />Other :
		   <input type="text" id="autre" /><br />
		   </p>
		   <label2 for="comments">Your comments :</label2>
		   <textarea id="comments" cols="50" rows="10">
		   </textarea>
		   </fieldset></br>
		   <center><p><input class="button" type="submit" value="Send" onclick="checkForm()" />
		   <input class="button" type="button" onclick="window.location.replace('index.php?page=Register')" value="Reset" /></p></center>
		</form>
	</div><!-- formin -->
   </div><!-- .centercolumn -->
  </div><!-- #content -->
<?php require_once("./footer.php"); ?>
  <?php endif; ?>