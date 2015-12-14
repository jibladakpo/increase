<?php echo $this->tag->form(array('Taches/viewT', 'method' => 'post', 'name' => 'frmObject', 'id' => 'frmObject')); ?>
<fieldset>
<legend>Tâche <?php echo $tache->getLibelle(); ?> </legend>

<div class="form-group">
	<div>Date: <?php echo $tache->getDate(); ?></div>
	<div class="progress">
  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="<?php echo $tache->getAvancement(); ?>"
  aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $tache->getAvancement(); ?>%">
    <?php echo $tache->getAvancement(); ?>% Complete
  </div>
</div>
</div>

	
</div>
<div class="form-group">
	<a class="btn btn-default cancel" href="<?php echo $this->url->get('Taches'); ?>" data-ajax="<?php echo $baseHref . '/index'; ?>">Retour</a>
</div>
</fieldset>
</form>