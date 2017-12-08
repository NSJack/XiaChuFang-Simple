<?php
namespace Home\Controller;

class DishController extends BasisController {
	/**
	 * 创建菜谱
	 * @Author    刘林
	 * @DateTime  2017-07-23
	 */
	public function index(){

		$uid 		= $this->uid;
		$liu_dish   = D("Dish");
		$liu_stuff  = D("Stuff");//食材表
		$liu_dishstep = D("liu_dishstep");//步骤表

		if( IS_POST ){

			$dishname = I("dishname");//菜品名称
			$dishdesc = I("dishdesc");//菜品描述
			$authmsg  = I("authmsg");//小贴士
			$ingre	  = I("ingre");//食材 array()
			$dosage	  = I("dosage");//用量 array()
			$makingdesc = I("makingdesc");//步骤描述
			$makingimg = I("makingimg");//步骤图片
			$intime   = time();

			
			
			//上传菜谱封面
			$upload = new \Think\Upload();// 实例化上传类
	        $upload->maxSize   =     3145728 ;// 设置附件上传大小
	        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
	        $upload->rootPath  =     'Public/dish/dishcover/'; // 设置附件上传根目录
	        $upload->savePath  =     ''; // 设置附件上传（子）目录
	        
	        //判断菜谱封面的路径文件夹是否存在，如果不存在则自动创建相应文件夹
	        if( !is_dir($upload->rootPath) ){
	        
	        	//第三个参数是“true”表示能创建多级目录，iconv防止中文目录乱码
				$res=mkdir(iconv("UTF-8", "GBK", $upload->rootPath),0777,true); 
			
	        }

	        // 上传文件 
	        $dish   =   $upload->upload();

	        if(!$dish) {// 上传错误提示错误信息
	            $this->error($upload->getError());
	        }else{// 上传成功
	            //拼接文件路径 根目录+子目录+文件名
	            $FilePath = $upload->rootPath . $dish['dishcover']['savepath'] . $dish['dishcover']['savename'];	            
            }
            //菜谱表插入条件
			$insert = array(
					'uid' 		=> $uid,
					'dishname'  => $dishname,
					'dishdesc'  => $dishdesc,
					'dishcover' => $FilePath,
					'authmsg'   => $authmsg,
					'intime' 	=> $intime, 
				);

			if( !empty($dishname) & !empty($dishdesc) & !empty($authmsg) ){
				$did = $liu_dish->add($insert);
			}
			//统计食材和用量的次数
			$countIngre  = count($ingre);
			$countDosage = count($dosage);
			

			//将食材和用量放入数据表
			for($i=1;$i<=$countIngre;$i++){
				$insertStuff[$i] = array(
					'did' => $did,
					'ingre' => $ingre[$i-1],
					'dosage' => $dosage[$i-1],
				);
				$stu_id = $liu_stuff->add($insertStuff[$i]);
			}

			//做法图片的根目录文件夹
	        $upload->rootPath  =     'Public/dish/makingimg/'; // 设置附件上传根目录
	        $upload->savePath  =     ''; // 设置附件上传（子）目录
	        $upload->savaName  =     array('uniqid','');

	        //判断步骤图片的路径文件夹是否存在，如果不存在则自动创建相应文件夹
	        if( !is_dir($upload->rootPath) ){
	        
	        	//第三个参数是“true”表示能创建多级目录，iconv防止中文目录乱码
				$res=mkdir(iconv("UTF-8", "GBK", $upload->rootPath),0777,true); 
				
	        }

	        //做法图片的上传
	        $info	=	$upload->upload(array($_FILES['makingimg']));

	        //判断做法图片是否上传成功
	        if(!$info) {	        		        	
	        	// 上传错误提示错误信息
	            $this->error($upload->getError());

	        }else{
	            //拼接文件路径 根目录+子目录+文件名
	            $MakePath = $upload->rootPath . $info['makingimg']['savepath'] . $info['makingimg']['savename'];	            
            }

            //做法
            foreach ($info as $key => $value) {
								
				//步骤表插入条件
				$addMake = array(
            		'did' => $did,
            		'dishstep' => $makingdesc[$key],
            		'dishchart' => $MakePath.$value['savepath'].$value['savename'],
            		'intime' => $intime,
            	);
            	//将步骤描述和图片路径插入数据库
            	$sid = $liu_dishstep->add($addMake);
			}

			//开启事务
			$liu_dish->startTrans();

			if( !$did ){				
				//  条件不满足，回滚
				return $liu_dish->rollback();
			}
			if( !$stu_id ){				
				//  条件不满足，回滚
				return $liu_dish->rollback();
			}
			if( !$sid ){				
				//  条件不满足，回滚
				return $liu_dish->rollback();
			}
			

			session('did',$did); 
            return $this->success( "菜谱创建成功",__ROOT__."/Home/Dish/showdish?did=$did" );
			
		}

		$this->display();
	}

