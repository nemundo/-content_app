<?phpnamespace Nemundo\App\Script\Parameter;use Nemundo\Web\Parameter\AbstractUrlParameter;class ScriptParameter extends AbstractUrlParameter{    protected function loadParameter()    {        $this->parameterName = 'script';    }}