<?php
namespace Nemundo\Content\App\Html\Data\ImgProperty;
class ImgPropertyBulk extends \Nemundo\Model\Data\AbstractModelDataBulk {
/**
* @var ImgPropertyModel
*/
protected $model;

/**
* @var string
*/
public $src;

public function __construct() {
parent::__construct();
$this->model = new ImgPropertyModel();
}
public function save() {
$this->typeValueList->setModelValue($this->model->src, $this->src);
$id = parent::save();
return $id;
}
}