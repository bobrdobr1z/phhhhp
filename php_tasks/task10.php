<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Нечетные числа</title>
    <style>
        .number {
            color: red;
            font-size: 2em; /* Размер текста равен наибольшему числу */
        }
    </style>
</head>
<body>

<?php
$N = 5; 

$oddNumbers = [];
$sum = 0;

// Генерируем N нечетных чисел
for ($i = 0; $i < $N; $i++) {
    $oddNumber = 2 * $i + 1; 
    $oddNumbers[] = $oddNumber;
    $sum += $oddNumber;
}

$average = $sum / $N;

echo "<h2>Нечетные числа:</h2>";
echo "<ul>";
for ($i = $N - 1; $i >= 0; $i--) {
    echo "<li class='number'>{$oddNumbers[$i]}</li>";
}
echo "</ul>";

echo "<h3>Среднее значение: $average</h3>";
?>

</body>
</html>