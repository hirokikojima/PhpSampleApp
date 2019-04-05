<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    const CREATED_AT = 'created_datetime';
    const UPDATED_AT = 'updated_datetime';

    protected $table = 'Articles';

    protected $fillable = [
        'subject',
        'body'
    ];
}
