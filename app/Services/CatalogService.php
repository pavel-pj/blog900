<?php

namespace App\Services;

use App\Models\Catalog;

class CatalogService
{
    public function store($validated)
    {
        $item = Catalog::create($validated);
        if (!$item) {
            throw new \Error("It is not possible to create new item Catalog");
        }
        return $item;
    }
}
