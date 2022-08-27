<?php

namespace Nemundo\Content\App\Event\Content\Event;

use Nemundo\Admin\ActionSite\IconActionSite;
use Nemundo\Admin\ActionSite\NewActionSite;
use Nemundo\Admin\Com\Table\AdminTable;
use Nemundo\Admin\Com\Table\AdminTableHeader;
use Nemundo\Admin\Com\Table\Row\AdminTableRow;

use Nemundo\Content\App\Event\Data\Event\EventReader;
use Nemundo\Content\App\Event\Site\VcardSite;
use Nemundo\Content\App\File\Content\Image\ImageType;
use Nemundo\Content\App\Text\Content\LargeText\LargeTextType;
use Nemundo\Content\App\Video\Content\YouTube\YouTubeType;
use Nemundo\Content\Com\Container\ContentTypeFormContainer;
use Nemundo\Content\Com\Dropdown\ContentTypeDropdown;
use Nemundo\Content\Index\Tree\Action\TreeContentAction;
use Nemundo\Content\Index\Tree\Com\Table\ChildTreeTable;
use Nemundo\Content\Parameter\ContentTypeParameter;
use Nemundo\Content\Parameter\DataIdParameter;
use Nemundo\Content\Site\ContentViewSite;
use Nemundo\Content\View\AbstractContentAdmin;
use Nemundo\Web\Action\Site\ActionSite;

class EventAdmin extends AbstractContentAdmin
{

    /**
     * @var ActionSite
     */
    private $contentEditor;

    protected function loadActionSite()
    {

        parent::loadActionSite();

        $this->contentEditor = new IconActionSite($this);
        $this->contentEditor->actionName = 'content-editor';
        $this->contentEditor->title = 'Content Editor';
        $this->contentEditor->iconName = 'info';
        $this->contentEditor->onAction = function () {
            $this->onContentEdit();
        };

    }


    protected function onIndex()
    {

        $table = new AdminTable($this);

        $header = new AdminTableHeader($table);
        $header->addText('Date/Time');
        $header->addText('Event');
        $header->addEmpty();
        $header->addEmpty();

        $reader = new EventReader();
        foreach ($reader->getData() as $eventRow) {

            $row = new AdminTableRow($table);

            $row->addText($eventRow->dateTime->getShortDateTimeLeadingZeroFormat());

            $site = $this->getViewSite($eventRow->id);
            $site->title= $eventRow->event;
            $row->addActionSite($site);

            //$row->addText($eventRow->event);
            //$row->addIconActionSite()




            /* = clone(VcardSite::$site);
            $site->addParameter(new DataIdParameter($eventRow->id));

            $row->addIconSite($site);*/

            //$row->addIconActionSite($this->getEditSite($eventRow->id));


            /*$site = clone($this->contentEditor);
            $site->addParameter(new DataIdParameter($eventRow->id));
            $row->addIconActionSite($site);*/

            $row->addIconActionSite($this->getEditSite($eventRow->id));
            $row->addIconActionSite($this->getDeleteSite($eventRow->id));


        }


    }


    protected function onContentEdit()
    {

        $dataId = (new DataIdParameter())->getValue();

        $item = new EventItem($dataId);
        $contentId = $item->getContentId();

        $action = new TreeContentAction();
        $action->parentId = $contentId;

        //$form = (new ImageType())->getDefaultForm($this);
        //$form->addAction($action);


        $dropdown = new ContentTypeDropdown($this);
        $dropdown->addContentType(new YouTubeType());
        $dropdown->addContentType(new LargeTextType());
        $dropdown->addContentType(new ImageType());


        $parameter = new ContentTypeParameter();
        if ($parameter->hasValue()) {

            //$container = new ContentTypeFormContainer($this);
            //$container->contentType = $parameter->getContentType();
            //$form = (new ImageType())->getDefaultForm($this);

            $form = $parameter->getContentType()->getDefaultForm($this);
            $form->addAction($action);

        }


        $table = new ChildTreeTable($this);
        $table->contentId = $contentId;


    }


}