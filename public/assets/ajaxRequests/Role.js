$("#shtoRolin").on('click',function(){
	createRole();
});

$("#tabelaRoleve").on('click','.edit_role',function(){
	var id = $(this).attr('id');
	fillEditModal(id);
});

$("#editoRolin").on('click',function(){
	var id = $(this).val();
	editRole(id);
});

$("#tabelaRoleve").on('click','.delete_role',function(){
	var id = $(this).attr('id');

	deleteRole(id);
});


function createRole(){
	var emriRolit = $("#emriRolit").val();
	var pershkrimi = $("#pershkrimi").val();
	var selected_permissions = new Array();
	$('input[type = "checkbox"]:checked').each(function(){
		selected_permissions.push($(this).val());	
	});

	if(emriRolit.length == 0){
		$("#emriRolit").css({"border-color":"red"});
		return false;
	}else{
		$("#emriRolit").css({"border-color":"#d7dce5"});
	}
	
	if(pershkrimi.length == 0){
		
		$("#pershkrimi").css({"border-color":"red"});
		return false
	}else{
		$("#pershkrimi").css({"border-color":"#d7dce5"});
	}
	
	if(selected_permissions.length == 0){
		alert("Duhet te zgjedhni se paku nje leje");
		return false;
		
	}
	
	 $.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
		    }	
	});
	 
	 var jsonString =  JSON.stringify(selected_permissions);
	 
	  $.ajax({
		  url:'/createRole',
	      type:'POST',
		      data:{
		    	emriRolit:emriRolit,
		    	pershkrimi:pershkrimi,
		    	jsonString:jsonString
		      },
		      success:function(jsonObject){
		    	  var roli = jsonObject.roli;
		    	  $('#tabelaRoleve').append(
		    		'<tr id="'+roli.id+'" class="role_rows">'
		    		+'<th scope="row">'+roli.id +'</th>'
		    		+'<td>'+roli.name+'</td>'
		    		+'<td>'+roli.description+'</td>'
		    		+'<td><a href="#"  id="'+ roli.id+'" data-toggle="modal" data-target="#editRole" class="btn btn-green edit_role"><i class="ion ion-edit"></i></a>' 
		    		+' <a href="#"  id="'+ roli.id +'" class="btn btn-red edit_role"><i class="ion ion-ios-trash-outline"></i></a></td>'
		    		+'</tr>'
		    	  );
		      },
		      error:function(){
		    	  alert("Ky rol tashme egziston zgjedhni nje tjeter");
		      }
	    });
	  	 clearFields();
	  	 $('#largemodal').modal('hide');	  
}

function clearFields(){
	$("#emriRolit").val("");
	$("#pershkrimi").val("");
	$('input[type = "checkbox"]:checked').attr('checked', false);
}

function fillEditModal(id){
	var idR = id;
	var permission_id = $("#permis").val();
	
	$.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
		    }	
	});
	
	$.ajax({
		url:'/getRoleData',
		type:'POST',
		data:{
			idR:idR
		},
		success:function(jsonObject){
			var id = jsonObject.roli.id;
			var name = jsonObject.roli.name;
			var description = jsonObject.roli.description;
			$("#edit_emriRolit").val(name);
			$("#edit_pershkrimi").val(description);
			$('#editoRolin').val(id);
			var role_permissions = jsonObject.role_permissions;

			var arr = [];

			for(var x in role_permissions){
			  arr.push(role_permissions[x]);
			}
			
			$(".permis").each(function(){
				for(i = 0; i < arr.length; i++){
					if($(this).attr("id") == arr [i] ){
						$(this).prop('checked',true);
					}
				}
			});
		},
		
		error:function(){
			alert("error");
		}
	});
}

function editRole(id){
	var ide = id;
	var emriRolit = $("#edit_emriRolit").val();
	var pershkrimi = $("#edit_pershkrimi").val();
	var selected_permissions = new Array();
	$('input[type = "checkbox"]:checked').each(function(){
		selected_permissions.push($(this).attr('id'));	
	});
	
	var jsonString =  JSON.stringify(selected_permissions);
	
	if(emriRolit.length == 0){
		$("#edit_emriRolit").css({"border-color":"red"});
		return false;
	}else{
		$("#edit_emriRolit").css({"border-color":"#d7dce5"});
	}
	
	if(pershkrimi.length == 0){
		
		$("#edit_pershkrimi").css({"border-color":"red"});
		return false
	}else{
		$("#edit_pershkrimi").css({"border-color":"#d7dce5"});
	}
	
	if(selected_permissions.length == 0){
		alert("Duhet te zgjedhni se paku nje leje");
		return false;
		
	}
	
	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
	    }	
	});
	
	
$.ajax({
		  url:'/editRole',
	      type:'POST',
		      data:{
		    	  id:ide,
		    	  editemriRolit:emriRolit,
		    	  editpershkrimi:pershkrimi,
		    	  jsonString:jsonString
		      },
		      success:function(jsonObject){
		    	 var roli = jsonObject.roli;
		    	 
		    	 
		    	 $(".role_rows").each(function(){
		    		 if($(this).attr('id') == roli.id){
		    			$(this).replaceWith(
		    				'<tr id="'+roli.id+'" class="role_rows">'
		    		    	+'<th scope="row">'+roli.id +'</th>'
		    		    	+'<td>'+roli.name+'</td>'
		    		    	+'<td>'+roli.description+'</td>'
		    		    	+'<td><a href="#"  id="'+ roli.id+'" data-toggle="modal" data-target="#editRole" class="btn btn-green edit_role"><i class="ion ion-edit"></i></a>'
		    		    	+' <a href="#"  id="'+ roli.id +'" class="btn btn-red edit_role"><i class="ion ion-ios-trash-outline"></i></a></td>'
		    		    	+'</tr>'
		    			);
		    		 }
		    	 });
		    	 
		      },
		      error:function(){
		    	  alert("Error");
		      }
	    });
	
	 $('#editRole').modal('hide');	
}

function deleteRole(id){
	var roleId = id;
	
	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
	    }	
	});
	
	$.ajax({
		url:'/deleteRole',
		type:'POST',
			data:{
				roleId:roleId
			},
			success:function(){
				$(".role_rows").each(function(){
		    		 if($(this).attr('id') == roleId){
		    			$(this).remove();
		    		 }
		    	 });
			},
			error:function(){
				alert("Error");
			}
	});
}


	





