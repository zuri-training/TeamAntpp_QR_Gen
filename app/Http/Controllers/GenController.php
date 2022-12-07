<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\Image\ImagickImageBackEnd;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Writer;

class GenController extends Controller
{
    public function index(){
        


        // $renderer = new ImageRenderer(
        //     new RendererStyle(400),
        //     new ImagickImageBackEnd()
        // );
        // $writer = new Writer($renderer);
        // return $writer->writeFile('Hello World!', 'qrcode.png');

        // $data = 'otpauth://totp/test?secret=B3JX4VCVJDVNXNZ5&issuer=chillerlan.net';

// quick and simple:
        // echo '<img src="'.(new QRCode)->render($data).'" alt="QR Code" />';
    }
}
