<?php

namespace App\Domain\Article;

class ArticleBody
{
    private $body;

    public function __construct($body)
    {
        $this->body = $body;
    }

    public function getBody()
    {
        return $this->body;
    }
}