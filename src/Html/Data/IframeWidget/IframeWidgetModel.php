<?php
namespace Nemundo\Content\App\Html\Data\IframeWidget;
class IframeWidgetModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $src;

protected function loadModel() {
$this->tableName = "html_iframe_widget";
$this->aliasTableName = "html_iframe_widget";
$this->label = "Iframe Widget";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "html_iframe_widget";
$this->id->externalTableName = "html_iframe_widget";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "html_iframe_widget_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->src = new \Nemundo\Model\Type\Text\TextType($this);
$this->src->tableName = "html_iframe_widget";
$this->src->externalTableName = "html_iframe_widget";
$this->src->fieldName = "src";
$this->src->aliasFieldName = "html_iframe_widget_src";
$this->src->label = "Src";
$this->src->allowNullValue = false;
$this->src->length = 255;

}
}