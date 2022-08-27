<?php
namespace Nemundo\Content\App\Feed\Data\Article;
class ArticlePaginationReader extends \Nemundo\Model\Reader\AbstractPaginationModelDataReader {
/**
* @var ArticleModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new ArticleModel();
}
/**
* @return ArticleRow[]
*/
public function getData() {
$list = [];
foreach (parent::getData() as $dataRow) {
$row = new ArticleRow($dataRow, $this->model);
$list[] = $row;
}
return $list;
}
}