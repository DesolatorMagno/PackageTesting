<?php

namespace App\Http\Controllers;

use App\Models\User;

class TableCancelController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('table.cancel.index', compact('users'));
    }

    public function destroy()
    {
        $users = User::all();
        return view('table.cancel.index', compact('users'));
    }

}
