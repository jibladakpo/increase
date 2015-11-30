{{ form("Taches/viewT", "method": "post", "name":"frmObject", "id":"frmObject") }}
<fieldset>
<legend>Projet {{tache.getLibelle()}} </legend>

<div class="form-group">
	<div>Date: {{tache.getDate()}}</div>
	<div>Avancement: {{tache.getAvancement()}}%</div>
	
</div>
<div class="form-group">
	<a class="btn btn-default cancel" href="{{url.get("Taches")}}" data-ajax="{{ baseHref ~ "/index"}}">Retour</a>
</div>
</fieldset>
</form>