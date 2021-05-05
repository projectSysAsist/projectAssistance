
var tableRoles;

document.addEventListener('DOMContentLoaded', function(){

	tableRoles = $('#tableRoles').DataTable( {
		"aProcessing":true,
		"aSeverSide":true,
		"language":{
			"url":"//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
		},
		"ajax":{
			"url": ""+base_url+"/Roles/getRoles", "dataSrc":""
		},

        "columns": [
            { "data": "idrol" },
            { "data": "nombrerol" },
            { "data": "descripcion" },
            { "data": "status" },
            { "data": "Options" }
           
        ],
        "response":"true",
        "bDestroy":true,
        "iDisplayLength":10,
        "order":[[0,"desc"]]

	});

	//NUEVO ROL
	var formRol = document.querySelector("#formRol");
	formRol.onsubmit = function(e){
		e.preventDefault();

		var strNombre = document.querySelector('#txtNombre').value;
		var strDescripcion = document.querySelector('#txtDescripcion').value;
		var intStatus = document.querySelector('#listStatus').value;

		if (strNombre == '' || strDescripcion == '' || intStatus == '' ) 
		{

			swal("Atención", "Todos los campos son obligatorios.", "error");
			return false;
		}

	
		var request = () ? new XMLHttpRequest() : new ActiveXObjext('Microsoft.XMLHTTP');
		var ajaxUrl = base_url+'/Roles/setrol';
		var forData = new FormData (formRol);
		request.open("POST",ajaxUrl,true);
	}



});

$('#tableRoles').DataTable();

function openModal() {
	$('#modalFormRol').modal('show');
}