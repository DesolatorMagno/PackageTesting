<?php

namespace App\Http\Controllers;

use App\Models\User;
use DesolatorMagno\LaravelMsg\Message;

class TableCancelController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('table.cancel.index', compact('users'));
    }

    public function destroy($id)
    {
        $users = User::all();
        Message::success('Usuario ' . $users->find($id)->name . ' fue eliminado (not really)');
        return view('table.cancel.index', compact('users'));
    }

}
