{{ form("Usecases/update", "method": "post", "name":"frmObject", "id":"frmObject") }}
<fieldset>
<legend>Ajouter/Modifier un usecase</legend>
<div class="form-group">

	<label>Code:</label>
	<input type="text" name="code" id="code" value="{{usecase.getCode()}}" placeholder="Saisir un code" class="form-control">
	<label>Nom du Usecase:</label>
	<input type="text" name="nom" id="nom" value="{{usecase.getNom()}}" placeholder="Entrez le nom du projet" class="form-control">

	<label>Nom du Projet:</label>
		<select name="idProjet" id="projet" class="form-control">
		{% for project in projet %}
    	<option value="{{project.getId()}}">{{project.getNom()}}</option>{% endfor%}
    </select>
	
	<label>Avancement:</label>
	<input type="number" name="avancement" id="avancement" value="{{usecase.getAvancement()}}" placeholder="Entrez un pourcentage" class="form-control">
	
	<label>Nom du développeur:</label>
		<select name="idDev" id="user" class="form-control">
		{% for user in user %}
    	<option value="{{user.getId()}}">{{user.getIdentite()}}</option>{% endfor%}
    </select>
	
	<label>Poids:</label>
	<input type="number" name="poids" id="poids" value="{{usecase.getPoids()}}" placeholder="Entrez un poids" class="form-control">

</div>
<div class="form-group">
	<input type="submit" value="Valider" class="btn btn-default validate">
	<a class="btn btn-default cancel" href="{{url.get("Usecases")}}" data-ajax="{{ baseHref ~ "/index"}}">Annuler</a>
</div>
</fieldset>
</form>