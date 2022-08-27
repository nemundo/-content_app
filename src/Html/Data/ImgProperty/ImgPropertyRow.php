<?php
namespace Nemundo\Content\App\Html\Data\ImgProperty;
class ImgPropertyRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var ImgPropertyModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var string
*/
public $src;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->src = $this->getModelValue($model->src);
}
}