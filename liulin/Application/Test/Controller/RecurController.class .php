<?php
namespace Test\Controller;
use Think\Controller;
class RecurController extends Controller {
	
    public function index(){
        
        $class = D("class");

		$items = array();

		while( $row =$res->fetch_array(MYSQLI_ASSOC) ){
			$items[$row['id']] = $row;
		}

		$tree = [];

		foreach ($items as $k => $item) {
			$items[$item['pid']]['son'][$item['id']] = &$items[$item['id']];
		}

		$tree = $items[0]['son'];

		//var_dump($tree);

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
		var_dump($newtree);
    }
}