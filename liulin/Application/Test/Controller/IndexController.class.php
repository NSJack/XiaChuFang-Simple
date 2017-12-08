<?php
namespace Test\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function index(){
    	
        $class = D("class");

        $all = $class->select();

		$items = array();

		$tree = [];

		foreach ($all as $k => $v) {
			$items[$v['id']] = $v;
		}

		foreach ($items as $k => $item) {

			$items[$item['pid']]['son'][$item['id']] = &$items[$item['id']];
		}

		$tree = $items[0]['son'];

		function a( $tree,&$result = array(),$level = 0 ){

			if( is_array( $tree ) ){
				$level++;
				foreach ($tree as $id => $data) {
					$data['level'] = $level;
					$result[$id] = $data;
					if( isset( $data['son'] ) ){
						a( $data['son'],$result,$level );
						unset( $result[$id]['son'] );
					}
				}
				$level = 0;
			}
			return $result;

		}

		$newtree = a($tree);
		//var_dump($newtree);

		$this->assign('newtree',$newtree);
		$this->assign('tree',$tree);
		$this->assign('all',$all);

		$this->display();

    }

    public function list_to_tree($list, $pk = 'id', $pid = 'pid', $child = '_child', $root=0) {  
    
	    $tree = array();// 创建Tree  
	    if(is_array($list)) {  
	        // 创建基于主键的数组引用  
	        $refer = array();  
	        foreach ($list as $key => $data) {  
	            $refer[$data[$pk]] =& $list[$key];  
	        }  
	          
	        foreach ($list as $key => $data) {  
	            // 判断是否存在parent  
	            $parentId = $data[$pid];  
	            if ($root == $parentId) {  
	                $tree[$data[$pk]] =& $list[$key];  
	            }else{  
	                if (isset($refer[$parentId])) {  
	                    $parent =& $refer[$parentId];  
	                    $parent[$child][] =& $list[$key];  
	                }  
	            }  
	        }  
	    }  
	    return $tree;  
	}  

	/*
		*/
		//
}