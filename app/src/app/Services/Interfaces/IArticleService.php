<?php

namespace App\Services\Interfaces;

interface IArticleService
{
     public function getList();
     public function getDetail($id);
     public function add($subject, $body);
     public function update($id, $subject, $body);
     public function remove($id);
}
