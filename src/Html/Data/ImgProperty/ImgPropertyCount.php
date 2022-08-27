<?php
namespace Nemundo\Content\App\Html\Data\ImgProperty;
class ImgPropertyCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var ImgPropertyModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new ImgPropertyModel();
}
}