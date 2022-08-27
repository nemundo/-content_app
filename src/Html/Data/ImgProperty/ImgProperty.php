<?php
namespace Nemundo\Content\App\Html\Data\ImgProperty;
class ImgProperty extends \Nemundo\Model\Data\AbstractModelData {
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