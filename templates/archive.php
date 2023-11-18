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
        <?php echo \App\ViewHelpers\ArchiveHelper::displayArchivedShoppingItems($archivedItems) ?>
        <div class="archivelinks"><a class="archivelink" href="/">Back to Home</a></div>
    </div>
</body>

</html>