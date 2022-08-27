<?php

namespace Nemundo\Content\App\Feed\Content\Feed;

use Nemundo\Content\App\Feed\Data\Feed\Feed;
use Nemundo\Content\App\Feed\Data\Feed\FeedCount;
use Nemundo\Content\App\Feed\Data\Feed\FeedId;
use Nemundo\Content\Type\AbstractContentBuilder;

class FeedBuilder extends AbstractContentBuilder
{

    public $rssUrl;


    protected function loadBuilder()
    {
        $this->contentType = new FeedType();
    }


    protected function onCreate()
    {

        $count = new FeedCount();
        $count->filter->andEqual($count->model->feedUrl, $this->rssUrl);
        if ($count->getCount() === 0) {

            $data = new Feed();
            $data->ignoreIfExists = true;
            $data->feedUrl = $this->rssUrl;
            $data->save();

        }


        $id = new FeedId();
        $id->filter->andEqual($count->model->feedUrl, $this->rssUrl);
        $this->dataId = $id->getId();

    }

}