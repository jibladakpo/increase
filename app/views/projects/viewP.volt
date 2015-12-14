
{{ form("Projects/viewP", "method": "post", "name":"frmObject", "id":"frmObject") }}
<fieldset>
<legend>Projet {{project.getNom()}} </legend>
<div class="form-group">
<div class="panel-group">
<img src="http://127.0.0.1/increase/public/img/{{project.getImage()}}"/>
<br>
<br>
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
			
			
			
<div class="alert alert-warning">Développeur(s): </div>
			<div class="panel-body">
			
		{% for project in devs %}
				<div name="idDev" class="form-control"><span class="glyphicon glyphicon-user"> {{project.getIdentite()}}</div>
			{% endfor%}
				 
			</div>
			
</div>

<div class="alert alert-warning">Taches: </div>
<div class="panel-body">
			{% for project in taches %}
					<div name="usecase"  class="form-control"> 
								{{usecase.getNom()}} - {{tache.getAvancement()}}		
					</div>					
	    	{% endfor%}
</div>    	
<div class="alert alert-danger">Messages: </div>
<div class="panel-body">
		
		{% for message in message %}
				<div name="message" id="message" class="form-control"> 
					{{message.getUser()}} - {{message.getContent()}} - {{message.getDate()}}		
				</div>					
    	{% endfor%}
			
			
    				 
    	
</div>

</div>
<div class="form-group">
	<a class="btn btn-default cancel" href="{{url.get("Projects")}}" data-ajax="{{ baseHref ~ "/index"}}">Retour</a>
</div>
</fieldset>
</form>

