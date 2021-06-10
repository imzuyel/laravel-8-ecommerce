<?php

namespace App\Http\Controllers\backend;

use App\Models\Role;
use App\Models\Module;
use App\Models\Permission;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;


class RoleController extends Controller
{

    public function index()
    {
        Gate::authorize('app.roles.index');
        $roles = Role::latest()->get();
        return view('backend.roles.index', compact('roles'));
    }

    public function create()
    {
        Gate::authorize('app.roles.create');
        $modules = Module::latest()->get();
        return view('backend.roles.form', compact('modules'));
    }


    public function store(Request $request)
    {
        Gate::authorize('app.roles.create');
        $this->validate($request, [
            'name'                  => 'required|string|unique:roles',
            'permissions'           => 'required',
            'permissions.*'         => 'integer',
        ], [
            'permissions.required'  => 'Atlest select one permission'
        ]);
        Role::create([
            'name'                  => $request->name,
            'slug'                  => Str::slug($request->name),
            'description'           => $request->description,
        ])->permissions()->sync($request->permissions, []);
        toastr()->success('Role added successfully');
        return redirect()->route('app.roles.index');
    }

    public function edit(Role $role)
    {
        Gate::authorize('app.roles.edit');
        $modules                    = Module::with('permissions')->latest()->get();
        $permission                 = Permission::count();
        return view('backend.roles.form', compact('modules', 'role', 'permission'));
    }

    public function update(Request $request, Role $role)
    {
        Gate::authorize('app.roles.edit');
        $this->validate($request, [
            'name'                  => 'required|string|unique:roles,name,' . $role->id,
            'permissions'           => 'required',
            'permissions.*'         => 'integer',
        ], [
            'permissions.required' => 'Atlest select one permission'
        ]);
        $role->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);
        $role->permissions()->sync($request->permissions);
        toastr()->success('Role updated successfully');
        return redirect()->route('app.roles.index');
    }


    public function destroy(Role $role)
    {
        Gate::authorize('app.roles.destroy');
        if ($role->deletable) {
            $role->delete();
            toastr()->success('Role deleted successfully!', 'success');
            return redirect()->route('app.roles.index');
        } else {
            toastr()->error('You can\'n delete this', 'error');
            return redirect()->route('app.roles.index');
        }
    }
}
