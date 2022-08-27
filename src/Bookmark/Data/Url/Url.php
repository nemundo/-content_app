<?php
namespace Nemundo\Content\App\Bookmark\Data\Url;
class Url extends \Nemundo\Model\Data\AbstractModelData {
/**
* @var UrlModel
*/
protected $model;

/**
* @var string
*/
public $url;

public function __construct() {
parent::__construct();
$this->model = new UrlModel();
}
public function save() {
$this->typeValueList->setModelValue($this->model->url, $this->url);
$id = parent::save();
return $id;
}
}