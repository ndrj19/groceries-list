<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Slim 4</title>
    <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
</head>

<body>

    <form action="/additem" method="POST">
        <label for="additem">Add item</label>
        <input type="text" id="additem" name="name">
        <input type="submit" value="Submit">
    </form>

    <?php
    echo App\ViewHelpers\IndexHelper::displayShoppingItems($shoppingItems);
    ?>

    <hr>

    <a href="/removeitem">REMOVE</a>
</body>

</html>