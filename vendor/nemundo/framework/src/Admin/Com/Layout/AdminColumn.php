<?php


namespace Nemundo\Admin\Com\Layout;


use Nemundo\Html\Block\Div;

class AdminColumn extends Div
{

    public function getContent()
    {
        $this->addCssClass('nemundo-column');
        return parent::getContent(); // TODO: Change the autogenerated stub
    }

}