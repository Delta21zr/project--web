<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('roles.index', compact ('roles'));
    }
    public function create()
    {

        $role = new role;
        $role-> name = "Admin";
        $role -> Key_name = "Admin";
        $role -> save();
    }
    public function update()
    {

        //$role = role::where("id", 1) -> first()
        $role = Role:: find(1);
        $role-> name = "Gerente";
        $role -> Key_name = "Gerente";
        $role -> save();
    }
    public function delete ()
    {
        Role::Fund(1)->delete();
    }
}