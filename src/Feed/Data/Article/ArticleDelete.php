<?php
namespace Nemundo\Content\App\Feed\Data\Article;
class ArticleDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var ArticleModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new ArticleModel();
}
}