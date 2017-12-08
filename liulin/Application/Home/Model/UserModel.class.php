<?php
namespace Home\Model;
use Think\Model;
Class UserModel extends Model{

	protected $tableName 	 = 'user';//定义数据表名称
	protected $tablePrefix 	 = 'liu_'; //定义数据表前缀
	protected $trueTableName = 'liu_user'; //定义完整数据表名称

	function getUser($uid){
      return $this->where('uid',$uid)->find();
    }



}