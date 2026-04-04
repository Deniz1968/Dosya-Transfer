<?php
// Dinamik isim
$isim = "Deniz Çetin";
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Dinamik Başlık</title>
    <style>
        body {
            background-color: #111;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            color: gold;
            font-size: 48px;
            font-family: Arial, sans-serif;
            text-shadow: 0 0 10px #ffd700, 0 0 20px #ffcc00;
            border: 2px solid gold;
            padding: 20px 40px;
            border-radius: 10px;
        }
    </style>
</head>
<body>

    <h1><?php echo $isim; ?></h1>

</body>
</html>