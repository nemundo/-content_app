<?phpnamespace Nemundo\App\Mail\Page;use Nemundo\Admin\Com\Pagination\AdminPagination;use Nemundo\Admin\Com\Table\AdminTable;use Nemundo\Admin\Com\Table\AdminTableHeader;use Nemundo\Admin\Com\Table\Row\AdminTableRow;use Nemundo\App\Mail\Data\InlineImage\InlineImageReader;use Nemundo\App\Mail\Data\MailQueue\MailQueuePaginationReader;use Nemundo\App\Mail\Parameter\MailParameter;use Nemundo\App\Mail\Site\MailDeleteQueueSite;use Nemundo\App\Mail\Site\MailViewSite;use Nemundo\App\Mail\Template\MailTemplate;use Nemundo\Com\Html\Listing\UnorderedList;use Nemundo\Db\Sql\Order\SortOrder;use Nemundo\Package\Bootstrap\Layout\BootstrapTwoColumnLayout;class MailPage extends MailTemplate{    public function getContent()    {        $layout = new BootstrapTwoColumnLayout($this);        $table = new AdminTable($layout);        $header = new AdminTableHeader($table);        $header->addText('Send Status');        $header->addText('Send Date/Time');        $header->addText('To');        $header->addText('Subject');        $header->addText('Inline Image');        $header->addText('Date/Time');        $header->addEmpty();        $header->addEmpty();        $mailQueueReader = new MailQueuePaginationReader();        $mailQueueReader->addOrder($mailQueueReader->model->id, SortOrder::DESCENDING);        foreach ($mailQueueReader->getData() as $mailQueueRow) {            $row = new AdminTableRow($table);            $row->addYesNo($mailQueueRow->send);            if ($mailQueueRow->send) {                $row->addText($mailQueueRow->dateTimeSend->getShortDateTimeLeadingZeroFormat());            } else {                $row->addEmpty();            }            $row->addText($mailQueueRow->mailTo);            $row->addText($mailQueueRow->subject);            $ul = new UnorderedList($row);            $inlineImageReader = new InlineImageReader();            $inlineImageReader->filter->andEqual($inlineImageReader->model->mailQueueId, $mailQueueRow->id);            foreach ($inlineImageReader->getData() as $inlineImageRow) {                $ul->addText($inlineImageRow->cid . ' ' . $inlineImageRow->filename);            }            $row->addText($mailQueueRow->dateTimeCreated->getShortDateTimeLeadingZeroFormat());            $site = clone(MailViewSite::$site);            $site->addParameter((new MailParameter($mailQueueRow->id)));            $row->addIconSite($site);            $site = clone(MailDeleteQueueSite::$site);            $site->addParameter((new MailParameter($mailQueueRow->id)));            $row->addIconSite($site);        }        $pagination = new AdminPagination($layout);        $pagination->paginationReader = $mailQueueReader;        /*$mailParameter = new MailParameter();        if ($mailParameter->exists()) {            $mailRow = (new MailQueueReader())->getRowById($mailParameter->getValue());            $table = new AdminLabelValueTable($layout->col2);            $table->addLabelValue('Subject', $mailRow->subject);            $table->addLabelValue('To', $mailRow->mailTo);            $container = new HtmlContainer($layout->col2);            $container->addContent($mailRow->text);        }*/        return parent::getContent();    }}