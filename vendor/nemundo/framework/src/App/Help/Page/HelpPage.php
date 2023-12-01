<?phpnamespace Nemundo\App\Help\Page;use Nemundo\Admin\Com\Form\AdminSearchForm;use Nemundo\Admin\Com\Layout\Flex\AdminRowFlexLayout;use Nemundo\Admin\Com\ListGroup\AdminListGroup;use Nemundo\Admin\Com\Title\AdminSubtitle;use Nemundo\Admin\Com\Title\AdminTitle;use Nemundo\App\Help\Com\ListBox\ProjectListBox;use Nemundo\App\Help\Data\Code\CodeReader;use Nemundo\App\Help\Data\Topic\TopicReader;use Nemundo\App\Help\Parameter\ProjectParameter;use Nemundo\App\Help\Parameter\TopicParameter;use Nemundo\App\Help\Site\HelpSite;use Nemundo\Com\Template\AbstractTemplateDocument;use Nemundo\Html\Block\Div;use Nemundo\Html\Heading\H3;use Nemundo\Package\HighlightJs\HighlightJs;class HelpPage extends AbstractTemplateDocument{    public function getContent()    {        $search = new AdminSearchForm($this);        $project = new ProjectListBox($search);        $project->submitOnChange = true;        $project->searchMode = true;        if ($project->hasValue()) {            $layout = new AdminRowFlexLayout($this);  // new BootstrapTwoColumnLayout($this);            /*$layout->col1->columnWidth = 2;            $layout->col2->columnWidth = 10;*/            $list = new AdminListGroup($layout);  // new BootstrapSiteListGroup($layout);            $topicReader = new TopicReader();            $topicReader->filter->andEqual($topicReader->model->projectId, $project->getValue());            $topicReader->addOrder($topicReader->model->topic);            foreach ($topicReader->getData() as $topicRow) {                $site = clone(HelpSite::$site);                $site->title = $topicRow->topic;                $site->addParameter(new ProjectParameter());                $site->addParameter(new TopicParameter($topicRow->id));                $list->addSite($site);            }            $topicParameter = new TopicParameter();            if ($topicParameter->hasValue()) {                $topicRow = (new TopicReader())->getRowById($topicParameter->getValue());                $rightDiv = new Div($layout);                $title = new AdminTitle($rightDiv);                $title->content = $topicRow->topic;                $codeReader = new CodeReader();                $codeReader->filter->andEqual($codeReader->model->topicId, $topicRow->id);                $codeReader->addOrder($codeReader->model->title);                foreach ($codeReader->getData() as $codeRow) {                    $subtitle = new AdminSubtitle($rightDiv);                    $subtitle->content = $codeRow->title;                    /*$code = new Code($layout->col2);                    $code->content = (new Html($codeRow->code))->getValue();*/                    $code = new HighlightJs($rightDiv);                    $code->language = 'php';                    $code->code = $codeRow->code;                }            }        }        return parent::getContent();    }}