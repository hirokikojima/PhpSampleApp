<?php

namespace App\Infrastructure\Factories;

use App\Infrastructure\Factories\Interfaces\IArticleFactory;
use App\Domain\Article\Article;
use App\Domain\Article\ArticleId;
use App\Domain\Article\ArticleSubject;
use App\Domain\Article\ArticleBody;
use App\Domain\Article\ArticleCreatedDatetime;
use App\Domain\Article\ArticleUpdatedDatetime;

class ArticleFactory implements IArticleFactory
{
    public function toEntity($record)
    {
        return new Article(
            new ArticleId($record['id']),
            new ArticleSubject($record['subject']),
            new ArticleBody($record['body']),
            new ArticleCreatedDatetime($record['created_datetime']),
            new ArticleUpdatedDatetime($record['updated_datetime'])
        );
    }
}
