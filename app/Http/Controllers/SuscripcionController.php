<?php

namespace App\Http\Controllers;

use App\Models\Suscripcion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SuscripcionController extends Controller
{
    public function guardar(Request $request)
    {
        $validatedData = $request->validate([
            'email_suscripcion' => 'required|email'
        ]);

        $existeCorreo = Suscripcion::where('email_suscripcion', $validatedData['email_suscripcion'])->exists();

        if($existeCorreo) {
            return redirect()->back()->with('error', 'Correo electrónico ya registrado');
        }
        $suscripcion = new Suscripcion();
        $suscripcion->email_suscripcion = $validatedData['email_suscripcion'];
        $suscripcion->save();

        return redirect()->back()->with('success', 'Suscripción exitosa');
    }
}
