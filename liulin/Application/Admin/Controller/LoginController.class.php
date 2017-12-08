<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
	/**
     * 用户登录
	 * @Author    刘林
	 * @DateTime  2017-06-18
     * @param liu_log  用户登录日志 
	 */
    public function index(){

    	if ( $_POST ) {
    		$username = I("post.username");
    		$password = I("post.password");
            $liu_user = D('liu_admin');
            $liu_log  = D("liu_log");

            $where = array(
                'username' => $username,
            );
            //根据用户名查询到对应用户
            $user = $liu_user->where( $where )->find();
            $hash = $liu_user->where( $where )->field('password')->find();
            //验证密码
            $is = password_verify( $password,$hash['password']); 
            //密码是否一致
            if ( !$is ){
                    return $this->error("用户名或密码错误",__ROOT__."/Admin/Login/");
                }

            $intime = time();
            //登录失败，写入用户登录日志
            if( $user == false ){

                $insert = array(
                    'uid'      => $user['uid'],
                    'success'  => 0,
                    'intime'   => $intime,
                );
                
                $liu_log->add( $insert );

                return $this->error("用户名或密码错误",__ROOT__."/Admin/Login/");
            }else{
                //登陆成功，写入用户登录日志
                $insert = array(
                    'uid'      => $user['uid'],
                    'success'  => 1,
                    'intime'   => $intime,
                );
                
                $liu_log->add( $insert );
                session("uid",$user['uid']);

                return $this->success("登录成功",__ROOT__."/Admin/Admin/");

                 
                 
            }
            
    		
    	}
        $this->display();
    }
}