<?phpnamespace Nemundo\Admin\Com\Table;use Nemundo\Com\TableBuilder\TableHeader;use Nemundo\Html\Table\Th;class AdminTableHeader extends TableHeader{    public function addText($label)    {        $th = new Th($this);        $th->content = $label;        $th->nowrap = true;        $th->addCssClass('admin-text-left');        return $this;    }    public function addSorting()    {    }}