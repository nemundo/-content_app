<?php

namespace Nemundo\Content\App\Feed\Content\Feed;

use Nemundo\Content\App\Feed\Content\Article\ArticleRemove;
use Nemundo\Content\App\Feed\Data\Article\ArticleReader;
use Nemundo\Content\App\Feed\Data\Feed\FeedDelete;
use Nemundo\Content\Type\AbstractContentRemove;

class FeedRemove extends AbstractContentRemove
{

    protected function loadRemove()
    {
        $this->contentType = new FeedType();
    }


    protected function onDelete()
    {

        $reader = new ArticleReader();
        $reader->filter->andEqual($reader->model->feedId, $this->dataId);
        foreach ($reader->getData() as $articleRow) {
            (new ArticleRemove($articleRow->id))->removeItem();
        }

        (new FeedDelete())->deleteById($this->dataId);

    }

}