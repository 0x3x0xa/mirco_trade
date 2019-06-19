<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:62:"/www/wwwroot/jiaxin.com/application/index/view/user/index.html";i:1560928022;s:56:"/www/wwwroot/jiaxin.com/application/index/view/head.html";i:1508807576;}*/ ?>
<html style="font-size: 120px;">
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
<!-- 是否启用全屏模式 -->
<meta name="apple-mobile-web-app-capable" content="yes">
<!-- 全屏时状态颜色设置 -->
<meta name="apple-mobile-web-status-bar-style" content="white">
<!-- 禁用电话号码自动识别 -->
<meta name="format-detection" content="telephone=no">
<!--禁止读取本地缓存模板-->
<meta http-equiv="Pragma" contect="no-cache">
<!-- iPhone 启动图标 -->
<link rel="apple-touch-icon" href="img/logo.png">
<!-- Android 启动图标 -->
<link rel="shortcut icon" href="img/logo.png">
<!-- 添加 favicon icon -->
<link rel="shortcut icon" type="image/ico" href="img/favicon.ico">
 <title><?php echo !empty($conf['web_name'])?$conf['web_name']:'微交易'; ?></title> 
<script type="text/javascript">
window.onload=function(){
//设置适配rem
var change_rem = ((window.screen.width > 450) ? 450 : window.screen.width)/375*100;
document.getElementsByTagName("html")[0].style.fontSize=change_rem+"px";
window.onresize = function(){
change_rem = ((window.screen.width > 450) ? 450 : window.screen.width)/375*100;
document.getElementsByTagName("html")[0].style.fontSize=change_rem+"px";
}
}
</script>

<link href="__HOME__/css/ionic.css" rel="stylesheet">
<link href="__HOME__/css/style.css" rel="stylesheet">
<!-- <script src="__HOME__/js/jquery-3.2.1.min.js"></script> -->
<script src="__HOME__/js/jquery-1.9.1.min.js"></script>
<style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}</style>
<style>
.ionic_toast {
  z-index: 9999;
}

.toast_section {
  color: #FFF;
  cursor: default;
  font-size: 1em;
  display: none;
  border-radius: 5px;
  opacity: 1;
  padding: 10px 30px 10px 10px;
  margin: 10px;
  position: fixed;
  left: 0;
  right: 0;
  text-align: center;
  z-index: 9999;
  background-color: rgba(0, 0, 0, 0.75);
}

.ionic_toast_top {
  top: 10px;
}

.ionic_toast_middle {
  top: 40%;
}

.ionic_toast_bottom {
  bottom: 10px;
}

.ionic_toast_close {
  border-radius: 2px;
  color: #CCCCCC;
  cursor: pointer;
  display: none;
  position: absolute;
  right: 4px;
  top: 4px;
  width: 20px;
  height: 20px;
}

.toast_close_icon {
  position: relative;
  top: 1px;
}

.ionic_toast_sticky .ionic_toast_close {
  display: block;
}

.ionic_toast_close:active {

}</style>


<script src="__HOME__/js/lk/order.js"></script>

<!-- <script type="text/javascript" src="__HOME__/js/lk/echarts-all-3.js"></script>
<script type="text/javascript" src="__HOME__/js/lk/ecStat.min.js"></script>
<script type="text/javascript" src="__HOME__/js/lk/dataTool.min.js"></script>
<script type="text/javascript" src="__HOME__/js/lk/china.js"></script>
<script type="text/javascript" src="__HOME__/js/lk/world.js"></script>
<script type="text/javascript" src="__HOME__/js/lk/api"></script>
<script type="text/javascript" src="__HOME__/js/lk/getscript"></script>
<script type="text/javascript" src="__HOME__/js/lk/bmap.min.js"></script> -->
<!-- 弹框插件 -->
<script src="/static/layer/layer.js"></script>
<!-- 公共函数 -->
<script src="/static/public/js/function.js"></script>
<script src="/static/public/js/base64.js"></script>
<script type="text/javascript">
  var Base64 = new Base64();

  
</script>
</head>

<script>
var pay_type = '';
var wxpay_info = '';
var returnrul = "<?php echo url('user/index'); ?>";
</script>

<style>
.scroll-content{
    overflow: scroll
}
</style>

<body ng-app="starter" ng-controller="AppCtrl" class="grade-a platform-browser platform-ios platform-ios9 platform-ios9_1 platform-ready">

