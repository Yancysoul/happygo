<?php

/**
 * 功能：执行文件上传
 * 参数1： array  上传文件信息$_FILES['pic']
 * 参数2：string  上传文件目录
 * 参数3：array    允许上传文件类型
 * 参数4：int    允许上传文件的最大值  0表示不限制文件的大小
 * 返回值：array  下标为error的元素表示执行成功没有，为0失败，1代表成功
 * 	    array  下标为msg的元素保存上传信息，上传成功保存新文件名，上传失败保存失败信息
 */


function upload($file,$uploadDir,$allowtype=[],$maxsize=0){
//1. 定义上传处理时所需变量信息
$error=$file['error']; 
$uploadDir=rtrim($uploadDir,"/")."/"; 
$res=['error'=>0,'msg'=>""];
 $ext=pathinfo($file['name'],PATHINFO_EXTENSION);
//2. 根据属性error判断上传文件失败原因
if($error>0){
	switch ($error) {
	case 1: 
	$res['msg']="上传文件大小超出了PHP配置中的约定值：upload_max_filesize";
	return $res;
	case 2:   
	$res['msg']='上传文件大小超出了表单中的约定值：MAX_FILE_SIZE';
	return $res;
            case 3: 
             
            $res['msg']='文件只被部分上载';
	return $res;
            case 4:   
            $res['msg']='没有上传任何文件';
	return $res;
            case 6:  
 
            $res['msg']='找不到临时文件夹';
	return $res;
            case 7:  
             $res['msg']='文件写入失败';
	return $res;
            default:  
            $res['msg']='末知错误';
	return $res;
   }
}

//3. 判读上传文件类型
if(!empty($allowtype)){
    
     if(!in_array($ext,$allowtype)){ 
     	$res['msg']='文件上传类型不符合要求';
	return $res;
     }
}
//4. 判断上传文件大小
if($maxsize>0){
	if($file['size']>$maxsize){ 
		$res['msg']='文件过大';
		return $res;
	}
}
//5. 随机上传文件名

$newname=date("YmdHis").mt_rand(1000,9999).".{$ext}";
//6.保存临时上传文件到指定目录
if (is_uploaded_file($file['tmp_name'])) { 
        if (!move_uploaded_file($file['tmp_name'], "{$uploadDir}{$newname}")) {   
             $res['msg']="不能将文件移动到指定目录。";
            return $res;
        }else{
        	  $res=['error'=>1,'msg'=>$newname];
        	  return $res;
        }
    }else{
   
        $res['msg']="上传文件{$file['name']}不是一个合法文件:";
        return $res;
    }

}