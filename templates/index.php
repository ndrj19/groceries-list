<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Slim 4</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz@6..12&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/styles.css">
</head>

<body>
    <div class="container">
        <h1>Shopping List</h1>
        <form id="inputform" action="/additem" method="POST">
            <input type="text" minlength="3" id="additeminput" name="name" placeholder="Something you like">
            <button type="submit" id="additem"><i class="fa-solid fa-plus"></i></button>
        </form>
        <div class="listitems">
            <?php
            echo App\ViewHelpers\IndexHelper::displayShoppingItems($shoppingItems, $doneShoppingItems);
            ?>
        </div>

        <div class="archivelinks">
            <a class="archivelink" href="/archive/archive">Archive done</a>
            <a class="archivelink" href="/archive/view">View archive</a>
        </div>
    </div>

</body>

</html>