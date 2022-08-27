<?php
namespace Nemundo\Content\App\Html\Data\ImgProperty;
class ImgPropertyValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var ImgPropertyModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new ImgPropertyModel();
}
}