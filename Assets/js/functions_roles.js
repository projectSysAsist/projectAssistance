
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

	
		var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObjext('Microsoft.XMLHTTP');
		var ajaxUrl = base_url+'/Roles/setRol';//envia por metodo post a la url /Roles/setRoles
		var formData = new FormData (formRol);
		request.open("POST",ajaxUrl,true);
		request.send (formData);
		request.onreadystatechange= function(){


	
			if (request.readyState == 4 && request.status == 200){
					
					
				var objData = JSON.parse(request.responseText);

				if (objData.status)//valida cada valor de cada posicion
				{
					$('#modalFormRol').modal("hide");
					formRol.reset();
					swal("Roles de usuario", objData.msg, "success");
					tableRoles.api().ajax.reload(function(){
						
					});
					
				}else{
					swal("Error", objData.msg, "error");
				}

			
			}
		}
	}



});

$('#tableRoles').DataTable();

function openModal() {

	document.querySelector('#idRol').value="";
	document.querySelector('.modal-header').classList.replace("headerUpdate","headerRegister");
	document.querySelector('#btnActionForm').classList.replace("btn-info","btn-primary");
	document.querySelector('#btnText').innerHTML ="Guardar";
	document.querySelector('#titleModal').innerHTML ="Nuevo Rol";
	document.querySelector('#formRol').reset();
	$('#modalFormRol').modal('show');
	
}

window.addEventListener('click', function() {
	  fntEditRol();
}, false);

function fntEditRol(){
	var btnEditRol = document.querySelectorAll(".btnEditRol");
	btnEditRol.forEach(function(btnEditRol){
		btnEditRol.addEventListener('click', function(){

			document.querySelector('#titleModal').innerHTML ="Actualizar Rol";
			document.querySelector('.modal-header').classList.replace("headerRegister","headerUpdate");
			document.querySelector('#btnActionForm').classList.replace("btn-primary","btn-info");
			document.querySelector('#btnText').innerHTML ="Actualizar";


			$('#modalFormRol').modal('show');
			

			});
		});
	}