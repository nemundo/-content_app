<?php
namespace Nemundo\Content\App\Html\Data\ImgProperty;
use Nemundo\Model\Data\AbstractModelUpdate;
class ImgPropertyUpdate extends AbstractModelUpdate {
/**
* @var ImgPropertyModel
*/
public $model;

/**
* @var string
*/
public $src;

public function __construct() {
parent::__construct();
$this->model = new ImgPropertyModel();
}
public function update() {
$this->typeValueList->setModelValue($this->model->src, $this->src);
parent::update();
}
}