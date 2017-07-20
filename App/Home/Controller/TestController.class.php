<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017-7-20
 * Time: 0:41
 */
namespace Home\Controller;
use Think\Controller;

class TestController extends Controller{
    public function index() {
        $this->display();
        //echo 123;
        //echo D('Test')->getData();   //D()可以调用model里的getData()
    }
}