<?phpnamespace Nemundo\App\Git\Command;class GitCloneCommand extends AbstractGitCommand{    public $gitUrl;    public function getCommandList()    {        $this->clearCommand();        $this->addCommandLine('git clone ' . $this->gitUrl . ' ' . $this->path);        return parent::getCommandList();    }}