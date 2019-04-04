<?php

namespace App\Infrastructure\Factories\Interfaces;

class IArticleFactory
{
    public create($id, $subject, $body, $created_datetime, $updated_datetime);
}