<?php echo $this->tag->form(array('Messages/update', 'method' => 'post', 'name' => 'frmObject', 'id' => 'frmObject')); ?>
<fieldset>
<legend>Modifier message</legend>
<div class="alert alert-info">Message : <?php echo $message->toString(); ?></div>
<div class="form-group">
	<input type="hidden" name="id" id="id" value="<?php echo $message->getId(); ?>">
	
	<label>Objet</label>
	<input type="text" name="objet" id="objet" value="<?php echo $message->getObjet(); ?>" placeholder="Entrez l'objet" class="form-control">
	
	<label>Message</label>
	<textarea name="content" id="content" class="form-control" placeholder="Saisissez votre message"><?php echo $message->getContent(); ?></textarea>

	<label>Projet</label>
	<select name="idProjet" id="projet" class="form-control" value="<?php echo $message->getProjet()->getId(); ?>">
		<?php foreach ($projets as $project) { ?>
			<?php if ($project->getId() == $message->getProjet()->getId()) { ?>
	    		<option selected value="<?php echo $project->getId(); ?>"><?php echo $project->getNom(); ?></option>
    		<?php } else { ?>
    			<option value="<?php echo $project->getId(); ?>"><?php echo $project->getNom(); ?></option>
    		<?php } ?>
    	<?php } ?>
    </select>
    
    <label>Emetteur</label>
    <input type="hidden" name="idUser" value="<?php echo $user->getId(); ?>">
	<div class="form-control" disabled><?php echo $user->getIdentite(); ?></div>
	
	<label>Date d'envoi</label>
	<input class="form-control" disabled type="hidden" name="date" id="date" value="message.getdate()">
	<div class="form-control" disabled><?php echo $message->getdate('d-m-Y H:i:s'); ?></div>

	
</div>
<div class="form-group">
	<input type="submit" value="Modifier" class="btn btn-default validate">
	<a class="btn btn-default cancel" href="<?php echo $this->url->get('Messages'); ?>" data-ajax="<?php echo $baseHref . '/index'; ?>">Annuler</a>
</div>
</fieldset>
</form>
<?php echo $script_foot; ?>