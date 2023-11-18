<?php

namespace App\ViewHelpers;

class ArchiveHelper
{
    public static function displayArchivedShoppingItems(array $archivedShoppingItems): string
    {
        $output = '';
        foreach ($archivedShoppingItems as $archivedShoppingItem) {
            $output .= $archivedShoppingItem['name']
                . '<br>';
        }
        return $output;
    }
}
