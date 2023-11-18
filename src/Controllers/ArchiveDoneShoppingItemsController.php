<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Models\ShoppingListModel;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Views\PhpRenderer;

class ArchiveDoneShoppingItemsController
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
        $action = $args['action'];
        if ($action === 'archive') {
            $this->model->archiveDoneItems();
            return $response->withHeader('Location', '/')->withStatus(301);
        } elseif ($action === 'view') {
            $data = $this->model->getArchivedItems();
            return $this->renderer->render($response, 'archive.php', ['archivedItems' => $data]);
        }
    }
}
