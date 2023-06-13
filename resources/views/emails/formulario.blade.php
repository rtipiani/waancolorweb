<!DOCTYPE html>
<html lang="es_PE">
<head>
    <meta charset="utf-8">
    <title>Formulario de contacto</title>
</head>
<body>
    <h1>Nuevo formulario de contacto</h1>
    <div>
        <strong>Nombre o razón social:</strong>
        <p> {{ $nombreRazonSocial }}</p>
    </div>
    <div>
        <strong>DNI/RUC:</strong>
        <p>{{ $dniRuc }}</p>
    </div>
    <div>
        <strong>Teléfono de contacto:</strong>
        <p>{{ $telefono }}</p>
    </div>
    <div>
        <strong>Correo electrónico:</strong>
        <p>{{ $correoElectronico }}</p>
    </div>
    <div>
        <strong>Mensaje:</strong>
        <p>{{ $mensaje }}</p>
    </div>
    <p>¡Gracias!</p>
</body>
</html>
