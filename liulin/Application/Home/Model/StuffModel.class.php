<?php
namespace Home\Model;
use Think\Model;
Class StuffModel extends Model{

	protected $tableName 	 = 'stuff';//定义数据表名称
	protected $tablePrefix 	 = 'liu_'; //定义数据表前缀
	protected $trueTableName = 'liu_stuff'; //定义完整数据表名称


}