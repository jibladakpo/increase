{{ form("Taches/viewT", "method": "post", "name":"frmObject", "id":"frmObject") }}
<fieldset>
<legend>Projet {{tache.getLibelle()}} </legend>

<div class="form-group">
	<div>Description: {{tache.getDate()}}</div>
	<div>Date de Lancement: {{tache.getAvancement()}}</div>
	
</div>
<div class="form-group">
	<a class="btn btn-default cancel" href="{{url.get("Projects")}}" data-ajax="{{ baseHref ~ "/index"}}">Retour</a>
</div>
</fieldset>
</form>