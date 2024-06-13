<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Exports\PermissionExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PermissionImport;

class RoleController extends Controller
{ 
    public function AllPermission(){
        $permissions = Permission::all();
        return view('admin.backend.pages.permission.all_permission',compact('permissions'));
    }
    //End Method
    public function AddPermission(){
        return view('admin.backend.pages.permission.add_permission');
    }
     //End Method

    public function StorePermission(Request $request){
        Permission::create([
            'name' => $request->name,
            'group_name' => $request->group_name,
            'guard_name' => 'admin'
        ]);

        $notification = array(
            'message' => 'Permission Created Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.permission')->with($notification);
    }
      //End Method

    public function EditPermission($id){
        $permission = Permission::find($id);
        return view('admin.backend.pages.permission.edit_permission',compact('permission'));
    }  
      //End Method

      public function UpdatePermission(Request $request){
        $per_id = $request->id;

        Permission::find($per_id)->update([
            'name' => $request->name,
            'group_name' => $request->group_name, 
        ]);

        $notification = array(
            'message' => 'Permission Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.permission')->with($notification);
    }
      //End Method

    public function DeletePermission($id){

        Permission::find($id)->delete();

        $notification = array(
            'message' => 'Permission Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
     //End Method

     public function ImportPermission(){
        return view('admin.backend.pages.permission.import_permission');
     }
       //End Method

    public function Export(){
        return Excel::download(new PermissionExport, 'permission.xlsx');
    }
     //End Method
    
    public function Import(Request $request){

        Excel::import(new PermissionImport, $request->file('import_file'));

        $notification = array(
            'message' => 'Permission Imported Successfully',
            'alert-type' => 'success'
        ); 
        return redirect()->back()->with($notification);
    }
    //End Method

    public function AllRoles(){
        $roles = Role::all();
        return view('admin.backend.pages.role.all_roles',compact('roles'));
    }
    //End Method

    public function AddRoles(){
        return view('admin.backend.pages.role.add_roles');
    }
        //End Method

    public function StoreRoles(Request $request){
       
        Role::create([
            'name' => $request->name,
            'guard_name' => 'admin'
        ]);

        $notification = array(
            'message' => 'Role Creted Successfully',
            'alert-type' => 'success'
        ); 
        return redirect()->route('all.roles')->with($notification);

    }
     //End Method

     public function EditRoles($id){
        
        $roles = Role::find($id);
        return view('admin.backend.pages.role.edit_roles',compact('roles'));

     }
      //End Method

      public function UpdateRoles(Request $request){
       $role_id = $request->id;

        Role::find($role_id)->update([
            'name' => $request->name 
        ]);

        $notification = array(
            'message' => 'Role Updated Successfully',
            'alert-type' => 'success'
        ); 
        return redirect()->route('all.roles')->with($notification);

    }
     //End Method

     public function DeleteRoles($id){

        Role::find($id)->delete();
        $notification = array(
            'message' => 'Role Deleted Successfully',
            'alert-type' => 'success'
        ); 
        return redirect()->back()->with($notification);
     }
      //End Method



}
