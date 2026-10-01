<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    function Area($w, $h){
        $area = $w * $h;
        return "A rectangle of width $w and height $h has area of $area";
    };
    echo Area(3, 5);

    ?>
    
    
</body>
</html>