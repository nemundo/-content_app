<?phpnamespace Nemundo\App\Calendar\Parameter;use Nemundo\Web\Parameter\AbstractUrlParameter;class MonthParameter extends AbstractUrlParameter{    protected function loadParameter()    {        $this->parameterName = 'month';    }}