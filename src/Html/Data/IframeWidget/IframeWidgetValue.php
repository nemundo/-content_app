<?php
namespace Nemundo\Content\App\Html\Data\IframeWidget;
class IframeWidgetValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var IframeWidgetModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new IframeWidgetModel();
}
}