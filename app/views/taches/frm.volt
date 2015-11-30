{{ form("Taches/update", "method": "post", "name":"frmObject", "id":"frmObject") }}
<fieldset>
<legend>Ajouter/modifier une tâche</legend>
<div class="form-group">
	<input type="hidden" name="id" id="id" value="{{tache.getId()}}">
	<input type="text" name="nom" id="libelle" value="{{tache.getLibelle()}}" placeholder="Entrez le nom du projet" class="form-control">
	<input type="date" name="date" id="date" value="{{tache.getDate()}}" placeholder="Entrez la date du lancement" class="form-control">
	<input type="text" name="avancement" id="avancement" value="{{tache.getAvancement()}}" placeholder="Entrez un pourcentage" class="form-control">

</div>
<div class="form-group">
	<input type="submit" value="Valider" class="btn btn-default validate">
	<a class="btn btn-default cancel" href="{{url.get("Taches")}}" data-ajax="{{ baseHref ~ "/index"}}">Annuler</a>
</div>
</fieldset>
</form>