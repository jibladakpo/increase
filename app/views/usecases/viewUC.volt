
{{ form("Usecases/viewP", "method": "post", "name":"frmObject", "id":"frmObject") }}
<fieldset>

<div class="form-group">
<div class="panel-group">



{{usecase.getNom()}}
{{usecase.getPoids()}}
{{usecase.getAvancement()}}
{{usecase.getIdProjet()}}

</div>
<div class="form-group">
	<a class="btn btn-default cancel" href="{{url.get("Usecases")}}" data-ajax="{{ baseHref ~ "/index"}}">Retour</a>
</div>
</fieldset>
</form>

