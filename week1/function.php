<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    function tester(){
        echo "This is my first function";
    
    }
    tester()
    ?>
    <p> Here is some HTML</p>
    <p>testing again <?php tester()?></p>
</body>
</html>