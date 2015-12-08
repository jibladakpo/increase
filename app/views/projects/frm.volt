{{ form("Projects/update", "method": "post", "name":"frmObject", "id":"frmObject") }}
<fieldset>
<legend>Ajouter/modifier un projet</legend>

<div class="form-group">
	
	<input type="hidden" name="id" id="id" value="{{project.getId()}}">
	<label class="control-label">Select File</label>
<input name="image" id="image" type="file" class="file">
	<label>Nom du projet:</label>
	<input type="text" name="nom" id="nom" value="{{project.getNom()}}" placeholder="Entrez le nom du projet" class="form-control">
	<label>Description:</label>
	<textarea name="description" id="description" class="form-control"> {{project.getDescription()}}</textarea>

	<label>Date de Lancement:</label>
	<input type="date" name="dateLancement" id="dateLancement" value="{{project.getdateLancement()}}" placeholder="Entrez la date du lancement" class="form-control">

	<label>Date de fin prévue:</label>
	<input type="date" name="dateFinPrevue" id="dateFinPrevue" value="{{project.getdateFinPrevue()}}" placeholder="Entrez la date de fin prévue" class="form-control">

</div>
<div class="form-group">
	<input type="submit" value="Valider" class="btn btn-default validate">
	<a class="btn btn-default cancel" href="{{url.get("Projects")}}" data-ajax="{{ baseHref ~ "/index"}}">Annuler</a>
</div>
</fieldset>
</form>
