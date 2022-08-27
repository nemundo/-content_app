<?php

namespace Nemundo\Content\App\Stream\Com\Container;

use Nemundo\Admin\Com\Card\AdminCard;
use Nemundo\Admin\Com\Layout\AdminFlexboxLayout;
use Nemundo\Admin\Com\Pagination\AdminPagination;
use Nemundo\Content\App\Stream\Data\Stream\StreamPaginationReader;
use Nemundo\Content\Builder\ContentBuilder;
use Nemundo\Db\Sql\Order\SortOrder;
use Nemundo\Html\Block\Div;
use Nemundo\Html\Paragraph\Paragraph;

class StreamContainer extends AdminFlexboxLayout
{

    public function getContent()
    {

        $streamReader = new StreamPaginationReader();
        $streamReader->model->loadUser();
        $streamReader->model->loadContent();
        $streamReader->model->content->loadContentType();
        $streamReader->addOrder($streamReader->model->id, SortOrder::DESCENDING);


        $p=new Paragraph($this);
        $p->content= $streamReader->getTotalCount(). ' items found';



        foreach ($streamReader->getData() as $streamRow) {

            $card = new AdminCard($this);
            $card->cardTitle = $streamRow->content->subject . ' ' . $streamRow->dateTime->getShortDateTimeLeadingZeroFormat();

            if ($streamRow->hasMessage) {

                $p = new Paragraph($card);
                //$p->content = $streamRow->dateTime->getShortDateTimeLeadingZeroFormat();
                $p->content = $streamRow->message;

            }

            (new ContentBuilder($streamRow->contentId))->getDefaultView($card);

        }

        //$streamReader->getTotalCount()


        $pagination = new AdminPagination($this);
        $pagination->paginationReader = $streamReader;


        //$pagination
        //$pagination->count=100;

        return parent::getContent();

    }

}