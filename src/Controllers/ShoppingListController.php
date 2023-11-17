<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Models\ShoppingListModel;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Views\PhpRenderer;

class ShoppingListController
{
    private ShoppingListModel $model;
    private PhpRenderer $renderer;

    public function __construct(ShoppingListModel $model, PhpRenderer $renderer)
    {
        $this->model = $model;
        $this->renderer = $renderer;
    }

    public function __invoke(RequestInterface $request, ResponseInterface $response, array $args)
    {
        $data = $this->model->getShoppingItems();
        // return $response->withJson(['example' => $data]);
        return $this->renderer->render($response, 'index.php', ['shoppingItems' => $data]);
    }
}
