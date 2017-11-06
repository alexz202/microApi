<?php
namespace ZejiHRProj\Modules\Backend\Controllers;

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        return $this->returnValue();
    }

    public function getAction(){
        $this->_initialize();
        $id=$this->getParamsValue('id','intval',true);
       return $this->returnValue(200,'success',array($id));
    }

}

