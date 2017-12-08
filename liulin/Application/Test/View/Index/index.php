<!DOCTYPE html>
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

	<volist name="newtree" id="data">
		{$data.level}:{$data.cname}<br/>
	</volist>
-->
	<?php foreach( $newtree as $data ): ?>
		<table>
			<in name="data['level']" value="1,2,3,4">
				<tr>
					<in name="data['level']" value="1">
						一级
					</in>
				</tr>

				<tr>
					<in name="data['level']" value="2"0>
						<td>二级</td>					
					</in>
				</tr>

				<tr>
					<in name="data['level']" value="3">					
						<td>三级</td>
					</in>
				
					<in name="data['level']" value="4">
						<td>四级</td>
					</in>
				</tr>
			</in>
		</table>
	<?php endforeach; ?> 
<!--
	 <foreach name='all' item='newtree'>  
        <tr>             
            <td>  
            	<?php foreach( $newtree as $data ): ?>
            		<td>{$data.id}</td>
            		<td><?php echo str_repeat('----',$newtree['level']);?>{$data.name}</td>  

                <if condition="$data['level'] eq 1">  
                    	<div>一级分类</div>
                    <elseif condition="$data['level'] eq 2"/>  
                    	<div>二级分类 </div>
                    <elseif condition="$data['level'] eq 3"/>  
                    	<div>三级分类 </div>
                    <else/>  
                    	<div>四级分类 </div>
                </if> 
                <?php endforeach; ?> 
            </td>  
        </tr>  
    </foreach>
-->

<!--
		<?php foreach( $newtree as $data ): ?>
		<table>
			<in name="data['level']" value="1,2,3,4">
				<tr style="border: 1px solid black;display:block;float: left;">
					<in name="data['level']" value="1">
						<td style="font-weight: 700;font-size: 20px;box-sizing: border-box;line-height: 1.8;color: #222;width: 200px;display:block;float: left;">{$data.classname}</td>
					</in>
				</tr>

				<tr style="border: 1px solid black;display:block;float: left;">
					<in name="data['level']" value="2">
						<td style="font-weight: 400;color: #909090;margin-top: 2px;margin-bottom: 6px;width: 200px;float: left;display:block;">{$data.classname}</td>					
					</in>
				</tr>

				<tr style="border: 1px solid black;">
					<in name="data['level']" value="3">					
						<td style="color: #222;font-size: 16px;font-family: sans-serif;    line-height: 1.8;">{$data.classname}</td>
					</in>
				</tr>
			</in>
		</table>
	<?php endforeach; ?>

-->
</body>
</html>