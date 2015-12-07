{{ form("Taches/update", "method": "post", "name":"frmObject", "id":"frmObject") }}
<fieldset>
<legend>Ajouter/Modifier une tâche</legend>
<div class="form-group">
	<div>Nom de la tâche:</div>
	<input type="text" name="nom" id="libelle" value="{{tache.getLibelle()}}" placeholder="Entrez le nom du projet" class="form-control">
	<br>
	<div>Date:</div>
	<input type="date" name="date" id="date" value="{{tache.getDate()}}" placeholder="Date" class="form-control"</div>
	<br>
	<div>Avancement:</div>
	<input type="number" name="avancement" id="avancement" value="{{tache.getAvancement()}}" placeholder="Entrez un pourcentage" class="form-control">
	<br>
	<div>Usecase:</div>
	<select type="text" name="usecase" id="usecase"  placeholder="Sélectionner un Usecase" class="form-control"><option {{tache.getUseCase()}}>{{tache.getUseCase()}}</div></option> </select>

</div>
<div class="form-group">
	<input type="submit" value="Valider" class="btn btn-default validate">
	<a class="btn btn-default cancel" href="{{url.get("Taches")}}" data-ajax="{{ baseHref ~ "/index"}}">Annuler</a>
</div>
</fieldset>
</form>