<?php

namespace App\Http\Controllers;

use App\Models\RolePermissions;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Inertia\Inertia;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data = Role::with('permissions')
            ->get()
            ->map(fn ($role) => [
                'id' => $role->id,
                'name' => $role->name,
                'permissions' => $role->permissions->pluck('name'),
            ]);

        return Inertia::render('rolePermissions/index', [
            'role_permissions' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(RolePermissions $rolePermissions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RolePermissions $rolePermissions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RolePermissions $rolePermissions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RolePermissions $rolePermissions)
    {
        //
    }
}
