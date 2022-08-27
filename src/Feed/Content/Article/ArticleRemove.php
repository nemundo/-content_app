<?php

namespace Nemundo\Content\App\Feed\Content\Article;

use Nemundo\Content\App\Feed\Data\Article\ArticleDelete;
use Nemundo\Content\Type\AbstractContentRemove;

class ArticleRemove extends AbstractContentRemove
{

    protected function loadRemove()
    {
        $this->contentType = new ArticleType();
    }


    protected function onDelete()
    {
        (new ArticleDelete())->deleteById($this->dataId);
    }

}