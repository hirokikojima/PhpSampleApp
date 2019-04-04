<?php

namespace App\Services;

class ArticleService
{
    private $articleRepository;

    public function __construct(ArticleRepository $articleRepository) 
    {
        $this->articleRepository = $articleRepository;
    }

    public function getList()
    {
        return [];
    }

    public function getDetail()
    {

    }

    public function add()
    {

    }

    public function update()
    {

    }

    public function remove()
    {

    }
}