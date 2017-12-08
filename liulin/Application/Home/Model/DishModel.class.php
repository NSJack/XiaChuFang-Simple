<?php
namespace Home\Model;
use Think\Model;
Class DishModel extends Model{

	protected $tableName 	 = 'dish';//定义数据表名称
	protected $tablePrefix 	 = 'liu_'; //定义数据表前缀
	protected $trueTableName = 'liu_dish'; //定义完整数据表名称


}