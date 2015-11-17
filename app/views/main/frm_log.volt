{{ form("Index/Connect", "method": "post") }}
<fieldset>
<legend>Connexion</legend>

<div class="form-group">
	
	<input type="mail" name="mail" id="mail" placeholder="Entrez l'adresse email" class="form-control">
	<input type="password" name="password" id="password" placeholder="Entrez le mot de passe" class="form-control">

</div>
<div class="form-group">
	<input type="submit" value="Connexion" class="btn btn-default validate">
</div>
</fieldset>
</form>