<?php
namespace Home\Controller;
use Think\Controller;
class RegisterController extends Controller {
	/**
     * 用户注册
	 * @Author    刘林
	 * @DateTime  2017-06-18
	 * @param  liu_code  验证码数据表   
	 */
    public function index(){

        $liu_user   = D("User");
        $liu_code   = D("liu_code");
        $liu_info   = D("Uinfo");

        if($_POST){
            $username   = I("post.username");
            $password   = I("post.password");
            $password2  = I("post.password2");
            $phone      = I("post.phone");
            $code       = I("post.code");
            $intime     = time();

            //验证规则
            $rule = array(
                        array("username","require","用户名不能为空"),
                        array("password","require","密码不能为空"),
                        array("phone","/^1[0-9]{10}$/","手机号不不合法",0,"regex"),
                        array("code","/^[0-9]{4}$/","验证码不能为空",0,"regex"),
                        array("password","password2","两次输入的密码不一致",0,"confirm"),
                    );
            //验证
            if ( !$liu_user->validate( $rule )->create() ) {
                    return $this->error( $liu_user->getError(),__ROOT__."/Home/Register/" );
                }
            
            $where = array();
            $where['username']  = $username;
            //判断用户名是否已存在
            $isArr = $liu_user->where( $where )->find();
            if( $isArr ){
                return $this->error( "用户名已存在",__ROOT__."/Home/Register/" );
            }
            //判断两次密码输入是否一致
            if( $password != $password2 ){
                return $this->error( "两次密码输入不一致",__ROOT__."/Home/Register/" );
            }


            $row = array();
            $row['phone'] = $phone;
            $row['code']  = $code;
            //判断手机号和密码是否正确
            $isArrT = $liu_code->where( $row )->find();
            if ( !$isArrT ) {
                return $this->error( "手机号或验证码错误",__ROOT__."/Home/Register/" );
            }
            
            //插入数据
            $password = password_hash($password, PASSWORD_DEFAULT);
            $insert = array(
                    'username' => $username,
                    'password' => $password,
                    'phone'    => $phone,
                    'intime'   => $intime,
                );
            $uid = $liu_user->add( $insert );

            if( $uid>0 ){
                //登录成功将uid写入session
                session("uid",$uid);
                $p  = $liu_user->where( ['uid' => $uid,] )->find();
                $phone = $p['phone'];
                //拆分手机号，取后四位
                $arr = str_split($phone, 7);
                $lastnum = $arr[1];
                $nickname = "手机用户".$lastnum;
                $first = __ROOT__."/Public/head/big/first.png";
                $ins = array(
                    'uid' => $uid,
                    'nickname' => $nickname,
                    'avatar' => $first,
                    'birthday' => '20170921'
                );var_dump($ins);
                $liu_info->add( $ins );
                return $this->success( "注册成功",__ROOT__."/Home/Auser/" );
            }else{
                return $this->error( "注册失败",__ROOT__."/Home/Register/" );
            }

            
        }
      
        $this->display();
    }
    /**
     * 用户名唯一性验证  AJAX
     * @Author    刘林
     * @DateTime  2017-06-22    
     */
    public function Register_username(){
        $username    =   I('post.username');
        $liu_user    =   D('liu_user');
        $data = array();

        $where = array();
        $where['username']  = $username;
        //判断用户名是否已存在
        $isArr = $liu_user->where( $where )->find();
        if( $isArr ){
            $data['status'] = 0;
        }else{
            $data['status'] = 1;
        }

        //返回JSON格式
        $this->ajaxReturn( $data );
    }
    
}