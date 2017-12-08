<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<!--
	<?php foreach( $data as $dg ): ?>
		<div>
			<?php echo $dg['cname']; ?>
		</div>
	<?php endforeach; ?>

	<?php if(is_array($newtree)): $i = 0; $__LIST__ = $newtree;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i; echo ($data["level"]); ?>:<?php echo ($data["cname"]); ?><br/><?php endforeach; endif; else: echo "" ;endif; ?>
-->
	<?php foreach( $newtree as $data ): ?>
		<table>
			<?php if(in_array(($data['level']), explode(',',"1,2,3,4"))): ?><tr>
					<?php if(in_array(($data['level']), explode(',',"1"))): ?>一级<?php endif; ?>
				</tr>

				<tr>
					<?php if(in_array(($data['level']), explode(',',"2"))): ?><td>二级</td><?php endif; ?>
				</tr>

				<tr>
					<?php if(in_array(($data['level']), explode(',',"3"))): ?><td>三级</td><?php endif; ?>
				
					<?php if(in_array(($data['level']), explode(',',"4"))): ?><td>四级</td><?php endif; ?>
				</tr><?php endif; ?>
		</table>
	<?php endforeach; ?> 
<!--
	 <?php if(is_array($all)): foreach($all as $key=>$newtree): ?><tr>             
            <td>  
            	<?php foreach( $newtree as $data ): ?>
            		<td><?php echo ($data["id"]); ?></td>
            		<td><?php echo str_repeat('----',$newtree['level']); echo ($data["name"]); ?></td>  

                <?php if($data['level'] == 1): ?><div>一级分类</div>
                    <?php elseif($data['level'] == 2): ?>  
                    	<div>二级分类 </div>
                    <?php elseif($data['level'] == 3): ?>  
                    	<div>三级分类 </div>
                    <?php else: ?>  
                    	<div>四级分类 </div><?php endif; ?> 
                <?php endforeach; ?> 
            </td>  
        </tr><?php endforeach; endif; ?>
-->
</body>
</html>