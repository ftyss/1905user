<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\CommonModel;

class IndexController extends Controller
{
    /**
     * 注册
     */
    public function reg()
    {
        $reg_info = [
            'name'  => 'zhang',          // 用户名
            'email' => 'zhang@qq.com',
            'mobile'    => '11111111111',
            'pass1'     => '123',
            'pass2'     => '123',
        ];
        // print_r($reg_info);die;
        //请求passport 注册接口
        //$url = 'http://passport1905.com/api/user/reg';
        $url = 'http://passport.fangtaoys.com/api/user/reg';
        // echo $url;die;
        $response = CommonModel::curlPost($url,$reg_info);
        // print_r($response);die;
        echo '<pre>';print_r($response);echo '</pre>';
    }
    public function login()
    {
        $login_info = [
            'name'  => 'zhang',
            'pass'  => '123',
        ];
        //请求passport 登录接口
        //$url = 'http://passport1905.com/api/user/login';
        $url = 'http://passport.fangtaoys.com/api/user/login';
        $response = CommonModel::curlPost($url,$login_info);
        echo '<pre>';print_r($response);echo '</pre>';
    }
    public function getData()
    {
        $token = '0e062b347988008ab252';
        $uid = 1;
        //请求passport 获取数据接口
        //$url = 'http://passport1905.com/api/show/time';
        $url = 'http://passport.fangtaoys.com/api/show/time';
        $header = [
            'token:'.$token,
            'uid:'.$uid
        ];
        $response = CommonModel::curlGet($url,$header);
    }



}
