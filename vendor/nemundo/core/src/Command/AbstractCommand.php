<?phpnamespace Nemundo\Core\Command;use Nemundo\Core\Base\AbstractBase;abstract class AbstractCommand extends AbstractBase{    public $label;    public $command;    private $commandLineList = [];    protected function loadCommand() {    }    public function __construct() {        $this->loadCommand();    }    public function addCommandLine($command)    {        $this->commandLineList[] = $command;        return $this;    }    public function clearCommand() {        $this->commandLineList= [];        return $this;    }    public function addCommand(AbstractCommand $cmd) {        foreach ($cmd->getCommandList() as $line) {            $this->addCommandLine($line);        }        return $this;    }    // getCommandList    public function getCommandList() {        return $this->commandLineList;    }    public function getCmdText() {        $text = join(PHP_EOL, $this->getCommandList());        return $text;    }    public function getChainedCommand() {        //$newCommand = join(' && ', $this->commandLineList);        $newCommand = join(' && ', $this->getCommandList());        return $newCommand;    }}