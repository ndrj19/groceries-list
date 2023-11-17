<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Models\ShoppingListModel;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class RemoveShoppingListItemController
{
    private ShoppingListModel $model;

    public function __construct(ShoppingListModel $model)
    {
        $this->model = $model;
    }

    public function __invoke(RequestInterface $request, ResponseInterface $response, array $args)
    {
        $this->model->removeShoppingItem();
        // return $response->withJson(['example' => $data['name']]);
        return $response->withHeader('Location', '/')->withStatus(301);
    }
}
