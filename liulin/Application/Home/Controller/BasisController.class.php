<?php
namespace Home\Controller;
use Think\Controller;
class BasisController extends Controller {
	/**
	 * 我的厨房的基础类
	 * @Author    刘林
	 * @DateTime  2017-07-19
	 */
    function __construct(){
    	parent::__construct();

        $this->uid = session( 'uid' );//var_dump($this->uid);
        if( $this->uid<1 ){
            return $this->error("请登陆后再访问","/liulin/Home/Login/");
        }
    	
        $User = D("User");
        $liu_info = D("Uinfo");
        $n = $liu_info->where( ['uid'=>$this->uid,] )->find();
        $nickname = $n['nickname'];
        //根据uid查找数据
        $p 	= $User->where( ['uid' => $this->uid,] )->find();
        $this->phone = $p['phone'];

        //将UNIX时间戳转换为日期
        $this->intime = date('Y-m-d', $p['intime']); 

        //拆分手机号，取后四位
        $arr2 = str_split($phone, 7);
        $this->lastnum = $arr2[1];

        //将剪裁过的图片输出到模板作为头像
        $this->h_big = __ROOT__."/Public/head/big/$this->uid.png";
        $this->h_small = __ROOT__."/Public/head/small/$this->uid.png";
        $this->h_larger = __ROOT__."/Public/head/larger/$this->uid.png";
        $this->h_smaller = __ROOT__."/Public/head/smaller/$this->uid.png";
     
        //将头像地址、加入时间、手机尾号输出到模板
        $this->assign('head',$this->h_big);
        $this->assign("headmin",$this->h_small);
        $this->assign('larger',$this->h_larger);
        $this->assign('smaller',$this->h_smaller);
        $this->assign('intime',$this->intime);
        $this->assign('lastnum',$this->lastnum);

        $this->assign('nickname',$nickname);
    }


}