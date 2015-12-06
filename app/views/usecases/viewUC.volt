
{{ form("Usecases/viewP", "method": "post", "name":"frmObject", "id":"frmObject") }}
<fieldset>
<legend>Usecase {{usecase.getNom()}} </legend>
<div class="form-group">
<div class="panel-group">
<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="{{usecase.getAvancement()}}"
  aria-valuemin="0" aria-valuemax="100" style="width:{{usecase.getAvancement()}}%">
    {{usecase.getAvancement()}}% Complete
  </div>
<br>
<br>

<div class="alert alert-info">Projet:  </div>
				<div class="panel-body"><span >&nbsp;
						{{usecase.getProjet()}}	
				</div> 

<div class="alert alert-info">Développeur en charge:  </div>
				<div class="panel-body"><span class="glyphicon glyphicon-user">&nbsp;
						{{usecase.getUser()}}	
				</div> 

<div class="alert alert-info">Poids:  </div>
				<div class="panel-body"><span >&nbsp;
						{{usecase.getPoids()}}	
				</div> 

</div>
<div class="form-group">
	<a class="btn btn-default cancel" href="{{url.get("Usecases")}}" data-ajax="{{ baseHref ~ "/index"}}">Retour</a>
</div>
</fieldset>
</form>