<ion-nav-bar class="bar-stable headerbar nav-bar-container" nav-bar-transition="ios" nav-bar-direction="swap" nav-swipe="">

	<div class="nav-bar-block" nav-bar="active">
		<ion-header-bar class="bar-stable headerbar bar bar-header" align-title="center">
			<div class="title title-center header-item" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">个人中心</div>
		</ion-header-bar>
	</div>
</ion-nav-bar>


<ion-nav-view class="view-container" nav-view-transition="ios" nav-view-direction="none" nav-swipe=""><ion-tabs class="tabs-icon-top navbar pane tabs-bottom tabs-standard" abstract="true" nav-view="active" style="opacity: 1; transform: translate3d(0%, 0px, 0px);"><div class="tab-nav tabs">


<a href="<?php echo Url('/index/index/index/token/'.$token); ?>"  class="iconfont icon--6 tabnone tab-item " style=""><span class="tab-title ng-binding hangqing" >商品行情</span></a>
<a href="<?php echo url('/index/order/hold/token/'.$token); ?>" class="iconfont icon--7 tabnone tab-item " style=""><span class="tab-title ng-binding jiaoyijilu" >交易记录</span></a>
<a href="<?php echo url('/index/user/index/token/'.$token); ?>"  class="iconfont icon--8 tabnone tab-item tab-item-active" style=""><span class="tab-title ng-binding" >个人账户</span></a>

</div>

<ion-nav-view name="tab-profile" class="view-container tab-content" nav-view="active" nav-view-transition="ios" nav-view-direction="swap" nav-swipe=""><ion-view view-title="个人中心" hide-nav-bar="false" class="pane" state="tab.profile" nav-view="active" style="opacity: 1; transform: translate3d(0%, 0px, 0px);">
    <ion-content class="personalbg scroll-content ionic-scroll scroll-content-false  has-header has-tabs" scroll="false">
		<header>
			<i onClick="app_exit()" class="iconfont icon--9"></i>
			<article>
				<img src="<?php echo !empty($userinfo['portrait'])?$userinfo['portrait']:'__HOME__/img/logobg.jpg'; ?>">
			</article>
			<p class="ng-binding"><?php echo !empty($userinfo['nickname'])?$userinfo['nickname']:$userinfo['username']; if($userinfo['otype'] == 101): ?> (代理商 邀请码：<?php echo $userinfo['uid']; ?>) <?php endif; ?><span class="iconfont icon--3" onClick="respass()"></span></p>
			<p class="ng-binding">￥<?php echo $userinfo['usermoney']; if($userinfo['otype'] == 101): ?> (保证金：<?php echo !empty($userinfo['minprice'])?$userinfo['minprice']:'0'; ?>) <?php endif; ?></p>
		</header>
		<ul>
			<!-- <li>
				<section onclick="show_user_modal('modal-bank')" class="">
					<i class="iconfont icon--19 qianyue"></i>
					<p>签约</p>
				</section>
			</li> -->
			<li ng-show="is_get_pay_list" class="" style="">
				<section onClick="show_user_modal('modal-deposit')" class="">
					<i class="iconfont icon--5 rujin"></i>
					<p>充值</p>
				</section>
			</li>

			<li>
				<section onClick="show_user_modal('modal-withdraw')" class="">
					<i class="iconfont icon--4 chujin"></i>
					<p>提现</p>
				</section>
			</li>
			<li>
				<section onClick="show_user_modal('modal-olist')" class="">
					<i class="iconfont icon--- zijin"></i>
					<p>资金流水</p>
				</section>
			</li>
		<!--	<li>
				<section onClick="show_user_modal('modal-bank1')" class="">
					<i class="iconfont icon--8 chujin"></i>
					<p>客服</p>
				</section>
			</li>
			<li>
				<section onClick="show_user_modal('modal-bank2')" class="">
					<i class="iconfont icon--16 chujin"></i>
					<p>App下载</p>
				</section>
			</li>   -->


		</ul>
		
			<!-- <div class="erwema_img">
            	<img alt="我的二维码" src="http://pan.baidu.com/share/qrcode?w=165&h=165&url=<?php echo $oid_url; ?>">
        	</div>
        	<p>
        		<span>扫描二维码注册</span>
        		<span style="display: none;">分享<i class="iconfont"></i></span>
        	</p> -->
            <div class="user_btn">
                <a href="<?php echo url('cashlist'); ?>">
                    <p class="user_btn_p">
                        <i style="color:#1fc65b;font-size:0.25rem" class="iconfont icon--4 chujin"></i>　提现记录
                        <span class="right">></span>
                    </p>
                </a>
            </div>

          

            <div class="user_btn">
                <a href="<?php echo url('order/hold'); ?>">
                    <p class="user_btn_p">
                        <i style="color:#ebac34;font-size:0.25rem" class="iconfont icon--2 zijin"></i>　历史订单
                        <span class="right">></span>
                    </p>
                </a>
            </div>
            <div class="user_btn">
                <a href="<?php echo url('ercode'); ?>">
                    <p class="user_btn_p">
                        <i style="color:#D99BFF;font-size:0.25rem" class="iconfont icon--10 zijin"></i>　推广二维码
                        <span class="right">></span>
                    </p>
                </a>
            </div>
            <div class="user_btn">
                <a href="javascript:;" onClick="respass()">
                    <p class="user_btn_p">
                        <i style="color:#42FFEE;font-size:0.25rem" class="iconfont icon--3 zijin"></i>　修改信息
                        <span class="right">></span>
                    </p>
                </a>
            </div>
            <div class="user_btn">
                <a href="javascript:;" onClick="app_exit()">
                    <p class="user_btn_p">
                        <i style="color:#6EFF00;font-size:0.25rem" class="iconfont icon--9 zijin"></i>　退出
                        <span class="right">></span>
                    </p>
                </a>
            </div>

		
    </ion-content>
