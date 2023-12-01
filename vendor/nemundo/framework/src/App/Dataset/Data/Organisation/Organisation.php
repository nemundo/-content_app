<?php
namespace Nemundo\App\Dataset\Data\Organisation;
class Organisation extends \Nemundo\Model\Data\AbstractModelData {
/**
* @var OrganisationModel
*/
protected $model;

/**
* @var string
*/
public $organisation;

public function __construct() {
parent::__construct();
$this->model = new OrganisationModel();
}
public function save() {
$this->typeValueList->setModelValue($this->model->organisation, $this->organisation);
$id = parent::save();
return $id;
}
}