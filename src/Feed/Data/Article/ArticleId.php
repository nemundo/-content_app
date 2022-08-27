<?php
namespace Nemundo\Content\App\Feed\Data\Article;
use Nemundo\Model\Id\AbstractModelIdValue;
class ArticleId extends AbstractModelIdValue {
/**
* @var ArticleModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new ArticleModel();
}
}