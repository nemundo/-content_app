<?php
namespace Nemundo\Content\App\Feed\Data\Article;
class ArticleReader extends \Nemundo\Model\Reader\ModelDataReader {
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
$row = $this->getModelRow($dataRow);
$list[] = $row;
}
return $list;
}
/**
* @return ArticleRow
*/
public function getRow() {
$dataRow = parent::getRow();
$row = $this->getModelRow($dataRow);
return $row;
}
/**
* @return ArticleRow
*/
public function getRowById($id) {
return parent::getRowById($id);
}
private function getModelRow($dataRow) {
$row = new ArticleRow($dataRow, $this->model);
$row->model = $this->model;
return $row;
}
}