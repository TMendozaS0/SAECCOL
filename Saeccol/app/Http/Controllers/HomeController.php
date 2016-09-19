<?php

namespace Saeccol\Http\Controllers;

use Illuminate\Http\Request;

use Saeccol\Http\Requests;

class HomeController extends Controller
{
    //
    public function getIndex()
    {
        //
        return 'Saludos '. date('d/m/Y H:i');;
    }
}
