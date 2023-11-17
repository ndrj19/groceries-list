<?php

declare(strict_types=1);

namespace App\Models;

use PDO;

class ShoppingListModel
{
    protected PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getShoppingItems(): array
    {
        $query = $this->db->prepare('SELECT `id`, `name` FROM `shopping_list_items`');
        $query->execute();
        return $query->fetchAll();
    }

    public function addShoppingItem(string $name)
    {
        $query = $this->db->prepare('INSERT INTO `shopping_list_items` (`name`) VALUES (?)');
        $query->execute([$name]);
    }

    public function removeShoppingItem()
    {
        $query = $this->db->prepare('DELETE FROM shopping_list_items WHERE `id` = 5');
        $query->execute();
    }
}
