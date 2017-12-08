<?php
namespace Home\Controller;

class AvatarController extends BasisController {
    /**
     * 上传头像
     * @Author    刘林
     * @DateTime  2017-07-16
     */
    public function index(){

        $uid = $this->uid;
        $h_small = __ROOT__."/Public/head/small/$uid.png";//30*30
        $h_smaller = __ROOT__."/Public/head/smaller/$uid.png";//36*36
        $h_big = __ROOT__."/Public/head/big/$uid.png";//160*160
        $h_larger = __ROOT__."/Public/head/larger/$uid.png";//60*60
        
        //将头像地址输出到模板
        $this->assign('head',$h_big);

        $this->display();

    }

    //上传图片，将图片路径存入数据库
    public function upload(){
        $liu_info = D("Uinfo");
        $uid      = $this->uid;
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     'Public/Original/'; // 设置附件上传根目录
        $upload->savePath  =     ''; // 设置附件上传（子）目录
        // 上传文件 
        $info   =   $upload->upload();
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功
            //拼接文件路径 根目录+子目录+文件名
            $FilePath = $upload->rootPath . $info['photo']['savepath'] . $info['photo']['savename'];
            

            //对图片进行处理
            $image = new \Think\Image(); 
            $image->open( $FilePath );
            
            // 生成居中裁剪的缩略图并保存为$uid.png
            $image->thumb(160, 160,\Think\Image::IMAGE_THUMB_CENTER)->save("Public/head/big/$uid.png");
            $image->thumb(60, 60,\Think\Image::IMAGE_THUMB_CENTER)->save("Public/head/larger/$uid.png");
            $image->thumb(36, 36,\Think\Image::IMAGE_THUMB_CENTER)->save("Public/head/smaller/$uid.png");
            $image->thumb(30, 30,\Think\Image::IMAGE_THUMB_CENTER)->save("Public/head/small/$uid.png");
            

            $insert = array(
                    'avatar' => $FilePath,
                );
            $where = array(
                    'uid' => $uid,
                );

            //将文件路径存入数据库
            $liu_info->where( $where )->save( $insert );
            $this->success('上传成功！');
        }
    }

    
}