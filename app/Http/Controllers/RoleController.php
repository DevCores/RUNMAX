<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use Illuminate\Support\Str;

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

    public function edit(Role $id)
    {
        return view('pages.roles.edit',['role'=>$id]);
    }

    public function generate(Role $id)
    {
        $id->link = Str::random(15);
        $id->save();
        return redirect(route('roles.index'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'slug' => ['required', 'unique:roles,slug,'.$request->id],
        ]);
        Role::create([
            'name'=>$request->name,
            'slug'=>$request->slug,
            'rights_0'=>$request->rights_0??0,
            'rights_1'=>$request->rights_1??0,
            'rights_2'=>$request->rights_2??0,
            'rights_3'=>$request->rights_3??0,
            'rights_4'=>$request->rights_4??0,
            'rights_5'=>$request->rights_5??0,
            'rights_6'=>$request->rights_6??0,
            'rights_7'=>$request->rights_7??0,

        ]);
        return redirect(route('roles.index'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'slug' => ['required', 'unique:roles,slug,'.$request->id],
        ]);
        Role::updateOrCreate([
            'id'=>$request->id
            ],
            [
            'name'=>$request->name,
            'slug'=>$request->slug,
            'rights_0'=>$request->rights_0??0,
            'rights_1'=>$request->rights_1??0,
            'rights_2'=>$request->rights_2??0,
            'rights_3'=>$request->rights_3??0,
            'rights_4'=>$request->rights_4??0,
            'rights_5'=>$request->rights_5??0,
            'rights_6'=>$request->rights_6??0,
            'rights_7'=>$request->rights_7??0,

        ]);
        return redirect(route('roles.index'));
    }

    public function delete($id)
    {
        Role::find($id)->delete();
        return redirect(route('roles.index'));
    }
}
