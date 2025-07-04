<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    public function index()
    {
        return view('backend.users.alluser');
    }

    public function getUsers(Request $request)
    {
    if ($request->ajax()) {
        $users = User::query();
        return DataTables::of($users)->make(true);
    }

    return view('backend.dashboard.dashboard');
    }
}
