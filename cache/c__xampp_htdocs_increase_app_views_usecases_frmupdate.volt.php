<?php echo $this->tag->form(array('Usecases/update', 'method' => 'post', 'name' => 'frmObject', 'id' => 'frmObject')); ?>
<fieldset>
<legend>Ajouter/Modifier un usecase</legend>
<div class="form-group">

	<label>Code:</label>
	<input type="text" name="code" id="code" value="<?php echo $usecase->getCode(); ?>" placeholder="Saisir un code" class="form-control">
	<label>Nom du Usecase:</label>
	<input type="text" name="nom" id="nom" value="<?php echo $usecase->getNom(); ?>" placeholder="Entrez le nom du projet" class="form-control">

	<label>Nom du Projet:</label>
		<select name="idProjet" id="projet" class="form-control">
		<?php foreach ($projet as $project) { ?>
    	<option value="<?php echo $project->getId(); ?>"><?php echo $project->getNom(); ?></option><?php } ?>
    </select>
	
	<label>Avancement:</label>
	<input type="number" name="avancement" id="avancement" value="<?php echo $usecase->getAvancement(); ?>" placeholder="Entrez un pourcentage" class="form-control">
	
	<label>Nom du développeur:</label>
		<select name="idDev" id="user" class="form-control">
		<?php foreach ($user as $user) { ?>
    	<option value="<?php echo $user->getId(); ?>"><?php echo $user->getIdentite(); ?></option><?php } ?>
    </select>
	
	<label>Poids:</label>
	<input type="number" name="poids" id="poids" value="<?php echo $usecase->getPoids(); ?>" placeholder="Entrez un poids" class="form-control">

</div>
<div class="form-group">
	<input type="submit" value="Valider" class="btn btn-default validate">
	<a class="btn btn-default cancel" href="<?php echo $this->url->get('Usecases'); ?>" data-ajax="<?php echo $baseHref . '/index'; ?>">Annuler</a>
</div>
</fieldset>
</form>