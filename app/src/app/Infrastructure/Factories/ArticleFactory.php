<?php

namespace App\Infrastructure\Factories;

use App\Domain\Article\Article;
use App\Domain\Article\ArticleId;
use App\Domain\Article\ArticleSubject;
use App\Domain\Article\ArticleBody;
use App\Domain\Article\ArticleCreatedDatetime;
use App\Domain\Article\ArticleUpdatedDatetime;

class ArticleFactory
{
    public create($id, $subject, $body, $created_datetime, $updated_datetime)
    {
        return new Article(
            $id,
            $subject,
            $body,
            $created_datetime,
            $updated_datetime
        );
    }
}