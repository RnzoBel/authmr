<?php

namespace App\Http\Controllers;
use App\Usuweb;

use Illuminate\Http\Request;

class UsuwebController extends Controller
{
    public function showusuweb()
    {
        $us_cntcuit = 20336144087;
        $user = UsuWeb::where('usu_cntcuit', '=', $us_cntcuit)->first();
        return ($user);
    }
    
}
