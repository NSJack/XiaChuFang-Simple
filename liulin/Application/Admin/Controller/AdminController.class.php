<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends BasisController {
    public function index(){
        $this->display();
    }

    public function add_class(){
        
        if( $_POST ){

        	$liu_class = D("liu_class");
        	
        	$class_first = I("post.class_first");
/*
        	//验证规则
            $rule = array(
                        array("class_first","require","分类名不能为空"),
                    );
            //验证
            if ( !$liu_class->where( $rule )->create() ) {
                return $this->error( $liu_class->getError(),__ROOT__."/Admin/Admin/" );
            }
*/
            $classid = $liu_class->add(['classname'=>$class_first]);var_dump($classid);

            if( $classid>0 ){
            	return $this->success( "更新成功",__ROOT__."/Admin/Admin/" );
            }else{
            	return $this->error( "更新失败",__ROOT__."/Admin/Admin/" );
            }

        }
    }

    //添加一级分类
    public function first_add(){

        $liu_class = D("liu_class");

        $data_class = $liu_class->select();

        //$cname = array_column();
        
        $this->assign('data_class',$data_class);

        if( $_POST ){

            
            
            $class_first = I("post.class_first");

            if (empty($class_first)) {
                return $this->error( "分类名不能为空",__ROOT__."/Admin/Admin/first_add",0 );
            }

            $classid = $liu_class->add(['classname'=>$class_first]);

            if( $classid>0 ){

                return $this->redirect( "/Admin/Admin/first_add" );
            }else{
                return $this->redirect( "/Admin/Admin/first_add" );
            } 

        }
        $this->display();
    }
}