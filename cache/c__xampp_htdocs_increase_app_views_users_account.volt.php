<div class="form-group">
	<div class="alert alert-success"><span class="glyphicon glyphicon-user">&nbsp;Utilisateur <?php echo $user->getIdentite(); ?></div>
		
		<div class="jumbotron">
		  		
				<div class="alert alert-info">Role: <?php echo $user->getRole(); ?></div>
		  		<p><a class="btn btn-primary btn-lg" href="#" role="button">Mes projets</a></p>
		</div>
		
		<div class="panel-group">
			<div class="panel panel-success">
			
				<div class="panel-heading"><span class="glyphicon glyphicon-user">&nbsp;	
					Utilisateur <?php echo $user->getIdentite(); ?>
				</div>
					<div class="alert alert-info">Role: <?php echo $user->getRole(); ?></div>
				<div class="panel-body">
							
				</div>  
				
			</div>
		</div>
</div>


<div class="form-group">
	<a class="btn btn-default cancel" href="<?php echo $this->url->get('users'); ?>" data-ajax="<?php echo $baseHref . '/index'; ?>">Retour</a>
</div>


