<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Permission;
use App\Role;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    //
    
	public function getRoleView(){
		
		$permissions = Permission::all();
		$roles = Role::all();
		return view("Role",compact("permissions","roles"));
	}
	
	public function createRole(Request $request){
 		$role = new Role();
 		$role->name = $request['emriRolit'];
 		$role->description = $request['pershkrimi'];
 		$permissions = $request['jsonString'];
 		$permissionsArray = json_decode($permissions);
 		
 		$role->save();
  		$role->attachPermissions($permissionsArray);
  		if($role->save()){
  			return Response::json(['message'=>'Roli u shtua','roli'=>$role],200);
  		}
	}
	
	
	public function getRoleData(Request $request){
		$id = $request['idR'];
 		$roli = Role::find($id);
 		$permissions = Permission::all();
 		$role_permissions = $roli->perms()->pluck('id','id');
 		return Response::json(['roli' => $roli,'role_permissions'=>$role_permissions],200);
	}
	
	public function editRole(Request $request){
 		$id = $request['id'];
 		$roli = Role::find($id);
 		$roli->name = $request['editemriRolit'];
 		$roli->description = $request['editpershkrimi'];
 		$roli->save();
		
 		DB::table('permission_role')->where('role_id',$id)->delete();
		
 		$permissions = $request['jsonString'];
 		$permissionsArray = json_decode($permissions);
 		$roli->attachPermissions($permissionsArray);
 		
 		return Response::json(['roli'=>$roli],200);
	}
	
	public function deleteRole(Request $request){
		$id = $request['roleId'];
		Role::whereId($id)->delete($id);
	}
	
}
