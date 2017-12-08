<?php
namespace Test\Controller;
use Think\Controller;
class AjaxController extends Controller {

	public function get(){

		$id = I("post.id");
		$ajax = D("ajax");
		
		$data = $ajax->where(['id'=>$id])->find();//var_dump($data);
		$this->ajaxReturn($data);
		//return $data;
	}

    public function index(){

    	$ajax = D('ajax');

    	$data = $ajax->select();
    	$this->assign('data',$data);
        
        $this->display();
    }

    public function serve(){

    	$ajax = D('ajax');
        
        $user = I("post.user");
        $intro = I("post.intro");
        $id = I("post.id");

        $insert = array(
        		'user' => $user,
        		'intro' => $intro,
        	);

        if( $id>0 ){
        	$ajax->where(['id'=>$id])->save($insert);
        	$arr = $ajax->where(['id'=>$id])->find();
        }else{
        	$add = $ajax->add($insert);
        	$arr = $ajax->where(['id'=>$add])->find();
        }

        $this->assign('arr',$arr);

        $this->display();

    }
}