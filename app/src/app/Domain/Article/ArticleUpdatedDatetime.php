<?php

namespace App\Domain\Article;

class ArticleUpdatedDatetime
{
    private $datetime;

    public function __construct($datetime)
    {
        $this->datetime = $datetime;
    }

    public function getDatetime()
    {
        return $this->datetime;
    }
}