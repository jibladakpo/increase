{{ form("Messages/update", "method": "post", "name":"frmObject", "id":"frmObject") }}
<fieldset>
<legend>Ajouter/modifier un message</legend>
<div class="alert alert-info">Message : {{message.toString()}}</div>
<div class="form-group">
	<input type="hidden" name="id" id="id" value="{{message.getId()}}">
	<input type="text" name="objet" id="objet" value="{{message.getObjet()}}" placeholder="Entrez l'objet" class="form-control">
	<textarea name="content" id="content" class="form-control" placeholder="Saisissez votre message">{{message.getContent()}}</textarea>
	<input type="text" name="date" id="date" value="{{message.getdate()}}">
</div>
<div class="form-group">
	<input type="submit" value="Valider" class="btn btn-default validate">
	<a class="btn btn-default cancel" href="{{url.get("Messages")}}" data-ajax="{{ baseHref ~ "/index"}}">Annuler</a>
</div>
</fieldset>
</form>
{{ script_foot }}