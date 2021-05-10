<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use QrCode;


class QRcodeController extends Controller
{
    public function index()
    {
        return QrCode::size(300)
        ->backgroundColor(255,55,0)
        ->email('ahmed2013zx2013@gmail.com', 'i have visited your qr code page.', 'This was awesome!.');

    }
}
