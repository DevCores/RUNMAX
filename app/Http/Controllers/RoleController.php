<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        return view('pages.roles.index',['roles'=>Role::all()]);
    }

    public function add()
    {
        return view('pages.roles.add');
    }

    public function update(Request $request)
    {
        return redirect()->back();
    }
}
