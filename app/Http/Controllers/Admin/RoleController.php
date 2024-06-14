<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Exports\PermissionExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PermissionImport;
use App\Models\Admin;
use DB;
use Illuminate\Support\Facades\Hash;

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

      //////////////// Add Role Permission All Method /////////

    public function AddRolesPermission(){
        $roles = Role::all();
        $permissions = Permission::all();
        $permission_groups = Admin::getpermissionGroups();

        return view('admin.backend.pages.rolesetup.add_roles_permission',compact('roles','permissions','permission_groups'));
    }
     //End Method

    public function RolePermissionStore(Request $request){

        $data = array();
        $permissions = $request->permission;

        foreach ($permissions as $key => $item) {
           $data['role_id'] = $request->role_id;
           $data['permission_id'] = $item;

           DB::table('role_has_permissions')->insert($data);
        } //end foreach

        $notification = array(
            'message' => 'Role Permission Added Successfully',
            'alert-type' => 'success'
        ); 
        return redirect()->route('all.roles.permission')->with($notification);

    }
     //End Method

     public function AllRolesPermission(){
        $roles = Role::all();
        return view('admin.backend.pages.rolesetup.all_roles_permission',compact('roles'));
     }
      //End Method

      public function AdminEditRoles($id){
        $role = Role::find($id);
        $permissions = Permission::all();
        $permission_groups = Admin::getpermissionGroups();

        return view('admin.backend.pages.rolesetup.edit_roles_permission',compact('role','permissions','permission_groups'));
    }
     //End Method

     public function AdminRolesUpdate(Request $request, $id){

        $role = Role::find($id);
        $permissions = $request->permission;

        if (!empty($permissions)) {
           $permissionNames = Permission::whereIn('id',$permissions)->pluck('name')->toArray();
           $role->syncPermissions($permissionNames);
        }else {
            $role->$syncPermissions([]);
        }

        $notification = array(
            'message' => 'Role Permission Updated Successfully',
            'alert-type' => 'success'
        ); 
        return redirect()->route('all.roles.permission')->with($notification);

     }
     //End Method

     public function AdminDelectRoles($id){

        $role = Role::find($id);
        if (!is_null($role)) {
            $role->delete();
        }

        $notification = array(
            'message' => 'Role Permission Delected Successfully',
            'alert-type' => 'success'
        ); 
        return redirect()->back()->with($notification); 

     }
        //End Method

        ///////// Admin User All Method ////////

    public function AllAdmin(){
        $alladmin = Admin::latest()->get();
        return view('admin.backend.pages.admin.all_admin',compact('alladmin'));
    }
     //End Method

    public function AddAdmin(){
        $roles = Role::all();
        return view('admin.backend.pages.admin.add_admin',compact('roles'));
    }
     //End Method

    public function AdminStore(Request $request){

        $user = new Admin();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->password = Hash::make($request->password); 
        $user->role = 'admin';
        $user->status = '1';
        $user->save();

        if ($request->roles) {
           $role = Role::where('id',$request->roles)->where('guard_name','admin')->first();
           if ($role) {
            $user->assignRole($role->name);
           }
        }

        $notification = array(
            'message' => 'New Admin Inserted Successfully',
            'alert-type' => 'success'
        ); 
        return redirect()->route('all.admin')->with($notification); 

    }
     //End Method

     public function Editadmin($id){
        $admin = Admin::find($id);
        $roles = Role::all();
        return view('admin.backend.pages.admin.edit_admin',compact('roles','admin'));
    }
     //End Method

     public function AdminUpdate(Request $request , $id){

        $user = Admin::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address; 
        $user->role = 'admin';
        $user->status = '1';
        $user->save();

        $user->roles()->detach();
        if ($request->roles) {
           $role = Role::where('id',$request->roles)->where('guard_name','admin')->first();
           if ($role) {
            $user->assignRole($role->name);
           }
        }

        $notification = array(
            'message' => 'New Admin Updated Successfully',
            'alert-type' => 'success'
        ); 
        return redirect()->route('all.admin')->with($notification); 

    }
     //End Method

    public function DeleteAdmin($id){

        $admin = Admin::find($id);
        if (!is_null($admin )) {
            $admin->delete();
        }

        $notification = array(
            'message' => 'Admin Deleted Successfully',
            'alert-type' => 'success'
        ); 
        return redirect()->back()->with($notification); 

    }
    //End Method



}
