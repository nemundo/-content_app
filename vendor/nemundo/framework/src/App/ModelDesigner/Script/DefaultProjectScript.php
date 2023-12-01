<?phpnamespace Nemundo\App\ModelDesigner\Script;use Nemundo\App\ModelDesigner\ModelDesignerConfig;use Nemundo\App\ModelDesigner\Project\DefaultProject;use Nemundo\App\Script\Type\AbstractConsoleScript;use Nemundo\Core\Console\ConsoleInput;use Nemundo\Core\Debug\Debug;class DefaultProjectScript extends AbstractConsoleScript{    protected function loadScript()    {        $this->scriptName = 'default-project';    }    public function run()    {        $project = (new DefaultProject())->getDefaultProject();        (new Debug())->write('Default Project: ' . $project->project);        (new Debug())->write('---');        $n = 1;        $projectList = [];        foreach ((new ModelDesignerConfig())->getProjectCollection()->getProjectList() as $project) {            $projectList[$n] = $project->getClassName();            (new Debug())->write($n . '.    ' . $project->project . ' (' . $project->namespace . ')');            $n++;        }        $input = new ConsoleInput();        $input->message = 'Change Project';        $input->defaultValue = 0;        $number = $input->getValue();        if (isset($projectList[$number])) {            (new DefaultProject())->setDefaultProject($projectList[$number]);            (new Debug())->write('Change to ' . $projectList[$number]);        } else {            (new Debug())->write('No change');        }    }}