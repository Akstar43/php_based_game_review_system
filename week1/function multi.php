<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    function addNumbers ($a , $b , $c) {
        $total = $a + $b + $c;
        echo "$a + $b + $c = $total";
    }
    addNumbers(5, 12, 15);
    ?>
    
</body>
</html>