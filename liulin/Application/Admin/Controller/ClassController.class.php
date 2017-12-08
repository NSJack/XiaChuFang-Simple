<?php
namespace Admin\Controller;
use Think\Controller;
/**
 * 分类后台分类AJAX增删改查
 * @Author    刘林
 * @DateTime  2017-10-07
 */
class ClassController extends Controller {

	//将查询数据返回页面
    public function index(){

    	$liu_class = D("liu_class");

		$item = $liu_class->select();
		$this->assign('item',$item);

		//分页
		$where = "parentid>=0";
        $count = $liu_class->where($where)->count();
        $p = getpage($count,10);
        $list = $liu_class->field(true)->limit($p->firstRow, $p->listRows)->select();
        $this->assign('item', $list); // 赋值数据集
        $this->assign('page', $p->show()); // 赋值分页输出

        $this->display();
    }

    public function class_get(){

    	//AJAX返回
    	$classid = I("post.classid");
		$liu_class = D("liu_class");
		
		$data = $liu_class->where(['classid'=>$classid])->find();
		$this->ajaxReturn($data);
    }

    //分类添加和修改
    public function class_add(){

    	$liu_class = D("liu_class");

    	if( IS_POST ){
    		
    		$classid = I("post.classid");
	    	$parentid  = I("post.pid");
	    	$classname = I("post.classname");

	    	$insert = array(
	    		'classid' => $classid,
		     	'parentid' => $parentid,
		     	'classname' => $classname,
		    );


		    if( $classid>0 ){
		    	//classid有值，则修改
	        	$liu_class->where(['classid'=>$classid])->save($insert);
	        	$arr = $liu_class->where(['classid'=>$classid])->find();
	        }else{
	        	//classid为空，则添加
	        	$add = $liu_class->add($insert);
	        	$arr = $liu_class->where(['classid'=>$add])->find();
	        }

	        $this->assign('arr',$arr);

	    	
    	}


        $this->display();
    }

    //分类删除
    public function class_delete(){

    	$classid = I("post.classid");
		$liu_class = D("liu_class");
		
		$data = $liu_class->where(['classid'=>$classid])->delete();
		$this->redirect('Admin/Class/class_add',1);
    }

}