<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2018/7/4
 * Time: 11:09
 */

namespace app\admin\controller;


use think\Controller;
use think\Db;

class Home extends Controller
{
    protected function _initialize(){
        $system = Db::table('system_menu');
        $menu = $system->where('pid',0)->column('id,title,url');
        $pids = array_keys($menu);
        $option = Db::table('system_menu')->where('pid','in',$pids)->field('id,pid,title,url')->select();
        foreach ($menu as $key=>$val){
            foreach ($option as $k=>$v){
                if($val['id']==$v['pid']){
                    $menu[$key]['option'][] = $v;
                }
            }
        }
//        dump($menu);exit();
        $this->assign('menu',$menu);
    }
}