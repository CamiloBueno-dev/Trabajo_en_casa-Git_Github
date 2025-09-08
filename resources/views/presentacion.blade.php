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
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            margin: auto;
        }

        .profile-pic {
            border-radius: 50%;
            border: 5px solid #85E6C0;
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin: 20px auto 10px auto;
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

        .bio-section {
            margin-top: 20px;
            text-align: left;
            padding: 15px;
            background-color: #F7F4E8;
            border-radius: 12px;
        }

        .bio-section h6 {
            color: #6BB39B;
            font-weight: bold;
        }

        .bio-section p {
            margin: 0;
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

                <!-- Presentacion / Procedencia -->
                <div class="bio-section text-start">
                    <h6>Sobre mí</h6>
                    <p><strong>Lugar de procedencia:</strong> Bucaramanga, Colombia</p>
                    <p><strong>Fecha de nacimiento:</strong> 1 de enero de 2006</p>
                    <p><strong>Padre:</strong> Jorge Alberto Bueno García</p>
                    <p><strong>Madre:</strong> Claudia Patricia Rey Rondon</p>
                    <p><strong>Hermanos?</strong> Hijo único</p>
                </div>

                <div class="mt-4 d-flex justify-content-center gap-3">
                    <!-- Narración de mi Niñez -->
                    <a href="{{ route('niñez') }}" class="btn btn-success"
                        style="background-color: #6BB39B; border: none; border-radius: 12px; padding: 10px 20px;">
                        Mi Niñez
                    </a>

                    <!-- Narración de mi Adolescencia -->
                    <a href="{{ route('adolescencia') }}" class="btn btn-success"
                        style="background-color: #6BB39B; border: none; border-radius: 12px; padding: 10px 20px;">
                        Mi Adolescencia
                    </a>


                    <!-- A lo que me dedico Actualmente -->
                    <a href="{{ route('actualidad') }}" class="btn btn-success"
                        style="background-color: #6BB39B; border: none; border-radius: 12px; padding: 10px 20px; color: #F7F4E8;">
                        Actualidad
                    </a>

                    <!-- Mis metas y aspiraciones -->
                    <a href="{{ route('futuro') }}" class="btn btn-success"
                        style="background-color: #6BB39B; border: none; border-radius: 12px; padding: 10px 20px; color: #F7F4E8;">
                        Futuro
                    </a>
                </div>

                <div class="mt-4 d-flex justify-content-center gap-3">
                    <!-- Experiencia laboral -->
                    <a href="{{ route('experiencia-laboral') }}" class="btn btn-success"
                        style="background-color: #000000; border: none; border-radius: 12px; padding: 10px 20px; color: #F7F4E8;">
                        Experiencia laboral

                    <!-- Habilidades -->
                    <a href="{{ route('habilidades') }}" class="btn btn-success"
                        style="background-color: #000000; border: none; border-radius: 12px; padding: 10px 20px; color: #F7F4E8;">
                        Habilidades
                    </a>
                </div>

            </div>
        </div>
    </div>

</body>

</html>
