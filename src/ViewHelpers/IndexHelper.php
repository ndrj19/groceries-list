<?php

namespace App\ViewHelpers;

class IndexHelper
{
    public static function displayShoppingItems(array $shoppingItems, array $doneShoppingItems): string
    {
        $output = '';
        foreach ($shoppingItems as $shoppingItem) {
            $output .= '<div class="listitem">'
                . '<a class "done" href="/markdone/'
                . $shoppingItem['id']
                . '"><i class="fa-regular fa-circle" style="color: #8A2BE2;"></i></a>'
                . $shoppingItem['name']
                . '<a class="remove" href="/removeitem/'
                . $shoppingItem['id']
                . '"><i class="fa-solid fa-circle-minus fa-2xs" style="color: #8A2BE2;"></i></a>'
                . '</div>';
        }
        foreach ($doneShoppingItems as $doneShoppingItem) {
            $output .= '<div class="listitem">'
                . '<i class="fa-solid fa-circle-check" style="color: #8A2BE2;"></i>'
                . $doneShoppingItem['name'] . '<br>'
                . '<a class="remove" href="/removeitem/'
                . $shoppingItem['id']
                . '"><i class="fa-solid fa-circle-minus fa-2xs" style="color: #8A2BE2;"></i></a>'
                . '</div>';
        }
        return $output;
    }
}
