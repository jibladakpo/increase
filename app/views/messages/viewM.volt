{{ form("Messages/viewM", "method": "post", "name":"frmObject", "id":"frmObject") }}
<fieldset>
<legend>Objet {{message.getObjet()}} </legend>

<div class="form-group">
	<div>Reçu le: {{message.getDate()}}</div>
	<div>Message: {{message.getContent()}}</div>
</div>
<div class="form-group">
	<a class="btn btn-default cancel" href="{{url.get("Messages")}}" data-ajax="{{ baseHref ~ "/index"}}">Retour</a>
</div>
</fieldset>
</form>

