<?php

namespace App\Infrastructure\Factories\Interfaces;

use App\Domain\Article\Article;

interface IArticleFactory
{
    public function toEntity($record);
}