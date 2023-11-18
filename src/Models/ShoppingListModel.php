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
        $query = $this->db->prepare('SELECT `id`, `name` FROM `shopping_list_items` WHERE `done` = FALSE AND `archived` = FALSE ORDER BY `name`');
        $query->execute();
        return $query->fetchAll();
    }

    public function getDoneShoppingItems(): array
    {
        $query = $this->db->prepare('SELECT `id`, `name` FROM `shopping_list_items` WHERE `done` = TRUE AND `archived` = FALSE ORDER BY `name`');
        $query->execute();
        return $query->fetchAll();
    }

    public function addShoppingItem(string $name)
    {
        $query = $this->db->prepare('INSERT INTO `shopping_list_items` (`name`, `done`, `archived`) VALUES (?, FALSE, FALSE)');
        $query->execute([$name]);
    }

    public function removeShoppingItem(int $id)
    {
        $query = $this->db->prepare('DELETE FROM shopping_list_items WHERE `id` = ?');
        $query->execute([$id]);
    }

    public function markShoppingItemAsDone(int $id)
    {
        $query = $this->db->prepare('UPDATE `shopping_list_items` SET `done` = TRUE WHERE `id` = ?');
        $query->execute([$id]);
    }

    public function archiveDoneItems()
    {
        $query = $this->db->prepare('UPDATE `shopping_list_items` SET `archived` = TRUE WHERE `done` = TRUE');
        $query->execute();
    }

    public function getArchivedItems()
    {
        $query = $this->db->prepare('SELECT `id`, `name` FROM `shopping_list_items` WHERE `done` = TRUE AND `archived` = TRUE ORDER BY `id` DESC');
        $query->execute();
        return $query->fetchAll();
    }
}
