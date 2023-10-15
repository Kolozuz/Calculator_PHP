
<!DOCTYPE html>
<html lang="ES">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <style>
        body{font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;}
        h2{color:red;text-shadow: 1px .5px black;}
        fieldset{box-shadow: 2px 1.5px 2px red, 4px 3px black;}
    </style>
</head>
<body>
    <fieldset>
    <legend><h2>Calculator</h2></legend>
    <form action="Views/result.php" method="get">
        <label for="n1">1st Number</label>
        <input type="number" name="n1">
        <br><br>
        <label for="n2">2nd Number</label>
        <input type="number" name="n2">
        <br><br>
        <label for="op">Operation</label>
        <select name="op">
            <option value="suma">+</option>
            <option value="resta">-</option>
            <option value="multiplicación">*</option>
            <option value="división">/</option>
        </select>
        <br><br>
        <input type="submit" value="Submit">
    </form>
    </fieldset>
</body>
</html>