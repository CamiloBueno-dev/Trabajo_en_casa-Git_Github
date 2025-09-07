<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Niñez</title>
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
        <h2>Mi Niñez ✨🧸</h2>
        <p>
            Nací y he vivido siempre en Bucaramanga, ciudad que me ha acompañado en todas las etapas de mi vida. Soy
            hijo único y crecí en un hogar lleno de cariño junto a mis dos padres, quienes siempre estuvieron presentes
            en mi formación. Desde muy pequeño empecé a estudiar, a los 3 años, y cursé todo el preescolar y la primaria
            en el Colegio Cooperativo Comfenalco. Durante esos años me fué bastante bien en el estudio e incluso
            descubrí mi gusto por las matemáticas, una materia en la que logré destacar y que me abrió las puertas a mis
            primeras competencias académicas en los últimos grados de primaria. Además, entre los 6 y 8 años también
            tuve la oportunidad de practicar fútbol, un deporte que disfrutaba y que me permitió vivir momentos de
            diversión y amistad en mi niñez, aunque eventualmente le perdí el interés.
        </p>
        <a href="{{ route('presentacion') }}" class="btn btn-back">⬅ Volver a Presentación</a>
    </div>

</body>

</html>
