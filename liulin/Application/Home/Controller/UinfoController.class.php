<?php
namespace Home\Controller;
use Think\Controller;
class UinfoController extends BasisController {
    /**
     * 基本信息设置
     * @Author         刘林
     * @DateTime       2017-07-09
     * uid             [用户ID]
     * nickname        [用户昵称]
     * sex             [性别]
     * description     [个人介绍]
     * YYYY.MM.DD      [年月日]
     * birthday        [生日]
     * hometown        [家乡]
     * province        [省]
     * city            [市]
     * district        [区]
     * nowliving       [现居]
     * carreer         [职业]
     */
    public function index(){
        $uid        = $this->uid;
        $liu_user   = D("User");
        $liu_info   = D("Uinfo");
        //POST接收模板表单传过来的数据
        if( IS_POST ){

            $uid         = $this->uid;
            $nickname    = I("post.nickname");
            $sex         = I("post.sex");
            $description = I("post.description");
            $YYYY        = I("post.YYYY");
            $MM          = I("post.MM");           
            $DD          = I("post.DD");            
            $hometown    = I("post.hometown");
            $nowliving   = I("post.nowliving");
            $carreer     = I("post.carreer"); 
            $intime      = time(); 

            $birthday    = $YYYY."-".$MM."-".$DD;
            //更新的内容
            $insert = array(
                    'uid'           =>      $uid,
                    'nickname'      =>      $nickname,
                    'sex'           =>      $sex,
                    'description'   =>      $description,
                    'birthday'      =>      $birthday,
                    'hometown'      =>      $hometown,
                    'nowliving'     =>      $nowliving,
                    'carreer'       =>      $carreer,
                    'intime'        =>      $intime,
                );
            //更新的条件
            $where = array(
                    'uid' => $uid,
                );
            //对数据进行更新
            $liu_info->where( $where )->save( $insert );
            //跳转到当前页，刷新页面 
            return $this->redirect("/Home/Uinfo/index"); 

        }
        //根据uid查找数据库中相对应的数据
        $select   = $liu_info->where( ['uid' => $uid] )->find();
        $birthday = $select['birthday'];

        $Ymd = explode("-",$birthday);
        //拆分生日（ 年月日 ）
        $Y = $Ymd[0];
        $m = $Ymd[1];
        $d = $Ymd[2]; 

        $this->assign('Y',$Y);
        $this->assign('m',$m);
        $this->assign('d',$d);

        //将查找到的数据输出到模板
        $this->assign($select);
        $this->display();
    }


   
}