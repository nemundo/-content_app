<?php
namespace Nemundo\Content\App\Stream\Data\StreamContentType;
class StreamContentType extends \Nemundo\Model\Data\AbstractModelData {
/**
* @var StreamContentTypeModel
*/
protected $model;

/**
* @var string
*/
public $contentTypeId;

public function __construct() {
parent::__construct();
$this->model = new StreamContentTypeModel();
}
public function save() {
$this->typeValueList->setModelValue($this->model->contentTypeId, $this->contentTypeId);
$id = parent::save();
return $id;
}
}