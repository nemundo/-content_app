<?php

namespace Nemundo\Content\App\Bookmark\Content\Bookmark;

use Nemundo\Content\App\Bookmark\Data\Bookmark\Bookmark;
use Nemundo\Content\Type\AbstractContentBuilder;
use Nemundo\Crawler\HtmlParser\HtmlParser;
use Nemundo\Crawler\HtmlParser\OpenGraphParser;
use Nemundo\Model\Data\Property\File\FileProperty;

class BookmarkBuilder extends AbstractContentBuilder
{

    public $url;

    public $title;

    public $description;

    /**
     * @var FileProperty
     */
    public $image;

    protected function loadBuilder()
    {
        $this->contentType = new BookmarkType();
        $this->image = new FileProperty();
    }


    public function fromUrl($url)
    {

        $this->url = $url;
        $ogParser = new OpenGraphParser($url);

        $this->title = $ogParser->title;
        $this->description = $ogParser->description;

        if ($ogParser->hasImage) {
            //$this->image->fromUrl($ogParser->imageUrl);
        }

        if ($this->title == '') {

            $htmlParser = new HtmlParser();
            $htmlParser->fromUrl($url);
            $this->title = $htmlParser->getPageTitle();

            if ($this->description == '') {
                $this->description = $htmlParser->getDescription();
            }

        }

        $this->buildContent();

        return $this;

    }


    protected function onCreate()
    {

        $title = $this->title;
        if ($title === '') {
            $title = $this->url;
        }

        $data = new Bookmark();
        $data->url = $this->url;
        $data->title = $title;
        $data->description = $this->description;
        $data->hasImage = false;
        if ($this->image->hasValue()) {
            $data->hasImage = true;
            $data->image->fromFileProperty($this->image);
        }
        $this->dataId = $data->save();


    }

    protected function onUpdate()
    {
    }
}