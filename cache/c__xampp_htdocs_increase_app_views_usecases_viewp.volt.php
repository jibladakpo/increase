
<?php echo $this->tag->form(array('Usecases/viewP', 'method' => 'post', 'name' => 'frmObject', 'id' => 'frmObject')); ?>
<fieldset>

<div class="form-group">
<div class="panel-group">



<?php echo $usecase->getNom(); ?>
<?php echo $usecase->getPoids(); ?>
<?php echo $usecase->getAvancement(); ?>
<?php echo $usecase->getIdProjet(); ?>

</div>
<div class="form-group">
	<a class="btn btn-default cancel" href="<?php echo $this->url->get('Usecases'); ?>" data-ajax="<?php echo $baseHref . '/index'; ?>">Retour</a>
</div>
</fieldset>
</form>

