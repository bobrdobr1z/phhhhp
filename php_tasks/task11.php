<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Круги</title>
    <style>
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

<h2>10 кругов:</h2>
<div>
    <?php
    for ($i = 0; $i < 10; $i++) {
        echo '<div class="circle"></div>';
    }
    ?>
</div>

</body>
</html>