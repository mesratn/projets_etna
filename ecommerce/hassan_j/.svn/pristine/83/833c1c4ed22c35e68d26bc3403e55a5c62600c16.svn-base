<?php
session_start();
$json = file_get_contents('./user/logs.json');
$parsed_json = json_decode($json, true);
if (!empty($_GET['page']) && empty($_POST['login']))
  include_once('contact.php');
elseif (!empty($_POST['login']) && $parsed_json[0][$_POST['login']]['pseudo'] != $_POST['login'])
  $error = "Unknow ID";
elseif (!empty($_POST['login']) && $parsed_json[0][$_POST['login']]['pseudo'] == $_POST['login'])
  echo '<meta http-equiv="refresh" content="0; URL=index.php?page=Home">';
?>
    <title>Contact</title>
    <div id="content" >
      <div class="centercolumn">
	<h1>Contact Us</h1>
	<p>Via Mail:</p>
	<a href="mailto:hassan_j@etna-alternance.net">hassan_j@etna-alternance.net</a><br />
	<a href="mailto:rousse_k@etna-alternance.net">rousse_k@etna-alternance.net</a><br />
	<a href="mailto:mesrat_n@etna-alternance.net">mesrat_n@etna-alternance.net</a><br /><br />
	<p>Thank you very much for your inquiry.<br /><br />
	・Additional processing time may be required for some inquiries. Furthermore, due to high volume, we may be unable to respond to all business-related inquires.<br />
	・By submitting the form below you are agreeing to our privacy policy. Please see our privacy policy regarding the use of personal information collected from your inquiry.</p><br /><br />
	<div class="formin2">
	  <form action="index.php?page=Contact" method="post">
	    <fieldset>
	    <legend>Login</legend>
	    <label for="ID">ID :</label><input type="text" name="login" required/><br />
            <span class="error"><?php echo $error;?></span>
	  </fieldset></br>
	  <fieldset>
	    <legend>Contact</legend>
	    <label for="nom">First name:</label><input type="text" name="nom" required/><br />
	    <label for="prenom">Last name:</label><input type="text" name="prenom" required/><br />
	    <label for="portable">Phone:</label><input type="tel" name="portable" placeholder="0645869584" required/><br />
	    <label for="email">Mail:</label><input type="email" name="email" placeholder="johndoe@mail.com" required/><br />
	  </fieldset></br>
	  <fieldset>
	    <legend>Category</legend>
   		<p>
       		<select name="cat" id="cat">
        	   <option value="shop">Shop</option>
        	   <option value="shipping">Shipping</option>
        	   <option value="news">News</option>
        	   <option value="advertising">Advertising</option>
        	   <option value="other">Other</option>
       		</select>
   		</p>
	  </fieldset></br>
	  <fieldset>
	    <legend>Message</legend>
	      <textarea name="comments" id="comments" cols="50" rows="10">
	      </textarea>
	  </fieldset></br>
	  <center><p><input class="button" type="submit" value="Send"/>
	      <input class="button" type="button" onclick="window.location.replace('index.php?page=Contact')" value="Reset" /></p></center>
	  </form>
	</div><!-- formin -->
      </div><!-- .centercolumn -->
    </div><!-- #content -->
   <?php require_once("./footer.php");?>