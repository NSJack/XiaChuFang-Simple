<?php
namespace Admin\Controller;
use Think\Controller;
class BasisController extends Controller {
	/**
	 * 登录以后的基础类
	 * @Author    刘林
	 * @DateTime  2017-07-19
	 */
    function __construct(){
    	parent::__construct();

    	$this->uid = session( 'uid' );
    	if( $this->uid<1 ){
    		return $this->error("请登陆后再访问","/liulin/Admin/Login/");
    	}
    }


}