<?php
namespace Nemundo\Content\App\Feed\Data\Article;
class ArticleValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var ArticleModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new ArticleModel();
}
}