<?php

namespace App\Http\Controllers;

use DesolatorMagno\LaravelMsg\Message;
use Illuminate\Http\Request;

class MsgController extends Controller
{
    public function success($msg = 'Exito!', $title = '')
    {
        Message::success($msg, $title);
        return view('welcome');
    }

    public function create()
    {
        return view('message.create');
    }

    public function post(Request $request)
    {
        Message::{$request->tipo}($request->mensaje, $request->titulo ?? null);
        return redirect()->route('msg.create');
    }
}
