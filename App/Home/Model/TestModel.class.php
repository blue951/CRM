<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017-7-20
 * Time: 0:52
 */
namespace Home\Model;
use Think\Model;

class TestModel extends Model {
    public function getData(){
        return 'TestModel';
    }
}