<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionController extends Controller
{
    public function assignRole(Request $request, $userId) {
        
        $request->validate(['role' => 'required|string']);
        $user = User::findOrFail($userId);
        $user->assignRole($request->role);
        $user->refresh();
        return response()->json(['message' => "Role '{$request->role}' assigned"]);
    }

    public function givePermission(Request $request, $userId) {
        $request->validate(['permission' => 'required|string']);
        $user = User::findOrFail($userId);
        $user->givePermissionTo($request->permission);
        return response()->json(['message' => "Permission '{$request->permission}' given"]);
    }

    public function showRolesPermissions($userId) {
        $user = User::findOrFail($userId);
        return response()->json([
            'roles' => $user->getRoleNames(),
            'permissions' => $user->getAllPermissions()->pluck('name'),
        ]);
    }
}