</ion-view></ion-nav-view></ion-tabs></ion-nav-view>



<div class="modal-backdrop hide modal-bank"><div class="modal-wrapper" ng-transclude=""><ion-modal-view class="order-modal bank-info-modal modal slide-in-up ng-leave ng-leave-active">
    <ion-header-bar class="order-modal-header bar bar-header">
        <h1 class="title" style="left: 54px; right: 54px;">银行资料</h1>
        <div class="close" onClick="hide_user_modal('modal-bank')">
            <i class="icon ion-ios-arrow-left"></i>
        </div>
    </ion-header-bar>
    <ul>
    	<li>
    		<span>银行名称</span>
	    	<select name="bankno" class=" bankno">

	    		<?php if(is_array($banks) || $banks instanceof \think\Collection || $banks instanceof \think\Paginator): $i = 0; $__LIST__ = $banks;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

	    		<option label="<?php echo $vo['bank_nm']; ?>" value="<?php echo $vo['id']; ?>" <?php if(isset($mybank) && $mybank['bankno'] == $vo['id']): ?> selected="selected" <?php endif; ?> ><?php echo $vo['bank_nm']; ?></option>

	    		<?php endforeach; endif; else: echo "" ;endif; ?>

	    	</select>
    	</li>
        <li>
            <span>省份</span>
            <select id="province" class="province" name="province" style="">
				<option value="">请选择</option>
            	<?php if(is_array($province) || $province instanceof \think\Collection || $province instanceof \think\Paginator): $i = 0; $__LIST__ = $province;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

	    		<option  value="<?php echo $vo['id']; ?>" <?php if(isset($mybank) && $mybank['provinceid'] == $vo['id']): ?> selected="selected" <?php endif; ?> ><?php echo $vo['name']; ?></option>

	    		<?php endforeach; endif; else: echo "" ;endif; ?>

            </select>
        </li>
        <li>
            <span>市名</span>
            <select id="city" name="cityno" class="city">
            	<?php if(isset($mybank)): ?>
            	<option value="<?php echo $mybank['cityno']; ?>"><?php echo getarea($mybank['cityno']); ?></option>
            	<?php else: ?>
				<option value="">请选择</option>
				<?php endif; ?>
            </select>
        </li>
        <li>
            <span>开户支行</span>
            <input type="text" placeholder="支行地址" name="address" class="address" value="<?php echo isset($mybank)?$mybank['address']:''; ?>">
        </li>
        <li>
            <span>开户名</span>
            <input type="text" placeholder="持卡人姓名" name="accntnm"  class="accntnm" value="<?php echo isset($mybank)?$mybank['accntnm']:''; ?>">
        </li>
        <li>
            <span>卡号</span>
            <input type="text" placeholder="银行卡号" name="accntno" class="accntno" value="<?php echo isset($mybank)?$mybank['accntno']:''; ?>">
        </li>
        <li>
            <span>身份证号</span>
            <input type="text" placeholder="身份证号" name="scard" class=" scard" value="<?php echo isset($mybank)?$mybank['scard']:''; ?>">
        </li>
        <li>
            <span>预留手机号</span>
            <input type="text" placeholder="预留手机号" name="phone"  class="phone" value="<?php echo isset($mybank)?$mybank['phone']:''; ?>">
        </li>

        <?php if(isset($mybank)): ?>
        	<input type="hidden" class="id" name="id" value="<?php echo $mybank['id']; ?>">
        <?php endif; ?>
    </ul>
    <div class="button-bar">
        <a class="button button-balanced" onClick="update_user()">确定</a>
        <a class="button button-dark" onClick="hide_user_modal('modal-bank')">关闭</a>
    </div>

