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
}
