<?php

namespace ZejiHRProj\Lib;
/**
 * Created by PhpStorm.
 * User: zjy202
 * Date: 2017/11/3
 * Time: 10:38
 */
class Sign{
    private $key='test123';
    private $isCheck=1;

    public function __construct($isCheck,$key=null)
    {
        if($key)
            $this->key=$key;
        $this->isCheck=$isCheck;
    }


    public function checkSign($data,$sign){
        if($this->isCheck==1){
            $createSign=$this->makeSign($data);
            if($createSign==$sign)
                return true;
            else
                return false;
        }else
            return true;
    }

    public function makeSign($data){
        ksort($data);
        $str='';
        foreach ($data as $k=>$v){
            if($str=='')
                $str="$k=$v";
            else
                $str.="&$k=$v";
        }
        return md5($str.'+'.$this->key);
    }


}