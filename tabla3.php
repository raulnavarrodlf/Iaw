<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Divisores de Números entre 50 y 60</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 50px auto;
            font-family: Arial, sans-serif;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
    include 'recupera.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = intval($_POST['num1']);
        $num2 = intval($_POST['num2']);
        recupera($num1, $num2);
    }
    ?>
</body>
</html>
