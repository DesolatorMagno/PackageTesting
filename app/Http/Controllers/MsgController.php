<?php

namespace App\Http\Controllers;

use DesolatorMagno\LaravelMsg\Message;

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

    public function post()
    {
        return 'post';
    }
}
