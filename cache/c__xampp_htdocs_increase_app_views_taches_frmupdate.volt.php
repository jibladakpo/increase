<?php echo $this->tag->form(array('Taches/update', 'method' => 'post', 'name' => 'frmObject', 'id' => 'frmObject')); ?>
<fieldset>
<legend>Ajouter/Modifier une tâche</legend>
<div class="form-group">
	<input type="hidden" name="id" id="id" value="<?php echo $tache->getId(); ?>">
	<label>Nom de la tâche:</label>
	<input type="text" name="libelle" id="libelle" value="<?php echo $tache->getLibelle(); ?>" placeholder="Entrez le nom du projet" class="form-control">
	
	<label>Date:</label>
	<input type="date" name="date" id="date" value="<?php echo $tache->getDate(); ?>" placeholder="Date" class="form-control"</div>
	
	<label>Avancement:</label>
	<input type="number" name="avancement" id="avancement" value="<?php echo $tache->getAvancement(); ?>" placeholder="Entrez un pourcentage" class="form-control">
	
	<label>Usecase</label>
	<select name="codeUseCase" id="usecase" class="form-control">
		<?php foreach ($usecase as $usecase) { ?>
    	<option value="<?php echo $usecase->getCode(); ?>"><?php echo $usecase->getNom(); ?></option><?php } ?>
    </select>

</div>
<div class="form-group">
	<input type="submit" value="Valider" class="btn btn-default validate">
	<a class="btn btn-default cancel" href="<?php echo $this->url->get('Taches'); ?>" data-ajax="<?php echo $baseHref . '/index'; ?>">Annuler</a>
</div>
</fieldset>
</form>