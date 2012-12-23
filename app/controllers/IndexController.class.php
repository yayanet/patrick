<?php
class IndexController extends PController
{
    public function index()
    {
        
//         $testList = testModel::getInstance()->getTestList();
//         print_r($testList);
        
//         $yyTestList = testModel::getInstance()->getTestListByName('yy');
//         print_r($yyTestList);

        $this->assign('message', 'Hello Patrick!');
        
        $this->display();
    }
}