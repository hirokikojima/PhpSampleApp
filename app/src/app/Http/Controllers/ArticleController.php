<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\Interfaces\IArticleService;

class ArticleController extends Controller
{
    private $articleService;

    public function __construct(IArticleService $articleService)
    {
        $this->articleService = $articleService;
    }

    /**
     * 記事一覧を取得する
     */
    public function list()
    {
        $list = $this->articleService->getList();
        return response([
            'id' => '1',
            'name' => 'name'
        ]);
    }

    /**
     * 記事詳細を取得する
     */
    public function get($id)
    {

    }

    /**
     * 記事を追加する
     */
    public function add($id)
    {

    }

    /**
     * 記事を更新する
     */
    public function update($id)
    {

    }

    /**
     * 記事を削除する
     */
    public function remove($id)
    {

    }
}