<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: white;
            font-family: 'Courier New', Courier, monospace;
        }
        input {
            border-radius: 25px;
            padding: 12px;
            margin: 12px;
            text-align: center;
            cursor: pointer;
        }
        input:focus {
            border: 2pt green dotted;
        }
        form {
            display: flex;
            flex-direction: column;
            padding: 32px;
            background-color: orange;
            width: 30vw;
            border-radius: 15px;
            border: 2pt black solid;
            text-align: center;
            box-shadow: 15px 15px whitesmoke;
        }
        h3 {
            text-align: left;
            font-size: 14px;
        }
        

    </style>
</head>
<body>
    <form action="" method="POST">
                <h1>Calculator App</h1>
                <h3>Enter two values below to begin calculation: </h3>
      <input type="text" placeholder="Value 1" name="val1" size="10">
     <input type="text" placeholder="Value 2"name="val2" size="10">
        <h1>Calculations:</h1>
        <div class="calcs">
        <input type="radio"  name="calc" value="add" checked>Add
        <input type="radio" name="calc" value="multi" checked>Multiply
        <input type="radio" name="calc" value="divide" checked>Divide
        <input type="radio" name="calc" value="sub" checked>Subtract
        </div>
        <input style="background-color: green; color: white; cursor: pointer" type="submit" value="Calculate" >
        <input type="reset" value="Clear" style="color: white; background-color: red; cursor: pointer;">
    </form>
    
</body>
</html>