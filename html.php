<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>html and php</title>
</head>

<body>
    <h1><?= $business['name'] ?></h1>
    
    <ul>
        <?php foreach($business['goods'] as $nameOfGood => $good) :?> 
            <li><?= $nameOfGood . " - " . $good . " som"; ?></li>
        <?php endforeach; ?>    
    </ul>
</body>
</html>

