<?phpnamespace Nemundo\App\Git\Command;use Nemundo\Core\Command\AbstractLocalCommand;use Nemundo\Core\Type\Text\Text;class GitCommit extends AbstractGitCommand  // AbstractLocalCommand{    //public $path;    protected function loadCommand()    {    }    public function runCommand()    {        $drive = (new Text($this->path))->getSubstring(0, 2);        $this->addCommandLine($drive);        $this->addCommandLine('cd ' . $this->path);        $this->addCommandLine('git add *');        $this->addCommandLine('git update-index --chmod=+x deploy');        $this->addCommandLine('git update-index --chmod=+x install');        $this->addCommandLine('git commit -m "."');        //$this->addCommand('git push');        return parent::runCommand();    }}