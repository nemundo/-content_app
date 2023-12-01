<?phpnamespace Nemundo\App\ModelDesigner\Com\Table;use Nemundo\Admin\Com\Table\AdminTable;use Nemundo\Admin\Com\Table\AdminTableHeader;use Nemundo\Admin\Com\Table\Row\AdminTableRow;use Nemundo\App\ModelDesigner\Parameter\AppParameter;use Nemundo\App\ModelDesigner\Parameter\IndexParameter;use Nemundo\App\ModelDesigner\Parameter\ModelParameter;use Nemundo\App\ModelDesigner\Parameter\ProjectParameter;use Nemundo\App\ModelDesigner\Site\Index\IndexDeleteSite;use Nemundo\App\ModelDesigner\Site\Index\IndexSite;use Nemundo\Core\Directory\TextDirectory;use Nemundo\Orm\Model\AbstractOrmModel;class IndexTable extends AdminTable{    /**     * @var AbstractOrmModel     */    public $model;    public function getContent()    {        $header = new AdminTableHeader($this);        $header->addText('Index Name');        $header->addText('Index Type');        $header->addText('Type List');        $header->addEmpty();        $header->addEmpty();        foreach ($this->model->getIndexList() as $index) {            $row = new AdminTableRow($this);            $row->addText($index->indexName);            $row->addText($index->indexLabel);            $fieldNameDirectory = new TextDirectory();            foreach ($index->getTypeList() as $type) {                $fieldNameDirectory->addValue($type->fieldName);            }            $row->addText($fieldNameDirectory->getTextWithSeperator());            if ($index->isEditable) {                $site = clone(IndexDeleteSite::$site);                $site->addParameter(new ProjectParameter());                $site->addParameter(new AppParameter());                $site->addParameter(new ModelParameter());                $site->addParameter(new IndexParameter($index->indexName));                $row->addIconSite($site);                $site = clone(IndexSite::$site);                $site->title = 'Edit';                $site->addParameter(new ProjectParameter());                $site->addParameter(new AppParameter());                $site->addParameter(new ModelParameter());                $site->addParameter(new IndexParameter($index->indexName));                $row->addIconSite($site);            } else {                $row->addEmpty();            }        }        return parent::getContent();    }}