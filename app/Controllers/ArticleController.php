<?php

namespace App\Controllers;

use App\Services\ShowAllArticlesService;
use App\View;

class ArticleController
{
    private ShowAllArticlesService $service;

    public function __construct(ShowAllArticlesService $service)
    {
        $this->service = $service;
    }

    public function index(): View
    {
        $category = $_GET["category"] ?? "general";

        return new View("articles", ["articles" => $this->service->execute($category)->getAll()]);
    }
}