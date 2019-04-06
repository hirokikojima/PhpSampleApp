<?php

namespace App\Services;

use App\Domain\Article\ArticleSubject;
use App\Domain\Article\ArticleBody;
use App\Services\Interfaces\IArticleService;
use App\Infrastructure\Repositories\Interfaces\IArticleRepository;


/**
 * Article service class
 */
class ArticleService implements IArticleService
{
    private $articleRepository;

    public function __construct(IArticleRepository $articleRepository) 
    {
        $this->articleRepository = $articleRepository;
    }

    /**
     * 記事一覧を取得する
     *
     * @return void
     */
    public function getList()
    {
        return $this->articleRepository->getAll();
    }

    /**
     * 記事詳細を取得する
     *
     * @param [type] $id
     * @return void
     */
    public function getDetail($id)
    {
        return $this->articleRepository->getById($id);
    }

    /**
     * 記事を追加する
     *
     * @return void
     */
    public function add($subject, $body)
    {
        return $this->articleRepository->add($subject, $body);
    }

    /**
     * 記事を更新する
     *
     * @return void
     */
    public function update($id, $subject, $body)
    {
        $article = $this->articleRepository->getById($id);

        if ($article) {
            $article->setSubject(new ArticleSubject($subject));
            $article->setBody(new ArticleBody($body));
            return $this->articleRepository->update($article);
        }

        return 0;
    }

    /**
     * 記事を削除する
     *
     * @return void
     */
    public function remove($id)
    {
        $article = $this->articleRepository->getById($id);

        if ($article) {
            return $this->articleRepository->remove($article);
        }

        return 0;
    }
}