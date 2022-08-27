<?php

namespace Nemundo\Content\App\Explorer\Content\Container;

use Nemundo\Content\App\Explorer\Data\Container\Container;
use Nemundo\Content\App\Explorer\Data\Container\ContainerUpdate;
use Nemundo\Content\Type\AbstractContentBuilder;
use Nemundo\Core\Debug\Debug;
use Nemundo\Core\Random\UniqueId;

class ContainerBuilder extends AbstractContentBuilder
{

    public $container;

    public $description;


    protected function loadBuilder()
    {
        $this->contentType = new ContainerType();
    }

    protected function onCreate()
    {

        if ($this->dataId === null) {
            $this->dataId = (new UniqueId())->getUniqueId();
        }

        $data = new Container();
        $data->updateOnDuplicate=true;
        $data->id = $this->dataId;
        $data->container = $this->container;
        $data->description = $this->description;
        $data->save();

    }


  /*  protected function onUpdate()
    {

        $update = new ContainerUpdate();
        $update->container = $this->container;
        $update->description = $this->description;
        $update->updateById($this->dataId);

    }*/


}