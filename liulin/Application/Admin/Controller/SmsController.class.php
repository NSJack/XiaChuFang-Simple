<?php
namespace Admin\Controller;
use Think\Controller;

class SmsController extends Controller {
    /**
     * 阿里大于短信发送
     * 验证码存库
     * @Author    刘林
     * @DateTime  2017-06-23
     */

    public function send(){
        $username = I("post.username");
        $phone    = I("post.phone");
        $intime   = time();
        //验证码有效时间
        $savetime = $intime+60;

        $liu_code = D('liu_code');

        Vendor('Alidayu.TopSdk','','.php');
        $code=rand(1000,9999);
        //如果超时，则重新发送
        if( $intime > $savetime ){

            $this->send();
        }
        //验证码存库
        $insert = array(
                'phone'     =>  $phone,
                'code'      =>  $code,
                'intime'    =>  $intime,
                'savetime'  =>  $savetime,
            );
        //存入数据库
        $liu_code->add( $insert );
        //手动加载阿里大于第三方类库
        import("Vendor.alidayu.top.TopClient");
        import("Vendor.alidayu.top.RequestCheckUtil");
        import('Vendor.alidayu.top.ResultSet');
        import('Vendor.alidayu.top.TopLogger');
        import('Vendor.alidayu.top.request.AlibabaAliqinFcSmsNumSendRequest');

        $appkey = '23804144';
        $secret = '30bd839451be002c36ad4c7172bc2ca9';
        //$c = new \Vendor\alidayu\top\TopClient;
        $c = new \TopClient;
        $c->appkey = $appkey;
        $c->secretKey = $secret;
        $c->format = 'json';


        $req = new \AlibabaAliqinFcSmsNumSendRequest;
        $req->setExtend($code);
        $req->setSmsType('normal');
        $req->setSmsFreeSignName('刘先生'); //发送的签名
        $req->setSmsParam('{"code":"'.$code.'","username":" '.$username.' "}');//根据模板进行填写
        $req->setRecNum($phone);//接收着的手机号码
        $req->setSmsTemplateCode('SMS_67226403');
        $resp = $c->execute($req);
        
        $this->ajaxReturn( $code );
         
    }



   
}