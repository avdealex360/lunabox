<?php

namespace App\Http\Controllers;

use Vinkla\Instagram\Instagram;

class InstaController extends Controller
{
    public function getInsta()
    {
        $instagram = new Instagram();

        $nickname = 'moysalon.ru';
        $instagrams = $instagram->get($nickname);

        return view('welcome', compact('instagrams','nickname'));
    }
}