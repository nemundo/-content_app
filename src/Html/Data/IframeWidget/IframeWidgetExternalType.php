<?php
namespace Nemundo\Content\App\Html\Data\IframeWidget;
class IframeWidgetExternalType extends \Nemundo\Model\Type\External\ExternalType {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $src;

protected function loadExternalType() {
parent::loadExternalType();
$this->externalModelClassName = IframeWidgetModel::class;
$this->externalTableName = "html_iframe_widget";
$this->aliasTableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id = new \Nemundo\Model\Type\Id\IdType();
$this->id->fieldName = "id";
$this->id->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->id->externalTableName = $this->externalTableName;
$this->id->aliasFieldName = $this->id->tableName . "_" . $this->id->fieldName;
$this->id->label = "Id";
$this->addType($this->id);

$this->src = new \Nemundo\Model\Type\Text\TextType();
$this->src->fieldName = "src";
$this->src->tableName = $this->parentFieldName . "_" . $this->externalTableName;
$this->src->externalTableName = $this->externalTableName;
$this->src->aliasFieldName = $this->src->tableName . "_" . $this->src->fieldName;
$this->src->label = "Src";
$this->addType($this->src);

}
}