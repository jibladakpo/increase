{{ form("Messages/update", "method": "post", "name":"frmObject", "id":"frmObject") }}
<fieldset>
<legend>Ajouter/modifier un message</legend>
<div class="alert alert-info">Message : {{message.toString()}}</div>
<div class="form-group">
	<input type="hidden" name="id" id="id" value="{{message.getId()}}">
	
	<label>Objet</label>
	<input type="text" name="objet" id="objet" value="{{message.getObjet()}}" placeholder="Entrez l'objet" class="form-control">
	
	<label>Message</label>
	<textarea name="content" id="content" class="form-control" placeholder="Saisissez votre message">{{message.getContent()}}</textarea>

	<label>Projet</label>
	<select name="idProjet" id="projet" class="form-control" value="{{message.getProjet().getId()}}">
		{% for project in projets %}
			{%if project.getId()==message.getProjet().getId()%}
	    		<option selected value="{{project.getId()}}">{{project.getNom()}}</option>
    		{%else%}
    			<option value="{{project.getId()}}">{{project.getNom()}}</option>
    		{%endif%}
    	{% endfor%}
    </select>
    
    <label>Emetteur</label>
    <input type="hidden" name="idUser" value="{{user.getId()}}">
	<div class="form-control" disabled>{{user.getIdentite()}}</div>
	
	<label>Date d'envoi</label>
	<input class="form-control" disabled type="hidden" name="date" id="date" value="message.getdate()">
	<div class="form-control" disabled>{{message.getdate('d-m-Y H:i:s')}}</div>

	
</div>
<div class="form-group">
	<input type="submit" value="Valider" class="btn btn-default validate">
	<a class="btn btn-default cancel" href="{{url.get("Messages")}}" data-ajax="{{ baseHref ~ "/index"}}">Annuler</a>
</div>
</fieldset>
</form>
{{ script_foot }}