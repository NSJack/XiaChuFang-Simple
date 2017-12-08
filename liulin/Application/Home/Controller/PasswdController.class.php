<?php
namespace Home\Controller;
use Think\Controller;
class PasswdController extends BasisController {
    /**
     * 修改密码
     * @Author         刘林
     * @DateTime       2017-07-25
     */
    public function index(){

        $uid = $this->uid;
        $liu_user   = D("User");

        if( IS_POST ){
            $pwd1   = I("post.pwd1");
            $pwd2   = I("post.pwd2");
            $uptime = time();

            //验证规则
            $rule = array(                      
                        array("pwd1","require","密码不能为空"),
                        array("pwd1","pwd2","两次输入的密码不一致",0,"confirm"),
                    );
            
            //判断两次密码输入是否一致
            if( $pwd1 != $pwd2 ){var_dump($pwd1,$pwd2);
                return $this->error( "两次密码输入不一致","/liulin/Home/Passwd/" );
            }

            //插入数据
            $pwd = password_hash($pwd1, PASSWORD_DEFAULT);
            $insert = array(                    
                    'password' => $pwd,
                    'uptime' => $uptime,
                );
            $liu_user->where(['uid'=>$uid])->save( $insert );
            return $this->error( "密码已修改成功，请重新登录","/liulin/Home/Login/" );

        }
 
        $this->display();
       
    }

}