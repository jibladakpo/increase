
{{ form("Projects/viewP", "method": "post", "name":"frmObject", "id":"frmObject") }}
<fieldset>
<legend>Projet {{project.getNom()}} </legend>

<img src={{project.getImage()}} />
<div class="form-group">
<div class="btn btn-success"><span >&nbsp;
					Client: {{project.getClient()}}</span>
	</div>
	
<div class="alert alert-info">Description: </div>
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
					{{project.getDateFinPrevue()}}	
				</div>  
			</div>
			
</div>
<div class="form-group">
	<a class="btn btn-default cancel" href="{{url.get("Projects")}}" data-ajax="{{ baseHref ~ "/index"}}">Retour</a>
</div>
</fieldset>
</form>

