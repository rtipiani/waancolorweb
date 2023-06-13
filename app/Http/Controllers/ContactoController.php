<?php

namespace App\Http\Controllers;

use App\Mail\FormularioMailable as MailFormularioMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function enviarFormulario(Request $request)
    {
        $nombreRazonSocial = $request->input('nombre_razonSocial');
        $dniRuc = $request->input('dni_ruc');
        $telefono = $request->input('telefono');
        $correoElectronico = $request->input('correo_electronico');
        $mensaje = $request->input('mensaje_web');

        try{
            Mail::to('ventas@waancolor.com')->send(new MailFormularioMailable($nombreRazonSocial, $dniRuc, $telefono, $correoElectronico, $mensaje));
            $mensajeExito = '¡enviado exitosamente!';
            $icono = 'success';
        } catch (\Exception $e){
            $mensajeExito = 'inténtelo otra vez';
            $icono = 'error';
        }
        return redirect()->back()->with('mensajeExito', $mensajeExito)->with('icono', $icono);
    }
}
