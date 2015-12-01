<div class="form-group">

		<div class="panel-group">
			<div class="panel panel-success">
			
				<div class="panel-heading"><span class="glyphicon glyphicon-user">&nbsp;	
					Projet {{user.getidentite()}}
				</div>
					<div class="alert alert-info">Description: {{user.getMail()}}</div>
				<div class="panel-body">
							
				</div>  
				
			</div>
		</div>
</div>


<div class="form-group">
	<a class="btn btn-default cancel" href="{{url.get("user")}}" data-ajax="{{ baseHref ~ "/index"}}">Retour</a>
</div>