</ion-modal-view></div></div>
<!--入金 -->
<div class="modal-backdrop hide modal-deposit">
<div class="modal-backdrop-bg"></div>
<div class="modal-wrapper" ng-transclude="">
<ion-modal-view class="order-modal modal slide-in-up ng-leave ng-leave-active model-bank-tab">
    <ion-header-bar class="order-modal-header bar bar-header">
        <h1 class="title" style="left: 54px; right: 54px;">用户入金</h1>
        <div class="close" onClick="hide_user_modal('modal-deposit')">
            <i class="icon ion-ios-arrow-left"></i>
        </div>
    </ion-header-bar>
     <div class="pay_code_area" style="display: none">
        <div>
            <div class="pay_code_img">
                
            </div>
            
            <p>扫描二维码支付</p>
            <p><a href="">充值成功点击刷新</a></p>
            <p><a href="javascript:;" onClick="pay_code_area(0)">关闭</a></p>
            
        </div>
    </div>
        <link rel="stylesheet" type="text/css" href="/codepay/css/userPay.css">
      <script src="/codepay/js/jquery-1.10.2.min.js" type="text/javascript"></script>
  
  <div id="loadingPicBlock" style="max-width: 720px;margin:0 auto;" class="pay">
   

 			  <p>&nbsp;</p>
 			  <p>&nbsp;</p>
 			  <p>&nbsp;</p>
 			  <p>&nbsp;</p>
    <div class="g-Total gray9">请选择需要充值的金额</div>
    <section class="clearfix g-member">
        <div class="g-Recharge">
            <ul id="ulOption">
                <!--注意修改金额 需要同时修改前面的值 money="10" -->
				<?php $_rand = rand(0,100);?><!--随机生成数-->
              <?php if(is_array($reg_push) || $reg_push instanceof \think\Collection || $reg_push instanceof \think\Paginator): $i = 0; $__LIST__ = $reg_push;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
               <!-- li money="<?php echo $vo; ?>.<?php echo $_rand; ?>"><a href="javascript:;"><?php echo $vo; ?>.<?php echo $_rand; ?>元<s></s></a></li -->
              <li money="<?php echo $vo; ?>"><a href="javascript:;"><?php echo $vo; ?>元<s></s></a></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
              
            </ul>
        </div>
		
        <form action="<?php echo url('user/addbalance'); ?>" method="post">
            <article class="clearfix mt10 m-round g-pay-ment g-bank-ct">
                <ul id="ulBankList">
                    <li  style="display:none" class="gray6" style="width: 100%;padding: 5px 0px 0px 10px;height: 50px;">您选择充值：<label
                            class="input" style="border: 1px solid #EAEAEA;height: 35px;font-size:30px;">
                            <input type="text" name="bpprice" id="price" placeholder="如：50" value="50"
                                   style="width: 170px;color: red;font-size:20px;">   <!--默认输入金额值50-->
                        </label> 元
                    </li>
					
                    <li style="display:none" class="gray6"
                        style="width: 100%;padding: 5px 0px 0px 10px;">
                        充值用户名：<label class="input" style="border: 1px solid #EAEAEA;height: 30px;font-size: 30px;">
                            <input type="text" name="user" id="user" placeholder="用户名" value="<?php echo $userinfo['username']; ?>"
                                   style="width: 180px;font-size: 16px;">
                        </label></li>
                                
                                
                    <li paytype="hypay_alipay" class="gray9" type="hypay" style="width: 50%">
                        <a href="javascript:;" class="z-initsel"><img src="/codepay/img/alipay.jpg"><s></s></a>

                    </li>
                    <li paytype="hypay_wxpay" class="gray9" type="hypay" style="width: 50%">
                        <a href="javascript:;"><img src="/codepay/img/weixin.jpg"><s></s></a>

                    </li>
                 
                                                                                     
                </ul>
            </article>
            <input type="hidden" id="pay_type" value="hypay_alipay" name="pay_type"> <!--值1表示支付宝默认-->
            <input type="hidden" value="" name="salt">

            <div class="mt10 f-Recharge-btn">

                <button id="btnSubmit" type="submit" href="javascript:;" class="orgBtn">确认支付</button>
            </div>
        </form>
    </section>

    <input id="hidIsHttps" type="hidden" value="0"/>
    <script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>
    <script language="javascript" type="text/javascript">

        $(function () {
            var c;
            var g = false;
            var a = null;
            var e = function () {
                $("#ulOption > li").each(function () {
                    var n = $(this);
                    n.click(function () {
                        g = false;
                        c = n.attr("money");
                        n.children("a").addClass("z-sel");
                        n.siblings().children().removeClass("z-sel").removeClass("z-initsel");
                        var needMoney = parseFloat(n.attr("money")).toFixed(2);
                        if (needMoney <= 0)needMoney = 0.01;
                        $("#price").val(needMoney);
                    })
                });
                $("#ulBankList > li").each(function (m) {
                    var n = $(this);
                    n.click(function () {
                        if (m < 2)return;
                        $("#pay_type").val(n.attr("payType"));
                        n.children("a").addClass("z-initsel");
                        n.siblings().children().removeClass("z-initsel");
                    })
                });

            };
            e()
        });

    </script>


