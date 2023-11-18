<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Slim 4</title>
    <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
</head>

<body>

    <form action="/additem" method="POST">
        <input type="text" id="additem" name="name">
        <input type="submit" value="Add to list">
    </form>

    <?php
    echo App\ViewHelpers\IndexHelper::displayShoppingItems($shoppingItems, $doneShoppingItems);
    ?>

    <a href="/archive/archive">Archive ALL DONE</a>
    <br>
    <a href="/archive/view">View archive</a>

</body>

</html>