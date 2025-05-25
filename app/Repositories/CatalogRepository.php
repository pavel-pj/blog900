<?php

namespace App\Repositories;

use App\Models\Catalog;

class CatalogRepository
{
    public function index()
    {
        return Catalog::all();
    }

    public function show(int $id)
    {

        $item = Catalog::where('id', $id)->exists();
        if (!$item) {
            throw new \Exception("non-existent instance");
        }

        return Catalog::where('id', $id)->get();
    }
}
