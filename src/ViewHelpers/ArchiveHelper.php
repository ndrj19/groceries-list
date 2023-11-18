<?php

namespace App\ViewHelpers;

class ArchiveHelper
{
    public static function displayArchivedShoppingItems(array $archivedShoppingItems): string
    {
        $output = '';
        foreach ($archivedShoppingItems as $archivedShoppingItem) {
            $output .= '<div class="listitem">'
                . $archivedShoppingItem['name']
                . '</div>';
        }
        return $output;
    }
}
