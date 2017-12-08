<?php
namespace Home\Model;
use Think\Model;
Class MessageModel extends Model{

	protected $tableName 	 = 'msg';//定义数据表名称
	protected $tablePrefix 	 = 'liu_'; //定义数据表前缀
	protected $trueTableName = 'liu_msg'; //定义完整数据表名称


}