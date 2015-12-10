{{msg}}
<table class='table table-condensed table-hover'>
	<thead><tr><th colspan='3'>{{model}}</th></tr></thead>
		<tbody>
		{% for object in objects %}
			<tr data-ajax="{{object.getId()}}">
			<td>{{object.toString()}}</td>
			<td class='td-center'><a class='btn btn-primary btn-xs update' href='{{url.get(baseHref~"/frmUpdate/"~object.getId())}}' data-ajax="{{ baseHref ~ "/frmUpdate/" ~ object.getId() }}"><span class='glyphicon glyphicon-edit' aria-hidden='true'></span></a></td>
			<td class='td-center'><a class='btn btn-warning btn-xs delete' href='{{url.get(baseHref~"/delete/"~object.getId())}}' data-ajax="{{ baseHref ~ "/delete/" ~ object.getId() }}"><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a></td>
			</tr>
		{% endfor %}
		</tbody>
</table>
<a class='btn btn-primary add' href='{{url.get(baseHref~"/frm")}}' data-ajax="{{ baseHref ~ "/frm/"}}">Ajouter...</a>
{% if script_foot is defined %}
    {{ script_foot }}
{% endif %}