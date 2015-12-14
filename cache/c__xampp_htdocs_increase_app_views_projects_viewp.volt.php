
<?php echo $this->tag->form(array('Projects/viewP', 'method' => 'post', 'name' => 'frmObject', 'id' => 'frmObject')); ?>
<fieldset>
<legend>Projet <?php echo $project->getNom(); ?> </legend>
<div class="form-group">
<div class="panel-group">
<img src="http://127.0.0.1/increase/public/img/<?php echo $project->getImage(); ?>"/>
<br>
<br>
<div class="alert alert-success"> <span class="glyphicon glyphicon-tower"> Client: <?php echo $project->getClient(); ?> </div>

	
<div class="alert alert-info">Description:  </div>
				<div class="panel-body"><span >&nbsp;
						<?php echo $project->getDescription(); ?>	
				</div>  
				
			</div>
<div class="alert alert-info">Date de lancement: </div>
			<div class="panel-body"><span >&nbsp;
					<?php echo $project->getDateLancement(); ?>	
			</div>  
				
</div><div class="alert alert-info">Date de fin prévue: </div>
			<div class="panel-body"><span >&nbsp;
					<?php echo $project->getDateFinPrevue(); ?>	
				</div>  
			</div>
				
<div class="alert alert-warning">Développeur(s): </div>
			<div class="panel-body">
			
		<?php foreach ($devs as $project) { ?>
				<div name="idDev" class="form-control"><span class="glyphicon glyphicon-user"> <?php echo $project->getIdentite(); ?></div>
			<?php } ?>
				 
			</div>
			
</div>

<div class="alert alert-warning">Taches: </div>
<div class="panel-body">
			<?php foreach ($taches as $project) { ?>
					<div name="usecase"  class="form-control"> 
								<?php echo $usecase->getNom(); ?> - <?php echo $tache->getAvancement(); ?>		
					</div>					
	    	<?php } ?>
</div>    	
<div class="alert alert-danger">Messages: </div>
<div class="panel-body">
		
		<?php foreach ($message as $message) { ?>
				<div name="message" id="message" class="form-control"> 
					<?php echo $message->getUser(); ?> - <?php echo $message->getContent(); ?> - <?php echo $message->getDate(); ?>		
				</div>					
    	<?php } ?>
			
			
    				 
    	
</div>

</div>
	<a class="btn btn-default cancel" href="<?php echo $this->url->get('Projects'); ?>" data-ajax="<?php echo $baseHref . '/index'; ?>">Retour</a>
</div>
</fieldset>
</form>

