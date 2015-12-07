{{ form("Projects/update", "method": "post", "name":"frmObject", "id":"frmObject") }}
<fieldset>
<legend>Ajouter/modifier un projet</legend>

<div class="form-group">
	
	<input type="hidden" name="id" id="id" value="{{project.getId()}}">
	<div>Nom du projet:</div>
	<input type="text" name="nom" id="nom" value="{{project.getNom()}}" placeholder="Entrez le nom du projet" class="form-control">
	<br>
	<div>Description:</div>
	<textarea name="description" id="description" class="form-control"> {{project.getDescription()}}</textarea>
	<br>
	<div>Date de Lancement:</div>
	<input type="date" name="dateLancement" id="dateLancement" value="{{project.getdateLancement()}}" placeholder="Entrez la date du lancement" class="form-control">
	<br>
	<div>Date de fin prévue:</div>
	<input type="date" name="dateFinPrevue" id="dateFinPrevue" value="{{project.getdateFinPrevue()}}" placeholder="Entrez la date de fin prévue" class="form-control">

</div>
<div class="form-group">
	<input type="submit" value="Valider" class="btn btn-default validate">
	<a class="btn btn-default cancel" href="{{url.get("Projects")}}" data-ajax="{{ baseHref ~ "/index"}}">Annuler</a>
</div>
</fieldset>
</form>
