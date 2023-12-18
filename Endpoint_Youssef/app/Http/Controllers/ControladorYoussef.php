<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControladorYoussef extends Controller
{
    //
    public function MetodoEndpoint(Request $request){
        $Bebidas = [" Tequila" ," Ron", " Whisky", " Ginebra"," Vodka"," Cosas que saben a piruleta pero te pegan un pelotazo que flipas sin darte cuenta"];
        return response()->json(['mensaje' => 'Estas cosas te pondrán bien contento:', 'datos' => $Bebidas]);
    }
}
