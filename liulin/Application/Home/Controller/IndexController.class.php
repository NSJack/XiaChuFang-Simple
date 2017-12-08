<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    /**
     * @Author    刘林
     * @DateTime  2017-10-01
     */
    public function index(){
        $this->display();
    }

    /**
     * @Author    刘林
     * @DateTime  2017-10-01
     */
    public function dish_class(){
    	
    	$liu_class = D("liu_class");

        $all = $liu_class->select();

        $items = array();

        $tree = [];

        foreach ($all as $k => $v) {
            $items[$v['classid']] = $v;
        }

        foreach ($items as $k => $item) {

            $items[$item['parentid']]['son'][$item['classid']] = &$items[$item['classid']];
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
}