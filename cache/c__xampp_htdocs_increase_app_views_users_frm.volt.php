<?php echo $this->tag->form(array('Users/update', 'method' => 'post', 'name' => 'frmObject', 'id' => 'frmObject')); ?>
<fieldset>
<legend>Ajouter/modifier un utilisateur</legend>
<div class="alert alert-info">Utilisateur : <?php echo $user->toString(); ?></div>
<div class="form-group">
	<input type="hidden" name="id" id="id" value="<?php echo $user->getId(); ?>">
	<input type="text" name="identite" id="identite" value="<?php echo $user->getIdentite(); ?>" placeholder="Entrez votre identité" class="form-control">
	<input type="mail" name="mail" id="mail" value="<?php echo $user->getMail(); ?>" placeholder="Entrez l'adresse email" class="form-control">
	<input type="password" name="password" id="password" value="<?php echo $user->getPassword(); ?>" placeholder="Entrez le mot de passe" class="form-control">
	<?php echo $q['role']; ?>
</div>
<div class="form-group">
	<input type="submit" value="Valider" class="btn btn-default validate">
	<a class="btn btn-default cancel" href="<?php echo $this->url->get('Users'); ?>" data-ajax="<?php echo $baseHref . '/index'; ?>">Annuler</a>
</div>
</fieldset>
</form>
<?php echo $script_foot; ?>