<?php
// +----------------------------------------------------------------------
// | Sworm [Version: 1.0.0]
// +----------------------------------------------------------------------
// | Copyright (c) 2017 http://dizy.club All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://opensource.org/licenses/MIT )
// +----------------------------------------------------------------------
// | Author: Dizy <derzart@gmail.com>
// +----------------------------------------------------------------------
namespace SwormApplication;
//------------------------
// Sworm In Expression
//-------------------------
class Sworm_In extends Sworm_Abstract
{
    protected $mArray;
    /**
     * Sworm_In constructor.
     */
    public function __construct($array)
    {
        $this->mArray = $array;
    }

    public function _get(){
        $ins = "";
        if(is_array($this->mArray)){
            foreach ($this->mArray as $item){
                $ins .= "'$item', ";
            }
            if($ins!=""){
                $ins = substr($ins, 0, -2);
            }
        }else{
            $ins = $this->mArray;
        }
        return " IN (".$ins.")";
    }
}