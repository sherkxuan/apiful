<?php
declare (strict_types = 1);

namespace  Sherk\Tool;

/**
 * 接口返回
 * Class Restful
 * @package app\controller
 */
class Restful
{

    /**
     * @param $code
     * @param null $data
     * @param null $msg
     * @return \think\response\Json
     */
    public function resCode($code,$data=null,$msg=null){
        switch ($code){
            case 200:
                $msgs = 'OK';
                break;
            case 201:
                $msgs = 'Token过期或不存在';
                break;
            case 202:
                $msgs = '用户名或密码错误';
                break;
            case 203:
                $msgs = '用户不存在';
                break;
            case 204:
                $msgs = '该用户被禁止';
                break;
            case 205:
                $msgs = '用户权限不足';
                break;
            case 401:
                $msgs = '请求方式不正确';
                break;
            case 402:
                $msgs = '请求参数不存在';
                break;
            case 403:
                $msgs = '请求参数类型错误';
                break;
            case 404:
                $msgs = '请求地址不存在';
                break;
            case 405:
                $msgs = '接口已关闭';
                break;
            case 406:
                $msgs = '接口调用达到上限';
                break;
            case 407:
                $msgs = '禁止当前IP访问接口';
                break;
            case 408:
                $msgs = '接口调用过于频繁';
                break;
            case 409:
                $msgs = '接口异常,稍后再试';
                break;
            default:
                $msgs = '服务器内部错误';
        }
        return json(['code'=>$code,'data'=>$data,'msg'=>$msgs ?? $msg]);
    }
}