</div>
  
  
    	</div>
	</div><div class="scroll-bar scroll-bar-v"><div class="scroll-bar-indicator scroll-bar-fade-out" style="transform: translate3d(0px, 0px, 0px) scaleY(1); height: 0px;"></div></div></ion-content>
</ion-modal-view></div></div><div class="modal-backdrop hide modal-withdraw"><div class="modal-backdrop-bg"></div><div class="modal-wrapper" ng-transclude=""><ion-modal-view class="order-modal modal slide-in-up ng-leave ng-leave-active">
    <ion-header-bar class="order-modal-header bar bar-header">
        <h1 class="title" style="left: 54px; right: 54px;">用户出金</h1>
        <div class="close" onClick="hide_user_modal('modal-withdraw')">
            <i class="icon ion-ios-arrow-left"></i>
        </div>
    </ion-header-bar>
<ion-content class="out_money_content scroll-content ionic-scroll  has-header"><div class="scroll" style="transform: translate3d(0px, 0px, 0px) scale(1);">
    	
		<?php if(!isset($mybank)): ?>
    	<header class="ifnone_add_bank"  onclick="go_add_bank()">
        	<p>+</p>
        	<p>添加银行卡</p>
        </header>
        <div class="scroll" style="transform: translate3d(0px, 0px, 0px) scale(1);">
		<?php else: ?>
        <div  class="cash">
	        <header class="coldbg hotbg"  style="">
	        	<p class="ng-binding"><?php echo $mybank['bank_nm']; ?> </p><span class="editc" onClick="go_add_bank()">修改</span>
	        	<p class="ng-binding">**** **** **** <?php echo $sub_bankno; ?></p>
	        	<i class="iconfont red"><?php echo substr($mybank['bank_nm'],0,3); ?></i>
	        </header>
	
	        <article>
	        	<span>
	        		<i class="iconfont icon--4"></i>
	        		提现金额：
	        	</span>
	        	<input type="number" placeholder="请输入出金金额" ng-model="outAmount.outamount"  class="cash-price ng-pristine ng-untouched ng-valid ng-not-empty ng-valid-required">
	        </article>
	        <section  class="ng-binding">单次提现金额至少￥<span class="cash_min" attrmax="<?php echo $conf['cash_max']; ?>"><?php echo $conf['cash_min']; ?></span></section>
	        <footer>
	        	余额：<span class="ng-binding"><?php echo $userinfo['usermoney']; ?></span>
	        	手续费：<span  class="ng-binding reg_par" attrdata="<?php echo $conf['reg_par']; ?>"><?php echo $conf['reg_par']; ?>%</span>
	        	实际到账：<span  class="ng-binding true_price" style="display:none"></span>
	        </footer>
	        <button class="newbutton outmoneybtn"  onclick="out_withdraw()">确认出金</button>
        </div>
		<?php endif; ?>
    </div>

    </div><div class="scroll-bar scroll-bar-v"><div class="scroll-bar-indicator scroll-bar-fade-out" style="transform: translate3d(0px, 0px, 0px) scaleY(1); height: 0px;"></div></div></ion-content>
