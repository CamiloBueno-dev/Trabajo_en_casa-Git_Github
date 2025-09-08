<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.1);
            max-width: 700px;
            width: 100%;
            text-align: center;
        }

        h2 {
            color: #2c3e50;
            margin-bottom: 15px;
        }

        p {
            color: #555;
            font-size: 16px;
            margin-bottom: 10px;
        }

        .contact-card {
            display: flex;
            align-items: center;
            background: #f9f9f9;
            padding: 15px;
            border-radius: 12px;
            margin-bottom: 15px;
            box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .contact-card img {
            width: 100px;
            height: 100px;
            margin-right: 15px;
        }

        .contact-info {
            text-align: left;
        }

        .contact-info h3 {
            margin: 0;
            color: #2c3e50;
            font-size: 18px;
        }

        .contact-info a {
            color: #2980b9;
            text-decoration: none;
            font-size: 15px;
        }
    </style>
</head>

<body>
    <div class="card">
        <h2>Academia 🎓</h2>

        <!-- Colegio -->
        <div class="contact-card">
            <img src="https://cloudt.edupage.org/cloud?z%3A0ystGFyXrEOy%2BuscsuUEJJvnQATyUoSYN%2FYHXODUvfeV8T8s84IiEw0IWcyA1Z1IppT7MlnZ5ATQ0P78mDNfgaNw%2BqMy8%2B2OtgNiAkz7YaC%2F0wZtx7ZGPXVr3HBIbKNd"
                alt="C3">
            <div class="contact-info">
                <h3>Colegio Cooperativo Comfenalco</h3>
                <p><strong>Inicio formación:</strong> 2009 </p>
                <p><strong>Fin formación:</strong> 2022 </p>
                <p>El Colegio Cooperativo Comfenalco es una institución educativa de Bucaramanga que promueve valores,
                    formación integral y excelencia académica, brindando espacios para el desarrollo de talentos y
                    habilidades en distintas áreas.</p>
            </div>
        </div>

        <!-- Universidad -->
        <div class="contact-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSm7hzhCG-M6xpRWhY7dr0poid_mB6i1MZNEg&s"
                alt="unab">
            <div class="contact-info">
                <h3>Universidad Autonoma de Bucaramanga</h3>
                <p><strong>Inicio formación:</strong> 2023 </p>
                <p><strong>Fin formación:</strong> 2027 </p>
                <p>La Universidad Autónoma de Bucaramanga (UNAB) es una institución de educación superior reconocida por
                    su calidad académica, innovación y compromiso con la formación de profesionales capaces de aportar
                    al desarrollo social y tecnológico.</p>
            </div>
        </div>

    </div>
</body>

</html>
