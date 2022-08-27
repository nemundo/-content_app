<?php
namespace Nemundo\Content\App\Html\Data\ImgProperty;
class ImgPropertyDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var ImgPropertyModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new ImgPropertyModel();
}
}