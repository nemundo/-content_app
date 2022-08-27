<?php
namespace Nemundo\Content\App\Stream\Data\StreamContentType;
use Nemundo\Model\Id\AbstractModelIdValue;
class StreamContentTypeId extends AbstractModelIdValue {
/**
* @var StreamContentTypeModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new StreamContentTypeModel();
}
}