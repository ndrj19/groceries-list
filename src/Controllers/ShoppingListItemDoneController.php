<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Models\ShoppingListModel;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class ShoppingListItemDoneController
{
    private ShoppingListModel $model;

    public function __construct(ShoppingListModel $model)
    {
        $this->model = $model;
    }

    public function __invoke(RequestInterface $request, ResponseInterface $response, array $args)
    {
        $id = intval($args['id']);
        $this->model->markShoppingItemAsDone($id);
        // return $response->withJson(['example' => $id]);
        return $response->withHeader('Location', '/')->withStatus(301);
    }
}
