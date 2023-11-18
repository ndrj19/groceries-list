<?php

namespace App\ViewHelpers;

class IndexHelper
{
    public static function displayShoppingItems(array $shoppingItems, array $doneShoppingItems): string
    {
        $output = '';
        foreach ($shoppingItems as $shoppingItem) {
            $output .= $shoppingItem['name']
                . ' - '
                . '<a href="/removeitem/'
                . $shoppingItem['id']
                . '">Remove</a>'
                . ' - '
                . '<a href="/markdone/'
                . $shoppingItem['id']
                . '">Done</a>'
                . '<br>';
        }
        $output .= '<hr>';
        foreach ($doneShoppingItems as $doneShoppingItem) {
            $output .= $doneShoppingItem['name'] . '<br>';
        }
        return $output;
    }
}
