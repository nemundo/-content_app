<?phpnamespace Nemundo\App\Git\Command;class GitTagCommand extends AbstractGitCommand{    public $tag;    public function getCommandList()    {        $this->clearCommand();        $this->addCommandLine('cd ' . $this->path);        $this->addCommandLine('git tag ' . $this->tag);        $this->addCommandLine('git push --tags');        return parent::getCommandList();    }}