<div class="form-group">
	<div class="alert alert-success"><span class="glyphicon glyphicon-user">&nbsp;Utilisateur {{user.getIdentite()}}</div>
		
		<div class="jumbotron">
		  		
				<div class="alert alert-info">Role: {{user.getRole()}}</div>
		  		<p><a class="btn btn-primary btn-lg" href="#" role="button">Mes projets</a></p>
		</div>

</div>


<div class="form-group">
	<a class="btn btn-default cancel" href="{{url.get("users")}}" data-ajax="{{ baseHref ~ "/index"}}">Retour</a>
</div>