	/**
	 * 菜谱详细页
	 * @Author    刘林
	 * @DateTime  2017-08-09
	 */
	public function showdish(){

		$uid 		  = $this->uid;
		$liu_dish     = D("Dish");
		$liu_stuff    = D("Stuff");//食材表
		$liu_dishstep = D("liu_dishstep");//步骤表

		//网址GET获取did
		$did = I("get.did");

		//根据菜谱id查找对应菜谱信息
		$dishFind  = $liu_dish->where(['did'=>$did])->find();

		//根据菜谱id查找对应食材信息
		$dishStuff = $liu_stuff->where(['did'=>$did])->select();

		//根据菜谱id查找对应步骤信息
		$dishStep  = $liu_dishstep->where(['did'=>$did])->select();

		//将查找出来的数组输出到模板
		$this->assign('dishFind',$dishFind);
		$this->assign('dishStuff',$dishStuff);
		$this->assign('dishStep',$dishStep);
		$this->display();
	}

	/**
	 * 删除菜谱
	 * @Author    刘林
	 * @DateTime  2017-08-09
	 */
	public function deleteDish(){

		$uid 	  = $this->uid;
		$did 	  = I("get.did");
		$liu_dish = D("Dish");
		$liu_stuff    = D("Stuff");//食材表
		$liu_dishstep = D("liu_dishstep");//步骤表
		
		//删除食材表数据
		$stuff = $liu_stuff->where(['did'=>$did])->delete();

		//删除步骤表数据
		$dishstep = $liu_dishstep->where(['did'=>$did])->delete();

		//删除菜谱表数据
		$dish = $liu_dish->where(['did'=>$did])->delete();

		//开启事务
		$liu_stuff->startTrans();

		if( $stuff ){
			$liu_stuff->rollback();
			return $this->error("食材删除失败，请重新操作",__ROOT__."/Home/Dish/showdish?did=$did");
		}

		if( $dishstep ){
			$liu_dishstep->rollback();
			return $this->error("做法删除失败，请重新操作",__ROOT__."/Home/Dish/showdish?did=$did");
		}

		if( $dish ){
			$liu_dish->rollback();
			return $this->error("菜谱删除失败，请重新操作",__ROOT__."/Home/Dish/showdish?did=$did");
		}

		if($did){
			$liu_stuff->rollback();
			return $this->error("删除失败",__ROOT__."/Home/Dish/showdish?did=$did");
		}

		return $this->success("删除成功",__ROOT__."/Home/Auser/dish");
	}

	/**
	 * 编辑菜谱
	 * @Author    刘林
	 * @DateTime  2017-08-09
	 */
	public function editdish(){

		$uid 		  = $this->uid;
		$liu_dish     = D("Dish");
		$liu_stuff    = D("Stuff");//食材表
		$liu_dishstep = D("liu_dishstep");//步骤表

		//网址GET获取did
		$did = I("get.did");

		//根据菜谱id查找对应菜谱信息
		$dishFind  = $liu_dish->where(['did'=>$did])->find();

		//根据菜谱id查找对应食材信息
		$dishStuff = $liu_stuff->where(['did'=>$did])->select();

		//根据菜谱id查找对应步骤信息
		$dishStep  = $liu_dishstep->where(['did'=>$did])->select();

		$countDishStuff = count($dishStuff);
		$countDishStep  = count($dishStep);

		//将查找出来的数组输出到模板
		$this->assign('dishFind',$dishFind);
		$this->assign('dishStuff',$dishStuff);
		$this->assign('dishStep',$dishStep);

		$this->assign('countDishStuff',$countDishStuff);
		$this->assign('countDishStep',$countDishStep);

		$this->display();
		
	}

