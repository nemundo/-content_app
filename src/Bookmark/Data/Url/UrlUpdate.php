<?php
namespace Nemundo\Content\App\Bookmark\Data\Url;
use Nemundo\Model\Data\AbstractModelUpdate;
class UrlUpdate extends AbstractModelUpdate {
/**
* @var UrlModel
*/
public $model;

/**
* @var string
*/
public $url;

public function __construct() {
parent::__construct();
$this->model = new UrlModel();
}
public function update() {
$this->typeValueList->setModelValue($this->model->url, $this->url);
parent::update();
}
}