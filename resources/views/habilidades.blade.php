<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habilidades</title>
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
            box-shadow: 0px 6px 20px rgba(0,0,0,0.1);
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
            margin-bottom: 30px;
        }
        .contact-card {
            display: flex;
            align-items: center;
            background: #f9f9f9;
            padding: 15px;
            border-radius: 12px;
            margin-bottom: 15px;
            box-shadow: 0px 3px 10px rgba(0,0,0,0.05);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .contact-card:hover {
            transform: translateY(-3px);
            box-shadow: 0px 6px 15px rgba(0,0,0,0.1);
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
        .contact-info a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>Mis habilidades 🔆💡</h2>

        <!-- Habilidad 1 -->
        <div class="contact-card">
            <img src="https://images.credly.com/size/680x680/images/73e4a58b-a8ef-41a3-a7db-9183dd269882/image.png" alt="AWS Logo">
            <div class="contact-info">
                <h2>AWS Academy Cloud Foundations</h32>
                <h3>Completion of the AWS Academy Cloud Foundations course.</h3>
                <a href="https://www.credly.com/badges/e98fcde2-4f49-4769-9da6-43047fb4c0de" target="_blank">https://www.credly.com/badges/e98fcde2-4f49-4769-9da6-43047fb4c0de</a>
            </div>
        </div>
    </div>
</body>
</html>