	/**
	 * 更新菜谱
	 * @Author    刘林
	 * @DateTime  2017-08-19
	 */
	public function editSave(){

		$uid 		  = $this->uid;
		$liu_dish     = D("Dish");
		$liu_stuff    = D("Stuff");//食材表
		$liu_dishstep = D("liu_dishstep");//步骤表

		//网址GET获取did
		$did = I("get.did");

		if( IS_POST ){

			$dishname = I("dishname");//菜品名称
			$dishdesc = I("dishdesc");//菜品描述
			$authmsg  = I("authmsg");//小贴士
			$ingre	  = I("ingre");//食材 array()
			$dosage	  = I("dosage");//用量 array()
			$makingdesc = I("makingdesc");//步骤描述
			$makingimg = I("makingimg");//步骤图片
			$uptime   = time();

			$stuid = I("post.stu_id");//食材id
			$sid = I("post.sid");//步骤id
			
			//更新菜谱封面
			$upload = new \Think\Upload();// 实例化上传类
	        $upload->maxSize   =     3145728 ;// 设置附件上传大小
	        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
	        $upload->rootPath  =     'Public/dish/dishcover/'; // 设置附件上传根目录
	        $upload->savePath  =     ''; // 设置附件上传（子）目录
	        
	        //判断菜谱封面的路径文件夹是否存在，如果不存在则自动创建相应文件夹
	        if( !is_dir($upload->rootPath) ){
	        
	        	//第三个参数是“true”表示能创建多级目录，iconv防止中文目录乱码
				$res=mkdir(iconv("UTF-8", "GBK", $upload->rootPath),0777,true); 
			
	        }

	        // 上传文件 
	        $dish   =   $upload->upload();

	        //如果获得到上传封面，则更新
	        if($dish) {

	            //拼接文件路径 根目录+子目录+文件名
	            $FilePath = $upload->rootPath . $dish['dishcover']['savepath'] . $dish['dishcover']['savename'];

	            $liu_dish->where( ['did'=>$did] )->save(['dishcover' => $FilePath]);	            
            }
            //菜谱表更新条件
			$insert = array(
					'uid' 		=> $uid,
					'dishname'  => $dishname,
					'dishdesc'  => $dishdesc,					
					'authmsg'   => $authmsg,
					'uptime' 	=> $uptime, 
				);

			if( !empty($dishname) & !empty($dishdesc) & !empty($authmsg) ){
				$liu_dish->where( ['did'=>$did] )->save($insert);
			}
			
			
			//食材表	
			$stu_id = $liu_stuff->where( ['did'=>$did] )->select();
			
			foreach ($stu_id as $key => $value) {
				
				//array_search判断id是否存在食材步骤的id数组（$stuid）中
				if ( !is_numeric(array_search($value['stu_id'],$stuid)) ) {
					
					//如果不存在就将这条数据删除
					$liu_stuff->where( ['stu_id'=>$value['stu_id']] )->delete();
					
				}
			}


			foreach ($stuid as $k => $v) {
				
				//如果食材步骤id存在，则更新；不存在，则添加
				if( $v ){

					$insertStuff = array(
							'ingre' => $ingre[$k],
							'dosage' => $dosage[$k],
						);
					$liu_stuff->where( ['stu_id'=>$v] )->save($insertStuff);
					$stu_id = $liu_stuff->where( ['did'=>$did] )->select();

				}else{
					$insertStuff = array(
	                        'did'    => $did,
	                        'ingre'  => $ingre[$k],
	                        'dosage' => $dosage[$k],
	                        'uptime' => $uptime,
	                    );
	                $stu_id = $liu_stuff->add($insertStuff);//var_dump($stu_id);
				}
				//删除食材为空的步骤
				$liu_stuff->where( ['ingre'=>''] )->delete();
				
				
			}

			//做法图片的根目录文件夹
	        $upload->rootPath  =     'Public/dish/makingimg/'; // 设置附件上传根目录
	        $upload->savePath  =     ''; // 设置附件上传（子）目录
	        $upload->savaName  =     array('uniqid','');

	        //判断步骤图片的路径文件夹是否存在，如果不存在则自动创建相应文件夹
	        if( !is_dir($upload->rootPath) ){
	        
	        	//第三个参数是“true”表示能创建多级目录，iconv防止中文目录乱码
				$res=mkdir(iconv("UTF-8", "GBK", $upload->rootPath),0777,true); 
				
	        }

	        //做法图片的上传
	        $info	=	$upload->upload(array($_FILES['makingimg']));

	        //判断做法图片是否上传成功
	        if($info) {	    //var_dump($info['savename']);    		        	

	            //拼接文件路径 根目录+子目录+文件名
	            $MakePath = $upload->rootPath . $info['makingimg']['savepath'] . $info['makingimg']['savename'];	            
            }

            //查询该菜谱步骤
			$step = $liu_dishstep->where( ['did'=>$did] )->select();

            //如果数据库中有这条数据，而提交的数据中没有，就删除这条数据			
			foreach ($step as $key => $value) {
				//array_search判断id是否存在做法步骤的id数组（$sid）中
				if ( !is_numeric(array_search($value['sid'],$sid)) ) {
					
					//如果不存在就将这条数据删除
					$liu_dishstep->where( ['sid'=>$value['sid']] )->delete();
					
				}
			}

			foreach ($sid as $key => $value) {

				//如果做法步骤的id($sid)存在就更新，否则，添加一条数据
				if( $value ){

					//如果该做法步骤没有上传文件，则只更新做法描述。否则，全部更新
					if( !$info[$key] ){

						$addMake = array(
		            		'dishstep' => $makingdesc[$key],
		            		'uptime' => $uptime,
		            	);
						$sid = $liu_dishstep->where( ['sid'=>$value] )->save($addMake);

					}else{
						$addMake = array(
		            		'dishstep' => $makingdesc[$key],
		            		'dishchart' =>$MakePath.$info[$key]['savepath'].$info[$key]['savename'],
		            		'uptime' => $uptime,
		            	);

						//更新做法描述和做法图片
						$sid = $liu_dishstep->where( ['sid'=>$value] )->save($addMake);
					}

					
				}else{
					$addMake = array(
							'did' => $did,
		            		'dishstep' => $makingdesc[$key],
		            		'dishchart' =>$MakePath.$info[$key]['savepath'].$info[$key]['savename'],
		            		'uptime' => $uptime,
		            	);

					//添加一条新纪录到做法步骤表
					$sid = $liu_dishstep->add($addMake);
				}
				
			
			}
		
			//开启事务
			$liu_dish->startTrans();

			if( !$did ){				
				//  条件不满足，回滚
				$liu_dish->rollback();
				return $this->error("菜谱更新失败，请重新填写",__ROOT__."/Home/Dish/editdish?did=$did");
			}
			if( !$stu_id ){				
				//  条件不满足，回滚
				$liu_dish->rollback();
				return $this->error("用料更新失败，请重新填写",__ROOT__."/Home/Dish/editdish?did=$did");
			}
			if( !$sid ){				
				//  条件不满足，回滚
				$liu_dish->rollback();
				return $this->error("做法更新失败，请重新填写",__ROOT__."/Home/Dish/editdish?did=$did");
			}            
			
			var_dump($stu_id);
			return $this->success( "菜谱更新成功",__ROOT__."/Home/Dish/showdish?did=$did" );
						
		}

	}

}