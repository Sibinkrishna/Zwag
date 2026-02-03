<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;

class AdminListController extends Controller
{
    public function index(){
        $subtitle="Admin List";
        $metatitle="Admin List";
        $users=User::paginate(10);
        return view('admin.adminList.index',compact('subtitle','metatitle','users'));
    }

    public function create(){
        $subtitle="Admin Registration";
        $metatitle="Admin Registration";
        $roles = Role::get();
        return view('admin.adminList.create',compact('subtitle','metatitle','roles'));
    }

    public function store(Request $request){
        $request->validate([
            'user_name'      => 'required|string|max:255|unique:users,name',
            'user_email'     => 'required|email|unique:users,email',
            'password'       => 'required|min:6',
            'user_type'      => 'required',
            'mobile_number'  => 'required|digits_between:8,15',
            'status'         => 'required|in:active,inactive',
        ]);

        $user=User::create([
            'name'     => $request->user_name,
            'email'    => $request->user_email,
            'password'      => Hash::make($request->password),
            'mobile'        => $request->mobile_number,
            'status'        => ($request->status=="active")?1:0,
        ]);
        $user->assignRole($request->user_type);
        return redirect()
            ->route('admin-list.index')
            ->with('success', 'Admin created successfully');
    }

    public function edit($id){
        $subtitle="Edit Admin Registration";
        $metatitle="Edit Admin Registration";
        $user=User::find($id);
        $roles = Role::get();
        return view('admin.adminList.edit',compact('subtitle','metatitle','roles','user'));
    }

    public function update(Request $request, $id){
        $user = User::findOrFail($id);

        $request->validate([
            'user_name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('users', 'name')->ignore($user->id),
            ],
            'user_email' => [
                'required',
                'email',
                Rule::unique('users', 'email')->ignore($user->id),
            ],
            'password'      => 'nullable|min:6',
            'user_type'     => 'required',
            'mobile_number' => 'required|digits_between:8,15',
            'status'        => 'required|in:active,inactive',
        ]);

        $data = [
            'name'   => $request->user_name,
            'email'  => $request->user_email,
            'mobile' => $request->mobile_number,
            'status' => $request->status === 'active' ? 1 : 0,
        ];

        // Update password only if entered
        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);

        // Update role (Spatie)
        $user->syncRoles([$request->user_type]);

        return redirect()
            ->route('admin-list.index')
            ->with('success', 'Admin updated successfully');
    }
}
