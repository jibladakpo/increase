{{ form("Projects/viewP", "method": "post", "name":"frmObject", "id":"frmObject") }}
<fieldset>
<legend>Projet {{project.getNom()}} </legend>

<div class="form-group">
	<div>Description: {{project.getDescription()}}</div>
	<div>Date de Lancement: {{project.getDateLancement()}}</div>
	<div>Date de fin prévue: {{project.getDateFinPrevue()}}</div>
</div>
<div class="form-group">
	<a class="btn btn-default cancel" href="{{url.get("Projects")}}" data-ajax="{{ baseHref ~ "/index"}}">Retour</a>
</div>
</fieldset>
</form>

