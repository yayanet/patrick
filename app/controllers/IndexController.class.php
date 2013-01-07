<?php
class IndexController extends PController
{
    public function index($name = 'Patrick')
    {
        
//         $testList = testModel::getInstance()->getTestList();
//         print_r($testList);
        
//         $yyTestList = testModel::getInstance()->getTestListByName('yy');
//         print_r($yyTestList);

        $this->assign('message', "Hello {$name}!");
        
        $this->display();
    }
}