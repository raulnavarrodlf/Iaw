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
    <table>
        <tr>
            <th>Número</th>
            <th>Divisores</th>
        </tr>
        <?php
        for ($i = 50; $i <= 60; $i++) {
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>";
            $divisores = [];
            for ($j = 1; $j <= $i; $j++) {
                if ($i % $j == 0) {
                    $divisores[] = $j;
                }
            }
            echo implode(", ", $divisores);
            echo "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