</ion-modal-view></div></div><div class="modal-backdrop hide modal-olist"><div class="modal-backdrop-bg"></div><div class="modal-wrapper" ng-transclude=""><ion-modal-view class="order-modal modal slide-in-up ng-leave ng-leave-active">
    <ion-header-bar class="order-modal-header bar bar-header">
        <h1 class="title" style="left: 54px; right: 54px;">资金流水</h1>
        <div class="close" onClick="hide_user_modal('modal-olist')">
            <i class="icon ion-ios-arrow-left"></i>
        </div>
    </ion-header-bar>
    <ion-content class="person_money_list scroll-content ionic-scroll  has-header"><div class="scroll" style="transform: translate3d(0px, 0px, 0px) scale(1);">
		<ion-scroll style="height:100%" class="scroll-view ionic-scroll scroll-y"><div class="scroll" style="transform: translate3d(0px, -10px, 0px) scale(1);">
			
      <ul class="price_list">
                <?php if(is_array($order_list) || $order_list instanceof \think\Collection || $order_list instanceof \think\Paginator): $i = 0; $__LIST__ = $order_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <li ng-repeat="c in moneyList" class="" isshow="0">
                	<div class="money_list_header" >
                		<section class="other_money_bg">

                		</section><section>
                			<p  class="ng-binding other_money"><?php echo $vo['title']; ?></p>
                			<p>
                				<i class="iconfont icon--1 " ></i>
                				<i class="iconfont icon-30 ng-hide" ></i>
                				<span class="ng-binding"><?php echo $vo['nowmoney']; ?></span></p>
                			<p>
                				<i class="iconfont icon--2 pay_blue"></i>
                				<span class="ng-binding"><?php echo date('Y-m-d H:i:s',$vo['time']); ?></span>
                				<!-- <span class="ng-binding">14:13:04</span> -->
                			</p>
                		</section><section  class="ng-binding other_money">
                			<?php echo $vo['account']; ?>
                		</section><section class="icon clickshow ion-ios-arrow-up">
                		</section>
                	</div>
                	<article class="today_list_footer" style="display: none;">
                		<p class="ng-binding">详情：<?php echo $vo['content']; ?></p>
                	</article>
                </li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			<!-- ngIf: has_more_money_order.if_has_more_money_order -->
		</div><div class="scroll-bar scroll-bar-v"><div class="scroll-bar-indicator scroll-bar-fade-out" style="height: 631px; transform: translate3d(0px, 10px, 0px) scaleY(1);"></div></div></ion-scroll>
    </div><div class="scroll-bar scroll-bar-v"><div class="scroll-bar-indicator scroll-bar-fade-out" style="transform: translate3d(0px, 0px, 0px) scaleY(1); height: 0px;"></div></div></ion-content>
    <div class="button-bar">
        <a class="button button-dark" onClick="hide_user_modal('modal-olist')">关闭</a>
    </div>
</ion-modal-view></div></div>



<!--客服 -->

<div class="modal-backdrop hide modal-bank1"><div class="modal-wrapper" ng-transclude=""><ion-modal-view class="order-modal bank-info-modal modal slide-in-up ng-leave ng-leave-active">
    <ion-header-bar class="order-modal-header bar bar-header">
        <h1 class="title" style="left: 54px; right: 54px;">联系客服</h1>
        <div class="close" onClick="hide_user_modal('modal-bank1')">
            <i class="icon ion-ios-arrow-left"></i>
        </div>
    </ion-header-bar>
