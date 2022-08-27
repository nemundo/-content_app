<?php
namespace Nemundo\Content\App\Contact\Data\Email;
class EmailModel extends \Nemundo\Model\Definition\Model\AbstractModel {
/**
* @var \Nemundo\Model\Type\Id\IdType
*/
public $id;

/**
* @var \Nemundo\Model\Type\Text\TextType
*/
public $email;

protected function loadModel() {
$this->tableName = "contact_email";
$this->aliasTableName = "contact_email";
$this->label = "Email";

$this->primaryIndex = new \Nemundo\Db\Index\AutoIncrementIdPrimaryIndex();

$this->id = new \Nemundo\Model\Type\Id\IdType($this);
$this->id->tableName = "contact_email";
$this->id->externalTableName = "contact_email";
$this->id->fieldName = "id";
$this->id->aliasFieldName = "contact_email_id";
$this->id->label = "Id";
$this->id->allowNullValue = false;

$this->email = new \Nemundo\Model\Type\Text\TextType($this);
$this->email->tableName = "contact_email";
$this->email->externalTableName = "contact_email";
$this->email->fieldName = "email";
$this->email->aliasFieldName = "contact_email_email";
$this->email->label = "eMail";
$this->email->allowNullValue = false;
$this->email->length = 255;

}
}