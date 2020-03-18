<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ticket;
use App\usuario;

class homeController extends Controller
{
    public function index()
    {
        /*$datos = ticket::all();
        dd($datos);*/
        return view('nuevoTicket');
    }

    public function guarda(Request $r)
    {
        $p = new usuario();
        $p->Nombre = $r->Nombre;
        $p->ApellidoMaterno = $r->ApellidoMaterno;
        $p->ApellidoPaterno = $r->ApellidoPaterno;
        $p->nombreUsuario = $r->nombreUsuario;
        $p->contraseña = $r->contraseña;
        $p->save();
        return redirect()->back();
    }

    public function creaTicket(Request $r)
    {
        $t = new ticket();
        $t->producto = $r->producto;
        $t->descripcion = $r->descripcion;
        $t->idCliente = $r->idCliente;
        $t->save();
        return redirect()->back();
    }
}
