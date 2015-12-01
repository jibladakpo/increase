
<div class="form-group">

		<div class="panel-group">
			<div class="panel panel-default">
			
				<div class="panel-heading"><span class="glyphicon glyphicon-user">&nbsp;	
					{{message.getUser()}}</span>&nbsp;Reçu le : {{message.getDate()}}	
				</div>
					<div class="alert alert-info">Objet : {{message.getObjet()}} </div>
				<div class="panel-body"><span class="glyphicon glyphicon-envelope">&nbsp;
					{{message.getContent()}}	
				</div>  
				
			</div>
		</div>
		
				<div class="btn btn-success"><span class="glyphicon glyphicon-briefcase">&nbsp;
					{{message.getProjet()}}</span>
				</div>
</div>

<div class="form-group">
	<a class="btn btn-default cancel" href="{{url.get("Messages")}}" data-ajax="{{ baseHref ~ "/index"}}">Retour</a>
</div>