<br /><br /><br /><br /><br />
 			<div class="erwema_img" align="center">
            	<img alt="我的二维码" src="/static/index/img/2ma.png" style="width:20%;left: 54px; right: 54px;">
				            <p class="STYLE1">&nbsp;</p>
				            <p style="color:#42FFEE" class="STYLE1">扫描二维码</p>
 			</div>
    <div class="button-bar">

        <a class="button button-dark" onClick="hide_user_modal('modal-bank1')">关闭</a>
    </div>
	
</ion-modal-view></div></div>

<!--app下载 -->
    </div><div class="scroll-bar scroll-bar-v"><div class="scroll-bar-indicator scroll-bar-fade-out" style="transform: translate3d(0px, 0px, 0px) scaleY(1); height: 0px;"></div></div></ion-content>
</ion-modal-view></div></div><div class="modal-backdrop hide modal-bank2"><div class="modal-backdrop-bg"></div><div class="modal-wrapper" ng-transclude=""><ion-modal-view class="order-modal modal slide-in-up ng-leave ng-leave-active">
    <ion-header-bar class="order-modal-header bar bar-header">
        <h1 class="title" style="left: 54px; right: 54px;">APP</h1>
        <div class="close" onClick="hide_user_modal('modal-bank2')">
            <i class="icon ion-ios-arrow-left"></i>
        </div>
    </ion-header-bar>
<br /><br /><br /><br /><br />
 			<div class="erwema_img" align="center">
             <img alt="我的二维码" src="/static/index/img/2ma.png" style="width:20%;left: 54px; right: 54px;">
 			  <p>&nbsp;</p>
 			  <p>&nbsp;</p>
 			  <p>&nbsp;</p>
 			  <p>&nbsp;</p>
 			  <p>&nbsp;</p>
 			  <p>&nbsp;</p>
 			  <a href="https://fir.im/cpat">
			<button  class="newbutton outmoneybtn reg_btn" >
         
			<div >    APP下载    </div>
			</button>
			</a>
	  </div>
    <div class="button-bar">
        <a class="button button-dark" onClick="hide_user_modal('modal-bank2')">关闭</a>
    </div>






<!-- 


<div class="modal-backdrop active"><div class="modal-backdrop-bg"></div><div class="modal-wrapper" ng-transclude=""><ion-modal-view class="order-modal qrcode-modal modal slide-in-up ng-enter active ng-enter-active">
    <ion-header-bar class="order-modal-header bar bar-header">
        <h1 class="title" style="left: 50px; right: 50px;">移动支付</h1>
        <div class="close" ng-click="pay_qrcode_modal.hide()">
            <i class="icon ion-ios-close-empty"></i>
        </div>
    </ion-header-bar>
    <ion-content scroll="false" class="scroll-content ionic-scroll scroll-content-false  has-header">
        <div class="pay_weixin_code">
            <header>
            <p>支付金额：
                <span class="ng-binding">100</span>
            </p>
            </header>
            <section ng-show="distinguishQrcode" class="">长按识别</section>
            <footer ng-show="distinguishQrcode" class="">
                使用其它手机，打开微信或者支付宝，扫一扫也可以支付
            </footer>
            <footer ng-show="!distinguishQrcode" class="ng-hide">
                使用手机截图保存至相册，再微信或者支付宝识别图片可进行支付，也可使用其它手机扫一扫进行支付
            </footer>
            <div ng-show="!distinguishQrcode" class="no-erweima ng-hide"></div>
        </div>
    </ion-content>
    <article>
        <img ng-src="http://weixin.fxgogogo.com/qrcode?text=weixin%3A//wxpay/bizpayurl%3Fpr%3D8tJpkmg" src="http://weixin.fxgogogo.com/qrcode?text=weixin%3A//wxpay/bizpayurl%3Fpr%3D8tJpkmg">
    </article>
</ion-modal-view></div></div>



 -->






</body></html>
<div id="zypay_post"></div>
<script src="__HOME__/js/lk/user.js?s=<?php echo time(); ?>"></script>
<script src="__HOME__/js/lk/jquery.qrcode.js"></script>
<script src="__HOME__/js/lk/utf.js"></script>
<script>
$('#province').change(function(){
    var pid = $(this).val();
    if(pid != ''){
        var url = "<?php echo url('getarea'); ?>"+"?id="+pid;
        $.get(url,function(data){
          $("#city").html(data);
        });
    }else{
        $("#city").html('<option value="">请选择城市</option>');
    }

    
  });
function respass(){
    location.href="<?php echo url('login/respass'); ?>"
}

</script>