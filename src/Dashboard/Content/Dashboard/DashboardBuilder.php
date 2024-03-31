<?php

namespace Nemundo\Content\App\Dashboard\Content\Dashboard;

use Nemundo\Content\App\Dashboard\Data\Dashboard\Dashboard;
use Nemundo\Content\Type\AbstractContentBuilder;
use Nemundo\Core\Converter\UrlConverter;
use Nemundo\Core\Text\TextConverter;

class DashboardBuilder extends AbstractContentBuilder
{

    public $dashboard;

    public $description = '';

    protected function loadBuilder()
    {
        $this->contentType = new DashboardType();
    }

    protected function onCreate()
    {

        $data = new Dashboard();
        $data->dashboard = $this->dashboard;
        $data->description = $this->description;
        $data->url = (new TextConverter())->convertToUrl($this->dashboard);  // (new UrlConverter())->getText();  // $url;
        //$data->active = $this->active;
        $data->save();

    }

    protected function onUpdate()
    {
    }
}