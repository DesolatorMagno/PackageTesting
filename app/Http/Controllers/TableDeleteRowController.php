<?php

namespace App\Http\Controllers;

use App\Models\User;

class TableDeleteRowController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('table.delete.index', compact('users'));
    }

    public function destroy($id)
    {
        //$users = User::all();
        //Message::success('Usuario ' . $users->find($id)->name . ' fue eliminado (not really)');
        //return view('table.delete.index', compact('users'));
        $msg = "This is a simple message.";
        return response()->json(['msg' => $msg], 200);
    }

}
