{{ form("Taches/viewT", "method": "post", "name":"frmObject", "id":"frmObject") }}
<fieldset>
<legend>Tâche {{tache.getLibelle()}} </legend>

<div class="form-group">
	<div>Date: {{tache.getDate()}}</div>
	<div class="progress">
  <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="{{tache.getAvancement()}}"
  aria-valuemin="0" aria-valuemax="100" style="width:{{tache.getAvancement()}}%">
    {{tache.getAvancement()}}% Complete
  </div>
</div>
</div>

	
</div>
<div class="form-group">
	<a class="btn btn-default cancel" href="{{url.get("Taches")}}" data-ajax="{{ baseHref ~ "/index"}}">Retour</a>
</div>
</fieldset>
</form>