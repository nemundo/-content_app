<?php
namespace Nemundo\Content\App\Contact\Data\Email;
class EmailRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var EmailModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var string
*/
public $email;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->email = $this->getModelValue($model->email);
}
}