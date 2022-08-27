<?php
namespace Nemundo\Content\App\Feed\Data\Article;
class ArticleCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var ArticleModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new ArticleModel();
}
}