<?php
namespace app\admin\controller;

use think\facade\Config;

class User
{
    public function get(){
        // 获取所有的配置
        dump(Config::get());
        // 获取app的胚子
        // dump(Config::get('app.'));
        // 仅仅获取一级配置
        // dump(Config::pull('app'));
        // dump(Config::get('database.hostname'));
    }
    
    public function set(){
        // 动态配置
        // dump(Config::set('app_debug',false));
    }

    public function helper(){
        // 助手函数不依赖Config
        dump(config());
    }
}