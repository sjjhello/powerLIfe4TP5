<?php
namespace app\admin\controller;

use think\Controller;

class Image extends Base
{
    public function upload()
    {
        //后台图片上传
        $data = [
        	'status' => 1,
        	'message' => 'OK',
        	'data' => 'http://img1.xcarimg.com/exp/2872/2875/2937/20101220130509576539.jpg'
        ];

        echo json_encode($data);
    }

}
