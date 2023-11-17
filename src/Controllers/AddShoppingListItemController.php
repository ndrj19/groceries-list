<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Models\ShoppingListModel;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class AddShoppingListItemController
{
    private ShoppingListModel $model;

    public function __construct(ShoppingListModel $model)
    {
        $this->model = $model;
    }

    public function __invoke(RequestInterface $request, ResponseInterface $response, array $args)
    {
        $data = $request->getParsedBody();
        $this->model->addShoppingItem($data['name']);
        // return $response->withJson(['example' => $data['name']]);
        return $response->withHeader('Location', '/')->withStatus(301);
    }
}
