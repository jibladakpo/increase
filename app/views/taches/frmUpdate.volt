{{ form("Taches/update", "method": "post", "name":"frmObject", "id":"frmObject") }}
<fieldset>
<legend>Ajouter/Modifier une tâche</legend>
<div class="form-group">
	<input type="hidden" name="id" id="id" value="{{tache.getId()}}">
	<label>Nom de la tâche:</label>
	<input type="text" name="libelle" id="libelle" value="{{tache.getLibelle()}}" placeholder="Entrez le nom du projet" class="form-control">
	
	<label>Date:</label>
	<input type="date" name="date" id="date" value="{{tache.getDate()}}" placeholder="Date" class="form-control"</div>
	
	<label>Avancement:</label>
	<input type="number" name="avancement" id="avancement" value="{{tache.getAvancement()}}" placeholder="Entrez un pourcentage" class="form-control">
	
	<label>Usecase</label>
	<select name="codeUseCase" id="usecase" class="form-control">
		{% for usecase in usecase %}
    	<option value="{{usecase.getCode()}}">{{usecase.getNom()}}</option>{% endfor%}
    </select>

</div>
<div class="form-group">
	<input type="submit" value="Valider" class="btn btn-default validate">
	<a class="btn btn-default cancel" href="{{url.get("Taches")}}" data-ajax="{{ baseHref ~ "/index"}}">Annuler</a>
</div>
</fieldset>
</form>