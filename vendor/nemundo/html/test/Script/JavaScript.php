<?phprequire '../config.php';$html = new \Nemundo\Html\Document\AbstractHtmlDocument();$h1 = new \Nemundo\Html\Heading\H1($html);$h1->content = 'JavaScript';$script =new \Nemundo\Html\Script\JavaScriptBody($html);$script->addContent('document.write("hello");');/*$function =new \Nemundo\Html\Script\JavaScriptFunction();$function->functionName='loadData';$function->addCodeLine('document.write("hllo2");');$script->addCode($function);*///$script->addCodeLine('loadData();');$script=new \Nemundo\Html\Script\JavaScript();$script->addCodeLine('loadData();');/* * *class ClickEventdocument.getElementById("myBtn").addEventListener("click", displayDate);function displayDate() {    document.getElementById("demo").innerHTML = Date();}*/$html->render();