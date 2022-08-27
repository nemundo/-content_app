<?php

namespace Nemundo\Content\App\Video\Content\YouTube;

use Nemundo\Com\Video\YouTube\YouTubeInformation;
use Nemundo\Content\App\Video\Data\YouTube\YouTube;
use Nemundo\Content\App\Video\Data\YouTube\YouTubeUpdate;
use Nemundo\Content\Builder\ContentBuilder;
use Nemundo\Content\Builder\IndexBuilder;
use Nemundo\Content\Type\AbstractContentBuilder;
use Nemundo\Core\Type\Text\Text;
use Nemundo\Crawler\HtmlParser\HtmlParser;

class YouTubeBuilder extends AbstractContentBuilder
{

    //public $youTubeUrl;

    public $youTubeId;

    public $title;

    public $description;

public $start=0;


protected function loadBuilder()
{
    $this->contentType=new YouTubeType();
    // TODO: Implement loadBuilder() method.
}


    /*public function buildContent()
    {

        $parser = new HtmlParser();
        $parser->fromUrl($this->youTubeUrl);

        $title = $parser->getPageTitle();
        $title = (new Text($title))->removeRight('- YouTube')->getValue();
        $description = $parser->getDescription();

        /*
        $this->contentType->youTubeUrl = $this->url->getValue();
        $this->contentType->title = $title;
        $this->contentType->description = $description;
        $this->contentType->start=$this->start->getValue();
        $this->contentType->saveType();*/

       /* $data = new YouTube();
        $data->youtubeId = (new YouTubeInformation())->getYouTubeIdFromUrl($this->youTubeUrl);
        $data->title = $title;
        $data->description = $description;
        $data->start= 0;  //$this->start;
        $dataId = $data->save();

        $content=new YouTubeType($dataId);

        (new IndexBuilder())->buildIndex($content);





        // TODO: Implement saveContent() method.
    }*/


    protected function onCreate()
    {

        $data = new YouTube();
        $data->youtubeId = $this->youTubeId;
        $data->title = $this->title;
        $data->description = $this->description;
        $data->start= $this->start;
        $this->dataId = $data->save();

        //$content=new YouTubeType($dataId);

        (new IndexBuilder())->buildIndex((new YouTubeItem($this->dataId)));  // $content);

    }


    protected function onUpdate()
    {

        $update = new YouTubeUpdate();
        $update->youtubeId = $this->youTubeId;
        $update->title = $this->title;
        $update->description = $this->description;
        $update->start= $this->start;
        $update->updateById($this->dataId);

        (new IndexBuilder())->buildIndex((new YouTubeItem($this->dataId)));

    }


    public function fromUrl($url) {


        //$this->youTubeUrl = $url;


        //$information = new YouTubeInformation()) -> getYouTubeIdFromUrl($this->youTubeUrl);

        $parser = new HtmlParser();
        $parser->fromUrl($url);

        $title = $parser->getPageTitle();
        $this->title = (new Text($title))->removeRight('- YouTube')->getValue();
        $this->description = $parser->getDescription();
        $this->youTubeId =  (new YouTubeInformation())->getYouTubeIdFromUrl($url);

        $this->buildContent();


        /*$title = $parser->getPageTitle();
        $this->title = (new Text($title))->removeRight('- YouTube')->getValue();
        $this->description = $parser->getDescription();*/

        //$this->saveType();

    }


}