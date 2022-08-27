<?php

namespace Nemundo\Content\App\Event\Content\Event;

use Nemundo\Admin\Com\ListBox\AdminDateTimePicker;
use Nemundo\Admin\Com\ListBox\AdminLargeTextBox;
use Nemundo\Admin\Com\ListBox\AdminTextBox;
use Nemundo\Content\App\Event\Data\Event\EventModel;
use Nemundo\Content\Form\AbstractContentForm;

class EventForm extends AbstractContentForm
{

    /**
     * @var AdminDateTimePicker
     */
    private $dateTime;

    /**
     * @var AdminTextBox
     */
    private $event;

    /**
     * @var AdminLargeTextBox
     */
    private $description;


    public function getContent()
    {

        $model = new EventModel();

        $this->dateTime = new AdminDateTimePicker($this);
        $this->dateTime->label = $model->dateTime->label;
        $this->dateTime->validation = true;
        //$this->dateTime->value = (new DateTime())->setNow()->getIsoDateTime();

        $this->event = new AdminTextBox($this);
        $this->event->label = $model->event->label;
        $this->event->validation = true;

        $this->description = new AdminLargeTextBox($this);
        $this->description->label = $model->description->label;

        return parent::getContent();

    }


    protected function loadUpdateForm()
    {

        $eventRow = (new EventItem($this->dataId))->getDataRow();

        $this->dateTime->value = $eventRow->dateTime->getIsoDateTime();
        $this->event->value = $eventRow->event;
        $this->description->value = $eventRow->description;

    }


    protected function onSave()
    {

        $builder = new EventBuilder($this->dataId);
        $builder->dateTime = $this->dateTime->getDateTime();
        $builder->event = $this->event->getValue();
        $builder->description = $this->description->getValue();
        $builder->addActionList($this->getActionList());
        $builder->buildContent();

    }

}