<?php

namespace App\ViewHelpers;

class IndexHelper
{
    public static function displayShoppingItems(array $shoppingItems): string
    {
        $output = '';
        foreach ($shoppingItems as $shoppingItem) {
            $output .= $shoppingItem['name'] . '<br>';
        }
        return $output;
    }
}
