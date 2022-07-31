<?php

namespace App\Repositories;

use App\Models\ArticlesCollection;

interface NewsRepository
{
    public function getAll(string $category = "general"): ArticlesCollection;
}