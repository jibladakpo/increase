
<div class="form-group">

		<div class="panel-group">
			<div class="panel panel-default">
			
				<div class="panel-heading"><span class="glyphicon glyphicon-user">&nbsp;	
					<?php echo $message->getUser(); ?></span>&nbsp;Reçu le : <?php echo $message->getDate(); ?>	
				</div>
					<div class="alert alert-info">Objet : <?php echo $message->getObjet(); ?> </div>
				<div class="panel-body"><span class="glyphicon glyphicon-envelope">&nbsp;
					<?php echo $message->getContent(); ?>	
				</div>  
				
			</div>
		</div>
		
				<div class="btn btn-success"><span class="glyphicon glyphicon-briefcase">&nbsp;
					<?php echo $message->getProjet(); ?></span>
				</div>
</div>

<div class="form-group">
	<a class="btn btn-default cancel" href="<?php echo $this->url->get('Messages'); ?>" data-ajax="<?php echo $baseHref . '/index'; ?>">Retour</a>
</div>


