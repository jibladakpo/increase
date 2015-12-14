
<?php echo $this->tag->form(array('Usecases/viewP', 'method' => 'post', 'name' => 'frmObject', 'id' => 'frmObject')); ?>
<fieldset>
<legend>Usecase <?php echo $usecase->getNom(); ?> </legend>
<div class="form-group">
<div class="panel-group">
<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="<?php echo $usecase->getAvancement(); ?>"
  aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $usecase->getAvancement(); ?>%">
    <?php echo $usecase->getAvancement(); ?>% Complete
  </div>
<br>
<br>

<div class="alert alert-info">Projet:  </div>
				<div class="panel-body"><span >&nbsp;
						<?php echo $usecase->getProjet(); ?>	
				</div> 

<div class="alert alert-info">Développeur en charge:  </div>
				<div class="panel-body"><span class="glyphicon glyphicon-user">&nbsp;
						<?php echo $usecase->getUser(); ?>	
				</div> 
				

<div class="alert alert-info">Poids:  </div>
				<div class="panel-body"><span >&nbsp;
						<?php echo $usecase->getPoids(); ?>	
				</div> 

</div>
<div class="form-group">
	<a class="btn btn-default cancel" href="<?php echo $this->url->get('Usecases'); ?>" data-ajax="<?php echo $baseHref . '/index'; ?>">Retour</a>
</div>
</fieldset>
</form>

