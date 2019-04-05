<?php

namespace App\Infrastructure\Repositories;

use App\Infrastructure\Repositories\Interfaces\IArticleRepository;
use App\Infrastructure\Factories\Interfaces\IArticleFactory;
use App\Models\Article;

class ArticleRepository implements IArticleRepository
{
    private $articleFactory;

    public function __construct(IArticleFactory $articleFactory)
    {
        $this->articleFactory = $articleFactory;
    }

    /**
     * 全ての記事を取得する
     *
     * @return void
     */
    public function getAll()
    {
        $records = Article::all();

        $articles = [];

        foreach($records as $record) {
            $articles[] = $this->articleFactory->toEntity($record);
        }

        return $articles;
    }

    /**
     * 指定されたIDの記事を取得する
     *
     * @param [type] $id
     * @return void
     */
    public function getById($id)
    {
        $record = Article::where('id', $id)->first();

        if ($record) {
            return $this->articleFactory->toEntity($record);
        }

        return null;
    }

    /**
     * 記事を追加する
     *
     * @param [type] $subject
     * @param [type] $body
     * @return void
     */
    public function add($subject, $body)
    {
        $record = Article::create([
            'subject' => $subject,
            'body' => $body
        ]);

        return $this->articleFactory->toEntity($record);
    }

    /**
     * 記事を更新する
     *
     * @param [type] $article
     * @return void
     */
    public function update(\App\Domain\Article\Article $article)
    {
        $record = Article::where('id', $article->getId()->getId())->first();

        if ($record) 
        {
            return $record->update([
                'subject' => $article->getSubject()->getSubject(),
                'body' => $article->getBody()->getBody()
            ]);
        }

        return 0;
    }

    /**
     * 記事を削除する
     *
     * @param [type] $article
     * @return void
     */
    public function remove(\App\Domain\Article\Article $article)
    {
        $record = Article::where('id', $article->getId()->getId())->first();

        if ($record) 
        {
            return $record->delete();
        }

        return 0;
    }
}