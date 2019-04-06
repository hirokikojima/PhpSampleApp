<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\Interfaces\IArticleService;
use Illuminate\Http\Request;

/**
 * Article controller class
 */
class ArticleController extends Controller
{
    private $articleService;

    public function __construct(IArticleService $articleService)
    {
        $this->articleService = $articleService;
    }

    /**
     * 記事一覧を取得する
     *
     * @return void
     */
    public function list()
    {
        $articles = $this->articleService->getList();

        $response = [];

        foreach($articles as $article) {
            $response[] = [
                'id'               => $article->getId()->getId(),
                'subject'          => $article->getSubject()->getSubject(),
                'body'             => $article->getBody()->getBody(),
                'created_datetime' => $article->getCreatedDatetime()->getDatetime(),
                'updated_datetime' => $article->getUpdatedDatetime()->getDatetime(),
            ];
        }

        return $response;
    }

    /**
     * 記事詳細を取得する
     *
     * @param int $id
     * @return void
     */
    public function detail($id)
    {
        $article = $this->articleService->getDetail($id);

        return [
            'id'               => $article->getId()->getId(),
            'subject'          => $article->getSubject()->getSubject(),
            'body'             => $article->getBody()->getBody(),
            'created_datetime' => $article->getCreatedDatetime()->getDatetime(),
            'updated_datetime' => $article->getUpdatedDatetime()->getDatetime(),
        ];
    }

    /**
     * 記事を追加する
     *
     * @return void
     */
    public function add(Request $request)
    {
        $subject = $request->input('subject');
        $body = $request->input('body');

        $this->articleService->add($subject, $body);
    }

    /**
     * 記事を更新する
     */
    public function update($id, Request $request)
    {
        $subject = $request->input('subject');
        $body = $request->input('body');

        $this->articleService->update($id, $subject, $body);
    }

    /**
     * 記事を削除する
     */
    public function remove($id)
    {
        $this->articleService->remove($id);
    }
}