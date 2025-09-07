<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Presentación</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background-color: #F7F4E8;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .card {
        background-color: #DAF3EA;
        border: none;
        border-radius: 20px;
        box-shadow: 0px 4px 15px rgba(0,0,0,0.2);
        max-width: 400px;
        margin: auto;
    }
    .profile-pic {
        border-radius: 50%;
        border: 5px solid #85E6C0;
        width: 150px;
        height: 150px;
        object-fit: cover;
        margin: 20px auto 10px auto; /* centrado dentro de la tarjeta */
        display: block;
    }
    .card-body {
        text-align: center;
        color: #0B0B0D;
    }
    .card-title {
        font-size: 1.8rem;
        font-weight: bold;
        color: #6BB39B;
    }
    .card-subtitle {
        font-size: 1rem;
        color: #6BB39B;
    }
</style>

</head>
<body>
    
<div class="container d-flex vh-100">
    <div class="card my-auto p-4 text-center">
        <img src="{{ asset('images/mifoto.jpg') }}" alt="Foto de perfil" class="profile-pic">
        <div class="card-body">
            <h5 class="card-title">Camilo Andres Bueno Rey</h5>
            <h6 class="card-subtitle mb-2">Desarrollador / Estudiante</h6>
            <p class="mt-3">¡Bienvenido a mi página web!</p>
        </div>
    </div>
</div>

</body>
</html>
