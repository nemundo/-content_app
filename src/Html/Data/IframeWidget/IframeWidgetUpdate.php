<?php
namespace Nemundo\Content\App\Html\Data\IframeWidget;
use Nemundo\Model\Data\AbstractModelUpdate;
class IframeWidgetUpdate extends AbstractModelUpdate {
/**
* @var IframeWidgetModel
*/
public $model;

/**
* @var string
*/
public $src;

public function __construct() {
parent::__construct();
$this->model = new IframeWidgetModel();
}
public function update() {
$this->typeValueList->setModelValue($this->model->src, $this->src);
parent::update();
}
}