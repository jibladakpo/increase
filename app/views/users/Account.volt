<div class="form-group">

		<div class="panel-group">
			<div class="panel panel-success">
			
				<div class="panel-heading"><span class="glyphicon glyphicon-user">&nbsp;	
					Utilisateur {{user.getIdentite()}}
				</div>
					<div class="alert alert-info">Description: {{user.getRole()}}</div>
				<div class="panel-body">
							
				</div>  
				
			</div>
		</div>
</div>


<div class="form-group">
	<a class="btn btn-default cancel" href="{{url.get("users")}}" data-ajax="{{ baseHref ~ "/index"}}">Retour</a>
</div>

