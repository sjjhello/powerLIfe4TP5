<?php
namespace app\admin\controller;

use think\Controller;

class Missions extends Base
{
    public function add()
    {
        //halt(session(config('admin.session_user'), '', config('admin.session_user_scope')));
        return $this->fetch();
    }

    public function welcome() {
        return "hello api-admin";
    }
}
