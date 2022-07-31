<?php

namespace App\Services;

use App\Models\ArticlesCollection;
use App\Repositories\NewsRepository;

class ShowAllArticlesService
{
    private NewsRepository $newsRepository;
    public function __construct(NewsRepository $newsRepository)
    {
        $this->newsRepository = $newsRepository;
    }

    public function execute(string $category): ArticlesCollection
    {
        return $this->newsRepository->getAll($category);
    }
}