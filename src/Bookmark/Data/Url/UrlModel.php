<?php
namespace Nemundo\Content\App\Bookmark\Data\Url;
class UrlModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $url;

protected function loadModel() {
$this->tableName = "bookmark_url";
$this->aliasTableName = "bookmark_url";
$this->label = "Url";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "bookmark_url";
$this->id->externalTableName = "bookmark_url";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "bookmark_url_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->url = new \Nemundo\Model\Type\Text\TextType($this);
$this->url->tableName = "bookmark_url";
$this->url->externalTableName = "bookmark_url";
$this->url->fieldName = "url";
$this->url->aliasFieldName = "bookmark_url_url";
$this->url->label = "Url";
$this->url->allowNullValue = false;
$this->url->length = 255;

}
}