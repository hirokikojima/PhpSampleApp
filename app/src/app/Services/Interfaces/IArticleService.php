<?php

namespace App\Services\Interfaces;

interface IArticleService
{
     public function getList();
     public function getDetail();
     public function add();
     public function update();
     public function remove();
}
