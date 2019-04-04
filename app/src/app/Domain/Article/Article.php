<?php

namespace App\Domain\Article;

use App\Domain\Article\ArticleId;
use App\Domain\Article\ArticleSubject;
use App\Domain\Article\ArticleBody;
use App\Domain\Article\ArticleCreatedDatetime;
use App\Domain\Article\ArticleUpdatedDatetime;

class Article
{
    private $id;

    private $subject;

    private $body;

    private $created_datetime;

    private $updated_datetime;

    public function __construct(
        ArticleId $id, 
        ArticleSubject $subject, 
        ArticleBody $body, 
        ArticleCreatedDatetime $created_datetime, 
        ArticleUpdatedDatetime $updated_datetime
    )
    {
        $this->id = $id;
        $this->subject = $subject;
        $this->body = $body;
        $this->created_datetime = $created_datetime;
        $this->updated_datetime = $updated_datetime
    }
}