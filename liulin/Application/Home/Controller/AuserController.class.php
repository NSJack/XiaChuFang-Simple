<?php
namespace Home\Controller;

class AuserController extends BasisController {
    /**
     * 我的厨房
     * @Author    刘林
     * @DateTime  2017-07-16
     */

    public function index(){

        $this->display();

    }
    //我的厨房-留言板
    public function message(){
        
        $uid = $this->uid;
        $intime = time();
        $liu_info = D( "Uinfo" );
        $liu_msg = D("Message");

        $content = I("post.content");
        //插入数据库的键值对
        $insert = array(
                'uid' => $uid,
                'content' => $content,
                'intime' => $intime,
            );
        //如果内容不为空就将其插入数据库
        if( !empty($content) ){
            $liu_msg->add( $insert );
        }
        
        $m = $liu_info->where( ['uid' => $uid,] )->find();
        $nickname = $m['nickname'];
        //根据uid查询用户留言，倒序查询，限制5条
        $rows = $liu_msg->where( ['uid'=>$uid,] )->order("gid desc")->limit('5')->select();
        $content = $rows['content'];

        $this->assign('rows',$rows);
        $this->assign('nickname',$nickname);
        $this->assign('content',$content);

        $this->display();
    }

    //我的厨房-菜谱
    public function dish(){

        $uid          = $this->uid;
        $liu_dish     = D("Dish");

        $did = I("get.did");

        //倒序查询到当前用户所有的菜谱
        $dishFind  = $liu_dish->where(['uid'=>$uid])->order('did desc')->select();

        //获取二维数组中did值的集合
        $arr = array_column($dishFind, 'did');

        $this->assign('dishFind',$dishFind);
        $this->assign('arr',$arr);

        $this->display();
    }

    //我的厨房-概况
    public function profile(){

        $uid          = $this->uid;
        $liu_dish     = D("Dish");

        $did = I("get.did");

        //倒序查询到当前用户所有的菜谱
        $dishFind  = $liu_dish->where(['uid'=>$uid])->order('did desc')->select();
        
        //获取二维数组中did值的集合
        $arr = array_column($dishFind, 'did');

        $this->assign('dishFind',$dishFind);
        $this->assign('arr',$arr);

        $this->display();
    }
} 