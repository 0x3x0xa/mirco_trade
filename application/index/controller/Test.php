<?php
namespace app\index\controller;
use think\Db;
use think\Controller;



class Test extends Controller
{

	/**
	 * 首页 行情列表
	 * @author lukui  2017-02-18
	 * @return [type] [description]
	 */
    public function index()
    {  
       //产品列表
		$pro = db('productinfo')->where('isdelete',0)->select();

		if(!isset($pro)) return false;
						
		foreach ($pro as $k => $v) {
	
			//验证休市
			$isopen = $v['isopen'] && ChickIsOpen($v['pid']);
          	if(!$isopen){
              continue;
            }
            echo $v['pid']."在波动！</br>";
    	}
      	
	}
}