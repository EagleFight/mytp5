<?php
namespace app\index\controller;

use think\View;

class Index
{
    public function index()
    {
        return view();
    }
    public function nurse(){
        return view();
    }
    public function manager(){
        return view();
    }
    public function zhaopin(){
        return view();
    }
    public function map(){
        return view();
    }
    public function video(){
        $vid = $_GET['vid'];
        $view = new View();
        $view->vid = $vid;
        return $view->fetch();
    }
}
