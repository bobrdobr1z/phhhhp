<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задачи на PHP</title>
    <style>
        .number {
            color: red;
            font-size: 2em;
        }
        .circle {
            width: 50px;
            height: 50px;
            background-color: blue;
            border-radius: 50%;
            display: inline-block;
            margin: 5px;
        }
    </style>
</head>
<body>

<h2>Нечетные числа:</h2>
<?php
$N = 5; 

$oddNumbers = [];
$sum = 0;

for ($i = 0; $i < $N; $i++) {
    $oddNumber = 2 * $i + 1; 
    $oddNumbers[] = $oddNumber;
    $sum += $oddNumber; 
}

$average = $sum / $N;

echo "<ul>";
for ($i = $N - 1; $i >= 0; $i--) {
    echo "<li class='number'>{$oddNumbers[$i]}</li>";
}
echo "</ul>";

echo "<h3>Среднее значение: $average</h3>";
?>

<h2>4-значные числа:</h2>
<?php
$mirrorCount = 0;
$evenCount = 0;
$oddCount = 0;
$descendingCount = 0;

for ($i = 1000; $i < 10000; $i++) {
    $digits = str_split($i);

    if ($digits[0] == $digits[3] && $digits[1] == $digits[2]) {
        $mirrorCount++;
    }

    // Проверка на четные числа
    if ($digits[0] % 2 == 0 && $digits[1] % 2 == 0 && $digits[2] % 2 == 0 && $digits[3] % 2 == 0) {
        $evenCount++;
    }

    if ($digits[0] % 2 != 0 && $digits[1] % 2 != 0 && $digits[2] % 2 != 0 && $digits[3] % 2 != 0) {
        $oddCount++;
    }

    if ($digits[0] > $digits[1] && $digits[1] > $digits[2] && $digits[2] > $digits[3]) {
        $descendingCount++;
    }
}

echo "Количество зеркальных чисел: $mirrorCount<br>";
echo "Количество четных чисел: $evenCount<br>";
echo "Количество нечетных чисел: $oddCount<br>";
echo "Количество убывающих чисел: $descendingCount<br>";
?>

<h2>10 кругов:</h2>
<div>
    <?php
    for ($i = 0; $i < 10; $i++) {
        echo '<div class="circle"></div>';
    }
    ?>
</div>

<h2>Перевод числа из двоичной в шестнадцатеричную систему:</h2>
<?php
$binaryNumber = '101010'; 
$decimalNumber = bindec($binaryNumber);
$hexadecimalNumber = dechex($decimalNumber); 
echo "<p>Шестнадцатеричное представление числа $binaryNumber: $hexadecimalNumber</p>";
?>

</body>
</html>