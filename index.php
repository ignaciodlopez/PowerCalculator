<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Potencia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="content-wrapper">
            <h1>Calculadora de Potencia</h1>

            <!-- Power Calculator Form -->
            <form method="POST" action="">
                <!-- Amperes Input -->
                <div class="form-group">
                    <label for="amperes">Amperes:</label>
                    <input type="number" class="form-control" id="amperes" name="amperes" required>
                </div>

                <!-- Voltage Select -->
                <div class="form-group">
                    <label for="voltaje">Voltaje:</label>
                    <select class="form-control" id="voltaje" name="voltaje" required>
                        <option value="220">220V</option>
                        <option value="110">110V</option>
                    </select>
                </div>

                <!-- Calculate Button -->
                <div class="button-container">
                    <button type="submit" class="btn btn-primary">Calcular</button>
                </div>
            </form>

            <!-- Power Calculation Result -->
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $amperes = $_POST["amperes"];
                $voltaje = $_POST["voltaje"];

                $potencia = $amperes * $voltaje;

                echo "<div class='mt-4'>La potencia máxima es ⚡: $potencia W</div>";
            }
            ?>
        </div>
    </div>
</body>
</html>
