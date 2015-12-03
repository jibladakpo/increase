
{{ form("Projects/viewP", "method": "post", "name":"frmObject", "id":"frmObject") }}
<fieldset>
<legend>Projet {{project.getNom()}} </legend>
<div class="form-group">
<div class="panel-group">
<img src="http://127.0.0.1/increase/public/img/{{project.getImage()}}"/>
<div class="alert alert-success"> <span class="glyphicon glyphicon-tower"> Client: {{project.getClient()}} </div>

	
<div class="alert alert-info">Description:  </div>
				<div class="panel-body"><span >&nbsp;
						{{project.getDescription()}}	
				</div>  
				
			</div>
<div class="alert alert-info">Date de lancement: </div>
			<div class="panel-body"><span >&nbsp;
					{{project.getDateLancement()}}	
			</div>  
				
</div><div class="alert alert-info">Date de fin prévue: </div>
			<div class="panel-body"><span >&nbsp;
					{{project.getDateFinPrevue()}}	
				</div>  
			</div>
			
			
			
</div><div class="alert alert-warning">Equipe de développement: </div>
			<div class="panel-body"><span class="glyphicon glyphicon-user" >&nbsp;
					{{project.getIdDev()}}	
				</div>  
			</div>
			
</div>
<div class="form-group">
	<a class="btn btn-default cancel" href="{{url.get("Projects")}}" data-ajax="{{ baseHref ~ "/index"}}">Retour</a>
</div>
</fieldset>
</form>

