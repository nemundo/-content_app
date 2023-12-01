<?phpnamespace Nemundo\Content\Index\Tree\Action;use Nemundo\Admin\Com\Layout\AdminFlexboxLayout;use Nemundo\Admin\Com\Title\AdminSubtitle;use Nemundo\Content\Action\AbstractActionView;use Nemundo\Content\App\Text\Content\LargeText\LargeTextType;use Nemundo\Content\App\Text\Content\Text\TextType;use Nemundo\Content\Com\Dropdown\ContentTypeDropdown;use Nemundo\Content\Index\Tree\Com\Form\ContentTreeAttachmentForm;use Nemundo\Content\Index\Tree\Com\Table\ChildTreeTable;use Nemundo\Content\Index\Tree\Com\Table\ParentTreeTable;use Nemundo\Content\Index\Tree\Site\TreeContentNewSite;use Nemundo\Content\Parameter\ContentParameter;use Nemundo\Content\Reader\ContentTypeDataReader;class TreeActionView extends AbstractActionView{    public function getContent()    {        // attach to        $layout = new AdminFlexboxLayout($this);        $subtitle = new AdminSubtitle($layout);        $subtitle->content = 'Parent';        $dropdown = new ContentTypeDropdown($this);        $reader=new ContentTypeDataReader();        foreach ($reader->getData() as $contentTypeRow) {            $dropdown->addContentType($contentTypeRow->getContentType());        //$dropdown->addContentType(new LargeTextType())->addContentType(new TextType());        }        $dropdown->redirectSite = clone(TreeContentNewSite::$site);        $dropdown->redirectSite->addParameter(new ContentParameter());        //$dropdown->redirectSite->addParameter(new UrlRefererParameter());        $table = new ParentTreeTable($layout);        $table->contentId = $this->contentId;        $subtitle = new AdminSubtitle($layout);        $subtitle->content = 'Child';        $table = new ChildTreeTable($layout);        $table->contentId = $this->contentId;        /*$container = new ContentTreeAttachmentForm($layout);        $container->contentId = $this->contentId;*/        /*$table = new AdminTable($this);        $header = new AdminTableHeader($table);        $header->addText('Subject');        $reader = new ParentContentReader();        $reader->contentId = $this->contentId;        foreach ($reader->getData() as $contentRow) {            $row = new AdminTableRow($table);            //$row->addText($contentRow->subject);            $site = clone(ContentViewSite::$site);            $site->title = $contentRow->subject;            $site->addParameter(new ContentParameter($contentRow->id));            $row->addSite($site);        }        $form = new ParentAttachmentForm($this);        $form->contentId = $this->contentId;        $subtitle = new AdminSubtitle($this);        $subtitle->content = 'Child';        $table = new AdminTable($this);        $header = new AdminTableHeader($table);        $header->addText('Subject');        $reader = new ChildContentReader();        $reader->contentId = $this->contentId;        foreach ($reader->getData() as $contentRow) {            $row = new AdminTableRow($table);            //$row->addText($contentRow->subject);            $site = clone(ContentViewSite::$site);            $site->title = $contentRow->subject;            $site->addParameter(new ContentParameter($contentRow->id));            $row->addSite($site);        }        $form = new ContentTreeAttachmentForm($this);        $form->contentId = $this->contentId;        /*$table =new ParentTreeTable($this);        $table->contentType = $this->contentId;        $form=new ContentTreeAttachmentForm($this);        $form->content= $this->contentId;        $table = new ChildTreeTable($this);        $table->contentType = $this->contentId;        /*$table->redirectSite = clone(TreeSite::$site);        $table->redirectSite->addParameter(new ApplicationParameter());        $table->redirectSite->addParameter(new ContentTypeParameter());*/        return parent::getContent();    }}