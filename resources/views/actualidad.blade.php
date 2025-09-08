<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualidad</title>
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
        <h2>Mi Actualidad 👓📚</h2>
        <p>
            Actualmente me encuentro estudiando Ingeniería de Sistemas en la Universidad Autónoma de Bucaramanga (UNAB),
            donde curso sexto semestre. Esta etapa de mi vida ha sido especialmente enriquecedora, pues me ha permitido
            consolidar mi pasión por la tecnología y abrirme camino en un campo que cada día me motiva más. Desde que
            inicié la carrera, me he sentido en el lugar correcto, aprendiendo no solo de la programación y el
            desarrollo de software, sino también de la importancia de la innovación, la creatividad y la resolución de
            problemas en el mundo real.
        </p>
        <a href="{{ route('presentacion') }}" class="btn btn-back">⬅ Volver a Presentación</a>
    </div>

</body>

</html>
