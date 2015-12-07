{{ form("Usecases/update", "method": "post", "name":"frmObject", "id":"frmObject") }}
<fieldset>
<legend>Ajouter/Modifier un usecase</legend>
<div class="form-group">

	<input type="hidden" name="id" id="id" value="{{usecase.getId()}}">
	<div>Nom du Usecase:</div>
	<input type="text" name="nom" id="nom" value="{{usecase.getNom()}}" placeholder="Entrez le nom du projet" class="form-control">
	<br>
	<div>Nom du Projet:</div>
		<input type="text" name="nom" id="nom" value="{{usecase.getProjet()}}" placeholder="Entrez le nom du projet" class="form-control">
	<br>
	<div>Avancement:</div>
	<input type="number" name="avancement" id="avancement" value="{{usecase.getAvancement()}}" placeholder="Entrez un pourcentage" class="form-control">
	<br>
	<div>Nom du développeur:</div>
		<select type="text" name="user" id="user"  placeholder="Sélectionner un développeur" class="form-control"><option {{usecase.getUser()}}>{{usecase.getUser()}}</div></option> </select>
	<br>
	<div>Poids:</div>
	<input type="number" name="poids" id="poids" value="{{usecase.getPoids()}}" placeholder="Entrez un poids" class="form-control">

</div>
<div class="form-group">
	<input type="submit" value="Valider" class="btn btn-default validate">
	<a class="btn btn-default cancel" href="{{url.get("Usecases")}}" data-ajax="{{ baseHref ~ "/index"}}">Annuler</a>
</div>
</fieldset>
</form>