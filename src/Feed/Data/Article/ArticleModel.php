<?php
namespace Nemundo\Content\App\Feed\Data\Article;
class ArticleModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\External\Id\NumberExternalIdType
*/
public $feedId;

/**
* @var \Nemundo\Content\App\Feed\Data\Feed\FeedExternalType
*/
public $feed;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $title;

/**
* @var \Nemundo\Model\Type\Text\LargeTextType
*/
public $description;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $url;

/**
* @var \Nemundo\Model\Type\DateTime\DateTimeType
*/
public $dateTime;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $imageUrl;

/**
* @var \Nemundo\Model\Type\Number\YesNoType
*/
public $hasImage;

/**
* @var \Nemundo\Model\Type\Number\YesNoType
*/
public $hasAudio;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $audioUrl;

protected function loadModel() {
$this->tableName = "feed_article";
$this->aliasTableName = "feed_article";
$this->label = "Article";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "feed_article";
$this->id->externalTableName = "feed_article";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "feed_article_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->feedId = new \Nemundo\Model\Type\External\Id\NumberExternalIdType($this);
$this->feedId->tableName = "feed_article";
$this->feedId->fieldName = "feed";
$this->feedId->aliasFieldName = "feed_article_feed";
$this->feedId->label = "Feed";
$this->feedId->allowNullValue = false;

$this->title = new \Nemundo\Model\Type\Text\TextType($this);
$this->title->tableName = "feed_article";
$this->title->externalTableName = "feed_article";
$this->title->fieldName = "title";
$this->title->aliasFieldName = "feed_article_title";
$this->title->label = "Title";
$this->title->allowNullValue = false;
$this->title->length = 255;

$this->description = new \Nemundo\Model\Type\Text\LargeTextType($this);
$this->description->tableName = "feed_article";
$this->description->externalTableName = "feed_article";
$this->description->fieldName = "description";
$this->description->aliasFieldName = "feed_article_description";
$this->description->label = "Description";
$this->description->allowNullValue = false;

$this->url = new \Nemundo\Model\Type\Text\TextType($this);
$this->url->tableName = "feed_article";
$this->url->externalTableName = "feed_article";
$this->url->fieldName = "url";
$this->url->aliasFieldName = "feed_article_url";
$this->url->label = "Url";
$this->url->allowNullValue = true;
$this->url->length = 255;

$this->dateTime = new \Nemundo\Model\Type\DateTime\DateTimeType($this);
$this->dateTime->tableName = "feed_article";
$this->dateTime->externalTableName = "feed_article";
$this->dateTime->fieldName = "date_time";
$this->dateTime->aliasFieldName = "feed_article_date_time";
$this->dateTime->label = "Date Time";
$this->dateTime->allowNullValue = false;

$this->imageUrl = new \Nemundo\Model\Type\Text\TextType($this);
$this->imageUrl->tableName = "feed_article";
$this->imageUrl->externalTableName = "feed_article";
$this->imageUrl->fieldName = "image_url";
$this->imageUrl->aliasFieldName = "feed_article_image_url";
$this->imageUrl->label = "Image Url";
$this->imageUrl->allowNullValue = true;
$this->imageUrl->length = 255;

$this->hasImage = new \Nemundo\Model\Type\Number\YesNoType($this);
$this->hasImage->tableName = "feed_article";
$this->hasImage->externalTableName = "feed_article";
$this->hasImage->fieldName = "has_image";
$this->hasImage->aliasFieldName = "feed_article_has_image";
$this->hasImage->label = "Has Image";
$this->hasImage->allowNullValue = false;

$this->hasAudio = new \Nemundo\Model\Type\Number\YesNoType($this);
$this->hasAudio->tableName = "feed_article";
$this->hasAudio->externalTableName = "feed_article";
$this->hasAudio->fieldName = "has_audio";
$this->hasAudio->aliasFieldName = "feed_article_has_audio";
$this->hasAudio->label = "Has Audio";
$this->hasAudio->allowNullValue = false;

$this->audioUrl = new \Nemundo\Model\Type\Text\TextType($this);
$this->audioUrl->tableName = "feed_article";
$this->audioUrl->externalTableName = "feed_article";
$this->audioUrl->fieldName = "audio_url";
$this->audioUrl->aliasFieldName = "feed_article_audio_url";
$this->audioUrl->label = "Audio Url";
$this->audioUrl->allowNullValue = true;
$this->audioUrl->length = 255;

$index = new \Nemundo\Model\Definition\Index\ModelUniqueIndex($this);
$index->indexName = "url";
$index->addType($this->url);

$index = new \Nemundo\Model\Definition\Index\ModelIndex($this);
$index->indexName = "date_time";
$index->addType($this->dateTime);

$index = new \Nemundo\Model\Definition\Index\ModelIndex($this);
$index->indexName = "feed_date_time";
$index->addType($this->feedId);
$index->addType($this->dateTime);

}
public function loadFeed() {
if ($this->feed == null) {
$this->feed = new \Nemundo\Content\App\Feed\Data\Feed\FeedExternalType($this, "feed_article_feed");
$this->feed->tableName = "feed_article";
$this->feed->fieldName = "feed";
$this->feed->aliasFieldName = "feed_article_feed";
$this->feed->label = "Feed";
}
return $this;
}
}