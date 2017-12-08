<?php
namespace Home\Model;
use Think\Model;
Class RegisterModel extends Model{
	function checkUser($username){
		$liu_user   = D("liu_user");
		$this->where('username',$username)->get();
		
	}

	public function ajaxUsername( $username )
    {
        //判断电话号码是否被注册
        $where['username'] = $username;
        $is     =   $this->where( $where )->find();
        
        if(is_array($is))
        {
            $this->res['info'] = "手机号码已存在";
        }elseif(empty($tel))       
        {
            $this->res['info'] = "手机号码为空";
        }elseif(!preg_match('/^1[0-9]{10}$/', $tel))
        {
            $this->res['info'] = "电话号码格式不正确";
        } else 
        {
            $this->res['info'] = "注册成功";
        }

        return $this->res;
    }
}