    <title>Report Bug</title>
    <div id="content" >
      <div class="centercolumn">
	<h1>Report bug</h1>
	<div class="formin2">
	  <form action="bug.php" method="post">
	    <fieldset>
	    <legend>Login</legend>
	    <label for="ID">ID :</label><input type="text" id="ID" placeholder="" required/><br />
	  </fieldset></br>
	  <fieldset>
	    <legend>Contact</legend>
	    <label for="nom">First name:</label><input type="text" id="nom" placeholder="" required/><br />
	    <label for="prenom">Last name:</label><input type="text" id="prenom" placeholder="" required/><br />
	    <label for="portable">Phone:</label><input type="tel" id="portable" placeholder="06000000" required/><br />
	    <label for="email">Mail:</label><input type="email" id="email" placeholder="johndoe@mail.com" required/><br />
	  </fieldset></br>
	  <fieldset>
	    <legend>Category</legend>
	    <form method="post" action="contact.php">
   		<p>
       		<select name="cat" id="cat">
        	   <option value="shop">Shop</option>
        	   <option value="shipping">Shipping</option>
        	   <option value="news">News</option>
        	   <option value="advertising">Advertising</option>
        	   <option value="other">Other</option>
       		</select>
   		</p>
	    </form>
	  </fieldset></br>
	  <fieldset>
	    <legend>Message</legend>
	      <textarea name="comments" id="comments" cols="50" rows="10">
	      </textarea>
	  </fieldset></br>
	  <center><p><input class="button" type="submit" value="Send" onclick="window.location.replace('index.php?page=Home')" />
	      <input class="button" type="button" onclick="window.location.replace('index.php?page=Report_Bug')" value="Reset" /></p></center>
	  </form>
	</div><!-- formin -->
      </div><!-- .centercolumn -->
    </div><!-- #content -->
   <?php require_once("./footer.php");?>