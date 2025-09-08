<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Futuro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #F7F4E8;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .section {
            max-width: 700px;
            margin: 50px auto;
            background-color: #DAF3EA;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
        }

        h2 {
            color: #6BB39B;
            font-weight: bold;
        }

        p {
            color: #0B0B0D;
        }

        .btn-back {
            margin-top: 20px;
            background-color: #85E6C0;
            border: none;
            border-radius: 12px;
        }
    </style>
</head>

<body>

    <div class="section text-center">
        <h2>Metas y aspiraciones 💫💵</h2>
        <p>
            Mirando hacia el futuro, mi principal meta a corto plazo es culminar exitosamente la carrera de Ingeniería
            de Sistemas y continuar fortaleciendo mis conocimientos en el área del desarrollo de software. Me motiva la
            idea de crear herramientas tecnológicas que no solo sean funcionales y útiles para las personas, sino que
            también me permitan obtener un beneficio económico y abrirme paso en el mundo profesional.
        </p>
        <p>
            Entre mis sueños personales está comprar mi primer carro, adquirir una casa y alcanzar la estabilidad
            económica suficiente para construir una familia y ofrecerle todas las comodidades y la seguridad que merece.
            Más allá de lo material, me motiva la posibilidad de mirar atrás y sentir que, a través de los proyectos en
            los que he trabajado, pude aportar algo significativo a la sociedad, dejando una huella positiva en mi
            entorno.
        </p>
        <a href="{{ route('presentacion') }}" class="btn btn-back">⬅ Volver a Presentación</a>
    </div>

</body>

</html>
