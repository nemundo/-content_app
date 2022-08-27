<?php
namespace Nemundo\Content\App\Html\Data\ImgProperty;
class ImgPropertyModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $src;

protected function loadModel() {
$this->tableName = "html_img_property";
$this->aliasTableName = "html_img_property";
$this->label = "Img Property";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "html_img_property";
$this->id->externalTableName = "html_img_property";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "html_img_property_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->src = new \Nemundo\Model\Type\Text\TextType($this);
$this->src->tableName = "html_img_property";
$this->src->externalTableName = "html_img_property";
$this->src->fieldName = "src";
$this->src->aliasFieldName = "html_img_property_src";
$this->src->label = "Src";
$this->src->allowNullValue = false;
$this->src->length = 255;

}
}