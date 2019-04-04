<?php

namespace App\Infrastructure\Repositories;

class ArticleRepository
{
    private $articleFactory;

    public function __construct(ArticleFactory $articleFactory)
    {
        $this->articleFactory = $articleFactory;
    }
}