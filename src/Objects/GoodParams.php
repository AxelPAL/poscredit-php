<?php

namespace AxelPAL\PosCredit\Objects;

class GoodParams
{

    /**
     * @var Article[] $article
     */
    protected $article = null;

    /**
     * @param Article[] $article
     */
    public function __construct(array $article)
    {
        $this->article = $article;
    }

    /**
     * @return Article[]
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * @param Article[] $article
     * @return GoodParams
     */
    public function setArticle(array $article)
    {
        $this->article = $article;
        return $this;
    }
}
