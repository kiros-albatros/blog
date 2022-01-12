<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderShipped;

class mailController extends Controller
{
    public function send() {
        Mail::to('penyaeva@techart.ru')->send(new OrderShipped());
    }
}

//kirsa.prikolnaja@gmail.com
