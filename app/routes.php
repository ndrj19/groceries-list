<?php

declare(strict_types=1);

use App\Controllers\AddShoppingListItemController;
use App\Controllers\ArchiveDoneShoppingItemsController;
use App\Controllers\CoursesAPIController;
use App\Controllers\RemoveShoppingListItemController;
use App\Controllers\ShoppingListController;
use App\Controllers\ShoppingListItemDoneController;
use Slim\App;
use Slim\Views\PhpRenderer;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $container = $app->getContainer();

    $app->get('/', ShoppingListController::class);

    $app->post('/additem', AddShoppingListItemController::class);

    $app->get('/removeitem/{id}', RemoveShoppingListItemController::class);

    $app->get('/markdone/{id}', ShoppingListItemDoneController::class);

    $app->get('/archive/{action}', ArchiveDoneShoppingItemsController::class);
};
