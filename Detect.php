<?php

namespace dkeeper\mobiledetect;

use \yii\base\Component;
use \mobiledetect\mobiledetect;

class Detect extends \yii\base\Component
{
    protected $_mobiledetect;

    public function init(){
        parent::init();
        $this->_mobiledetect = new \Mobile_Detect();
    }

    public function __call($name,$arguments){
        return call_user_func_array(array($this->_mobiledetect, $name), $arguments);
    }
}
