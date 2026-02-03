<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserTypeController extends Controller
{
    public function index()
    {
        $subtitle = "User Type List";
        $metatitle = "User Type List";
        $usertypes = Role::paginate(10);
        return view('admin.userType.index', compact('subtitle', 'metatitle', 'usertypes'));
    }

    public function create()
    {
        $subtitle = "Create User Type";
        $metatitle = "Create User Type";
        $permissions = Permission::get();
        return view('admin.userType.create', compact('subtitle', 'metatitle', 'permissions'));
    }

    public function store(Request $request)
    {
        $role = Role::create(['name' => $request->user_type]);
        // Attach permissions to the role
        if ($request->has('permissions')) {
            $role->syncPermissions($request->permissions);
        }
        return redirect()->route('user-type.index')->with('success', 'Role created successfully!');
    }

    public function edit($id)
    {
        $subtitle = "Edit User Type";
        $metatitle = "Edit User Type";
        $role = Role::find($id);
        $permissions = Permission::get();
        $permissionNames = $role->permissions->pluck('name')->toArray();
        return view('admin.userType.edit', compact('subtitle', 'metatitle', 'permissions', 'role', 'permissionNames'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'user_type' => 'required|string|max:255',
            'permissions' => 'nullable|array',
        ]);

        $role = Role::findById($id);

        // Update role name
        $role->name = $request->user_type;
        $role->save();

        // Update role permissions
        if ($request->has('permissions')) {
            $role->syncPermissions($request->permissions); // ✅ CORRECT
        } else {
            $role->syncPermissions([]); // remove all permissions if none selected
        }

        return redirect()->route('user-type.index')->with('success', 'Role updated successfully');
    }
}
