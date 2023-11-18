<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Slim 4</title>
    <link href='//fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
</head>

<body>

    <?php echo \App\ViewHelpers\ArchiveHelper::displayArchivedShoppingItems($archivedItems) ?>
    <a href="/">Back to Home</a>

</body>

</html>