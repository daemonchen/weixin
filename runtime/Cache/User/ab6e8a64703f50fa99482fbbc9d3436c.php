<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script>var SITEURL='';</script>
<title> <?php echo C('site_title');?> <?php echo C('site_name');?></title>
<link href="<?php echo RES;?>/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo RES;?>/css/stylet.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo RES;?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/main.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/common.js"></script>


<script type="text/javascript">
function ying(){
	 document.getElementById('tiduser').style.display="none";
	 document.getElementById('quit').style.display="block";
}
function xian(){
	 document.getElementById('tiduser').style.display="block";
	 document.getElementById('quit').style.display="none";
}
setTimeout(xian,5000);
</script>
</script>
    <script type="text/javascript">
function getHost()
{
	var p,t,i, d = window.location.host;
	d = (p=d.indexOf(':'))!=-1?d.substr(0, p):d;	 
	var t="";
	if(d.substr(0,3)=='www'){
		d = d.substr(4);
	}
	var t= window.location.search.replace("?","");

	document.getElementById("Login").src="http://shop.fj400.net/index.html?host="+d+"&t="+t;
	document.body.style.height="100%";
	document.body.style.overflow="hidden";
    document.body.style.overflowY="hidden";
	document.body.style.overflowX="hidden";
	
	
}
window.onload =getHost;
</script>
</head>

<body>
<div id="herder" >
	<div id="top">
		<img src="<?php echo RES;?>/images/logo.png" />
		<a href="/" >首页</a>
		<a href="<?php echo U('Home/Index/fc');?>" >功能介绍</a>
		<a href="<?php echo U('Home/Index/about');?>" >关于我们</a>
		<a href="<?php echo U('Home/Index/price');?>" >资费说明</a>
		<a href="<?php echo U('Home/Index/common');?>" >微信导航</a>
		<a href="<?php echo U('User/Index/index');?>" >管理中心</a>
        <a href="<?php echo U('Home/Index/help');?>" >帮助中心</a>
		<a class="line" ></a>
        <a href="#" class="a" id="tiduser" onmouseover="ying();" >您好：<span><?php echo (session('uname')); ?></span></a>
		<a href="#" class="a1" id="quit" onclick="Javascript:window.open('<?php echo U('System/Admin/logout');?>')" onLoad=setTimeout("abc.style.display='none'",5000) >安全退出</a>
	</div>
</div>
<div id="Frame" class="shadow">
	<div id="nav">
		<img src="<?php echo ($wecha["headerpic"]); ?>" width="50" height="50" />
		<ul class="ul">
			<li><strong><?php echo ($wecha["wxname"]); ?></strong><img src="<?php echo RES;?>/images/vip.png" /></li>
			<li>微信号：<?php echo ($wecha["weixin"]); ?></li>
		</ul>
		<ul class="ul2">
			<li>VIP有效时间：<?php if($_SESSION['viptime'] != 0): echo (date("Y-m-d",$thisUser["viptime"])); else: ?>vip0不限时间<?php endif; ?></li>
			<li>图文自定义：<?php echo ($thisUser["diynum"]); ?>/<?php echo ($userinfo["diynum"]); ?></li>
		</ul>
		<ul>
			<li>活动创建数：<?php echo ($thisUser["activitynum"]); ?>/<?php echo ($userinfo["activitynum"]); ?></li>
			<li>请求数：<?php echo ($thisUser["connectnum"]); ?>/<?php echo ($userinfo["connectnum"]); ?></li>
		</ul>
		<ul>
			<li>请求数剩余：<?php echo ($userinfo['connectnum']-$_SESSION['connectnum']); ?></li>
			<li>已使用：<?php echo $_SESSION['diynum']; ?></li>
		</ul>
		<ul>
			<li>当月赠送请求数：<?php echo ($userinfo["connectnum"]); ?></li>
			<li>当月剩余请求数：<?php echo $userinfo['connectnum']-$_SESSION['connectnum']; ?></li>
		</ul>
	</div>
    <div id="floatline"></div>
	<div id="Menu">
		<div class="top">
        	
            <?php if(in_array(MODULE_NAME,array('Function','Areply','Text','Voiceresponse','Index','Company','Other'))){ ?>
                <img src="<?php echo RES;?>/images/TwoMenu-ico-006.png" />
            <?php } ?>
            <?php if(in_array(MODULE_NAME,array('Home','Tmpls','Classify','Img','Diymen','Flash','Photo','plugmenu'))){ ?>
                <img src="<?php echo RES;?>/images/TwoMenu-ico-001.png" />
            <?php } ?>
            <?php if(in_array(MODULE_NAME,array('Lottery','Coupon','Guajiang','Wedding','Research'))){ ?>
                <img src="<?php echo RES;?>/images/TwoMenu-ico-003.png" />
            <?php } ?>
            <?php if(in_array(MODULE_NAME,array('Product','Groupon','orders','Host','Selfform','Adma','Panorama','Reply_info'))){ ?>
                <img src="<?php echo RES;?>/images/TwoMenu-ico-002.png" />
            <?php } ?>
            <?php if(in_array(MODULE_NAME,array('info','Member_card','privilege','create','exchange','Member'))){ ?>
                <img src="<?php echo RES;?>/images/TwoMenu-ico-004.png" />
            <?php } ?>
            <?php if(in_array(MODULE_NAME,array('Taobao','Api','Liuyan'))){ ?>
                <img src="<?php echo RES;?>/images/TwoMenu-ico-005.png" />
            <?php } ?>
                <!--<img src="<?php echo RES;?>/images/AMenu-Ico.png" />-->
            <a>
            	<?php if(in_array(MODULE_NAME,array('Function','Areply','Text','Voiceresponse','Index','Company','Other','Requerydata','Alipay_config'))){ ?>基础功能<?php } ?>
                <?php if(in_array(MODULE_NAME,array('Home','Tmpls','Classify','Img','Diymen','Flash','Photo','plugmenu'))){ ?>微网站<?php } ?>
                <?php if(in_array(MODULE_NAME,array('Lottery','Coupon','Guajiang','Research','Zadan','Wedding'))){ ?>营销功能<?php } ?>
                <?php if(in_array(MODULE_NAME,array('Product','Groupon','orders','Host','Selfform','Adma','Research','Reply_info','Panorama'))){ ?>微商务<?php } ?>
                <?php if(in_array(MODULE_NAME,array('info','Member_card','privilege','create','exchange','Member'))){ ?>微会员<?php } ?>
                <?php if(in_array(MODULE_NAME,array('Taobao','Api','Liuyan'))){ ?>互动模块<?php } ?>
            </a>
            <span>
            	<?php if(MODULE_NAME == 'Function'): ?>- 功能管理<?php endif; ?>
                <?php if(MODULE_NAME == 'Areply'): ?>- 关注回复<?php endif; ?>
                <?php if(MODULE_NAME == 'Text'): ?>- 文本回复<?php endif; ?>
                <?php if(MODULE_NAME == 'Voiceresponse'): ?>- 语音回复<?php endif; ?>
                <?php if(MODULE_NAME == 'Index'): ?>- 短信邮箱<?php endif; ?>
                <?php if(MODULE_NAME == 'Index'): ?>- 短信邮箱<?php endif; ?>
                <?php if(MODULE_NAME == 'Alipay_config'): ?>- 支付宝设置<?php endif; ?>
                <?php if(MODULE_NAME == 'Requerydata'): ?>- 统计分析<?php endif; ?>
                <?php if(MODULE_NAME == 'Company'): ?>- LBS回复<?php endif; ?>
                <?php if(MODULE_NAME == 'Home'): ?>- 首页设置<?php endif; ?>
                <?php if(MODULE_NAME == 'Tmpls'): ?>- 模版管理<?php endif; ?>
                <?php if(MODULE_NAME == 'Classify'): ?>- 分类管理<?php endif; ?>
                <?php if(MODULE_NAME == 'Img'): ?>- 图文回复<?php endif; ?>
                <?php if(MODULE_NAME == 'Diymen'): ?>- 自定义菜单<?php endif; ?>
                <?php if(MODULE_NAME == 'Flash'): ?>- 幻灯片<?php endif; ?>
                <?php if(MODULE_NAME == 'Photo'): ?>- 相册<?php endif; ?>
                <?php if(MODULE_NAME == 'plugmenu'): ?>- 相册<?php endif; ?>
                <?php if(MODULE_NAME == 'Panorama'): ?>- 360全景<?php endif; ?>
                <?php if(MODULE_NAME == 'Reply_info'): ?>- 回复配置<?php endif; ?>
                <?php if(MODULE_NAME == 'Lottery'): ?>- 大转盘<?php endif; ?>
                <?php if(MODULE_NAME == 'Coupon'): ?>- 优惠券<?php endif; ?>
                <?php if(MODULE_NAME == 'Guajiang'): ?>- 刮刮卡<?php endif; ?>
                <?php if(MODULE_NAME == 'Zadan'): ?>- 砸金蛋<?php endif; ?>
                <?php if(MODULE_NAME == 'Wedding'): ?>- 微喜帖<?php endif; ?>
                <?php if(MODULE_NAME == 'Research'): ?>- 微调研<?php endif; ?>
                <?php if(MODULE_NAME == 'Product'): ?>- 微商城<?php endif; ?>
                <?php if(MODULE_NAME == 'Groupon'): ?>- 微团购<?php endif; ?>
                <?php if(MODULE_NAME == 'orders'): ?>- 无线订餐<?php endif; ?>
                <?php if(MODULE_NAME == 'Host'): ?>- 通用订单<?php endif; ?>
                <?php if(MODULE_NAME == 'Selfform'): ?>- 万能表单<?php endif; ?>
                <?php if(MODULE_NAME == 'Adma'): ?>- DIY宣传<?php endif; ?>
                <?php if(MODULE_NAME == 'info'): ?>- 商家设置<?php endif; ?>
                <?php if(MODULE_NAME == 'Member_card'): ?>- 会员卡<?php endif; ?>
                <?php if(MODULE_NAME == 'privilege'): ?>- 会员特权<?php endif; ?>
                <?php if(MODULE_NAME == 'create'): ?>- 在线开卡<?php endif; ?>
                <?php if(MODULE_NAME == 'exchange'): ?>- 积分设置<?php endif; ?>
                <?php if(MODULE_NAME == 'Member'): ?>- 资料管理<?php endif; ?>
                <?php if(MODULE_NAME == 'Taobao'): ?>- 淘宝天猫<?php endif; ?>
                <?php if(MODULE_NAME == 'Api'): ?>- 第三方<?php endif; ?>
                <?php if(MODULE_NAME == 'Liuyan' ): ?>- 留言板<?php endif; ?>
            </span>
		</div>
		<div class="TwoMenu">
			<a href="<?php echo U('Function/index',array('token'=>$token,'id'=>session('wxid')));?>" >
            	<img src="<?php echo RES;?>/images/TwoMenu-ico-06.png" />
            	<span>基础</span>
            </a>
			<div id="TwoMenu-01" <?php if(in_array(MODULE_NAME,array('Function','Areply','Text','Img','Voiceresponse','Index','Company','Other','Requerydata','Alipay_config'))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
            	<img src="<?php echo RES;?>/images/TwoMenu-ico-006.png" /><a class="a">基础</a>
            </div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
			<a href="<?php echo U('Home/set',array('token'=>$token));?>" >
            	<img src="<?php echo RES;?>/images/TwoMenu-ico-01.png" />
                <span>3G站</span>
            </a>
			<div id="TwoMenu-02" <?php if(in_array(MODULE_NAME,array('Home','Tmpls','Classify','Diymen','Flash','Photo'))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
            	<img src="<?php echo RES;?>/images/TwoMenu-ico-001.png" /><a class="a">3G站</a>
            </div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
			<a href="<?php echo U('Lottery/index',array('token'=>$token));?>" >
            	<img src="<?php echo RES;?>/images/TwoMenu-ico-03.png" /><span>营销</span>
            </a>
			<div id="TwoMenu-03" <?php if(in_array(MODULE_NAME,array('Lottery','Coupon','Guajiang','Wedding','Zadan','Wedding'))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
            	<img src="<?php echo RES;?>/images/TwoMenu-ico-003.png" /><a class="a">营销</a>
            </div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
			<a href="<?php echo U('Product/index',array('token'=>$token));?>" >
            	<img src="<?php echo RES;?>/images/TwoMenu-ico-02.png" /><span>商务</span>
            </a>
			<div id="TwoMenu-04" <?php if(in_array(MODULE_NAME,array('Product','Groupon','orders','Host','Selfform','Adma','Panorama','Reply_info'))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
            	<img src="<?php echo RES;?>/images/TwoMenu-ico-002.png" /><a class="a">商务</a>
            </div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
			<a href="<?php echo U('Member_card/index',array('token'=>$token));?>" >
            	<img src="<?php echo RES;?>/images/TwoMenu-ico-04.png" /><span>会员</span>
            </a>
			<div id="TwoMenu-05" <?php if(in_array(MODULE_NAME,array('info','Member_card','privilege','create','exchange','Member'))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
            	<img src="<?php echo RES;?>/images/TwoMenu-ico-004.png" /><a class="a">会员</a>
            </div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
			<a href="<?php echo U('Taobao/index',array('token'=>$token));?>" >
            	<img src="<?php echo RES;?>/images/6-0.png" /><span>互动</span>
            </a>
			<div id="TwoMenu-06" <?php if(in_array(MODULE_NAME,array('Taobao','Api','Liuyan'))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
            	<img src="<?php echo RES;?>/images/6-00.png" /><a class="a">互动</a>
            </div>
		</div>
		<div class="ThreeMenu">
        	<div class="contab" <?php if(in_array(MODULE_NAME,array('Function','Areply','Text','Img','Voiceresponse','Index','Company','Other','Requerydata','Alipay_config'))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
                <a href="<?php echo U('Function/index',array('token'=>$token,'id'=>session('wxid')));?>" class="Red" >
                	<img src="<?php echo RES;?>/images/1-0.png" /><span>功能管理</span>
                </a>
                <a href="<?php echo U('Areply/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/1-1.png" /><span>关注回复</span>
                </a>
                <a href="<?php echo U('Text/index',array('token'=>$token));?>" class="Navy" >
                    <img src="<?php echo RES;?>/images/1-2.png" /><span>文本回复</span>
                </a>
                <a href="<?php echo U('Img/index',array('token'=>$token));?>" class="LightPurple" >
                    <img src="<?php echo RES;?>/images/2-3.png" /><span>图文回复</span>
                </a>
                <a href="<?php echo U('Voiceresponse/index',array('token'=>$token));?>" class="DarkGreen" >
                    <img src="<?php echo RES;?>/images/1-3.png" /><span>语音回复</span>
                </a>
                <a href="<?php echo U('Index/editsms',array('id'=>session('wxid'),'token'=>$token));?>" class="LightBlue" >
                    <img src="<?php echo RES;?>/images/1-4.png" /><span>短信设置</span>
                </a>
                <a href="<?php echo U('Index/editemail',array('id'=>session('wxid'),'token'=>$token));?>" class="Orange" >
                    <img src="<?php echo RES;?>/images/ThreeMenu-ico-07.png" /><span>邮箱设置</span>
                </a>
                <a href="<?php echo U('Company/index',array('token'=>$token));?>" class="Brown" >
                    <img src="<?php echo RES;?>/images/1-5.png" /><span>LBS回复</span>
                </a>
                <a href="<?php echo U('Alipay_config/index',array('token'=>$token));?>" class="LightPurple" >
                    <img src="<?php echo RES;?>/images/2-6.png" /><span>支付宝</span>
                </a>
                <a href="<?php echo U('Requerydata/index',array('token'=>$token));?>" class="LightRed" >
                    <img src="<?php echo RES;?>/images/TwoMenu-ico-05.png" /><span>统计分析</span>
                </a>
            </div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
        	<div class="contab" <?php if(in_array(MODULE_NAME,array('Home','Tmpls','Classify','Diymen','Flash','Photo','plugmenu'))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
                 <a href="<?php echo U('Home/set',array('token'=>$token));?>" class="Red" >
                     <img src="<?php echo RES;?>/images/2-0.png" /><span>首页设置</span>
                 </a>
                <a href="<?php echo U('Tmpls/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/2-1.png" /><span>模版管理</span>
                </a>
                <a href="<?php echo U('Classify/index',array('token'=>$token));?>" class="Navy" >
                    <img src="<?php echo RES;?>/images/2-2.png" /><span>分类管理</span>
                </a>
                <a href="<?php echo U('Diymen/index',array('token'=>$token));?>" class="LightBlue" >
                    <img src="<?php echo RES;?>/images/2-4.png" /><span>DIY菜单</span>
                </a>
                <a href="<?php echo U('Flash/index',array('token'=>$token));?>" class="Orange" >
                    <img src="<?php echo RES;?>/images/2-5.png" /><span>幻灯片</span>
                </a>
                <a href="<?php echo U('Photo/index',array('token'=>$token));?>" class="Brown" >
                    <img src="<?php echo RES;?>/images/2-6.png" /><span>相册</span>
                </a>
                <a href="<?php echo U('Home/plugmenu',array('token'=>$token));?>" class="LightPurple" >
                    <img src="<?php echo RES;?>/images/2-6.png" /><span>拨号版权</span>
                </a>
                <a href="<?php echo U('Yulan/index',array('token'=>$token));?>" target="_blank" class="Highland" >
                    <img src="<?php echo RES;?>/images/2-1.png" /><span>在线预览</span>
                </a>
            </div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
            <div class="contab" <?php if(in_array(MODULE_NAME,array('Lottery','Coupon','Guajiang','Research','Zadan','Wedding'))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
                <a href="<?php echo U('Lottery/index',array('token'=>$token));?>" class="Red"  >
                    <img src="<?php echo RES;?>/images/3-0.png" /><span>大转盘</span>
                </a>
                <a href="<?php echo U('Coupon/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/3-1.png" /><span>优惠券</span>
                </a>
                <a href="<?php echo U('Guajiang/index',array('token'=>$token));?>" class="Navy" >
                    <img src="<?php echo RES;?>/images/3-2.png" /><span>刮刮卡</span>
                </a>
                 <a href="<?php echo U('Zadan/index',array('token'=>$token));?>" class="DarkGreen">
                    <img src="<?php echo RES;?>/images/3-3.png" /><span>砸金蛋</span>
                </a>
                <a href="<?php echo U('Wedding/index',array('token'=>$token));?>" class="LightBlue">
                    <img src="<?php echo RES;?>/images/3-3.png" /><span>微喜帖</span>
                </a>
                <a href="javascript:alert('即将发布')" class="Orange" >
                    <img src="<?php echo RES;?>/images/3-4.png" /><span>微调研</span>
                </a>
            </div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
            <div class="contab" <?php if(in_array(MODULE_NAME,array('Product','Groupon','orders','Host','Selfform','Adma','Panorama','Reply_info'))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
                <a href="<?php echo U('Product/index',array('token'=>$token));?>" class="Red"  >
                    <img src="<?php echo RES;?>/images/5-0.png" /><span>微商城</span>
                </a>
                <a href="<?php echo U('Groupon/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/5-1.png" /><span>微团购</span>
                </a>
                <a href="<?php echo U('Product/orders',array('token'=>$token,'dining'=>1));?>" class="Navy" >
                    <img src="<?php echo RES;?>/images/5-2.png" /><span>无线订餐</span>
                </a>
                <a href="<?php echo U('Host/index',array('token'=>$token));?>"  class="DarkGreen" >
                    <img src="<?php echo RES;?>/images/ThreeMenu-ico-09.png" /><span>通用订单</span>
                </a>
                <a href="<?php echo U('Selfform/index',array('token'=>$token));?>" class="LightBlue" >
                    <img src="<?php echo RES;?>/images/ThreeMenu-ico-09.png" /><span>万能表单</span>
                </a>
                <a href="<?php echo U('Adma/index',array('token'=>$token));?>"  class="Orange" >
                    <img src="<?php echo RES;?>/images/ThreeMenu-ico-09.png" /><span>DIY宣传</span>
                </a>
                <a href="<?php echo U('Panorama/index',array('token'=>$token));?>" class="LightPurple" >
                    <img src="<?php echo RES;?>/images/2-6.png" /><span>360全景</span>
                </a>
            </div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
            <div class="contab" <?php if(in_array(MODULE_NAME,array('info','Member_card','privilege','create','exchange','Member'))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
                <a href="<?php echo U('Member_card/info',array('token'=>$token));?>"  class="Red"  >
                    <img src="<?php echo RES;?>/images/4-1.png" /><span>商家设置</span>
                </a>
                <a href="<?php echo U('Member_card/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/4-1.png" /><span>会员卡</span>
                </a>
                <a href="<?php echo U('Member_card/privilege',array('token'=>$token));?>" class="Navy" >
                    <img src="<?php echo RES;?>/images/4-1.png" /><span>会员特权</span>
                </a>
                <a href="<?php echo U('Member_card/create',array('token'=>$token));?>" class="DarkGreen" >
                    <img src="<?php echo RES;?>/images/4-1.png" /><span>在线开卡</span>
                </a>
                <a href="<?php echo U('Member_card/exchange',array('token'=>$token));?>" class="LightBlue" >
                    <img src="<?php echo RES;?>/images/4-1.png" /><span>积分设置</span>
                </a>
                <a href="<?php echo U('Member/index',array('token'=>$token));?>" class="Orange" >
                    <img src="<?php echo RES;?>/images/4-1.png" /><span>资料管理</span>
                </a>
            </div>
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------- -->
            <div class="contab" <?php if(in_array(MODULE_NAME,array('Taobao','Api','Liuyan'))){ ?>style="display:block;" <?php }else{ ?>style="display:none;"<?php } ?> >
                <a href="<?php echo U('Taobao/index',array('token'=>$token));?>"  class="Red"  >
                    <img src="<?php echo RES;?>/images/ThreeMenu-ico-04.png" /><span>淘宝天猫</span>
                </a>
                <a href="<?php echo U('Api/index',array('token'=>$token));?>" class="Highland" >
                    <img src="<?php echo RES;?>/images/ThreeMenu-ico-04.png" /><span>第三方</span>
                </a>
                <a href="<?php echo U('Liuyan/index',array('token'=>$token));?>" class="Navy" >
                    <img src="<?php echo RES;?>/images/ThreeMenu-ico-04.png" /><span>留言板</span>
                </a>
            </div>
		</div>
	</div>
	<div id="Content" >
	</div>
<script src="/tpl/static/artDialog/jquery.artDialog.js?skin=default"></script>
<script src="/tpl/static/artDialog/plugins/iframeTools.js"></script>
<script src="<?php echo RES;?>/js/date/WdatePicker.js"></script>
<form class="form" method="post" action=""  target="_top" enctype="multipart/form-data" >
<div class="content" style="width:920px; background:none; margin-left:275px; border:none; margin-bottom:30px;" >
<!--活动开始-->
<div class="cLineB">
  <h4>编辑优惠券活动开始内容</h4><a href="javascript:history.go(-1);" class="right btnGrayS vm" style="margin-top:-27px">返回</a></div>  
<div class="msgWrap bgfc">
 
<table class="userinfoArea" style=" margin:0;" border="0" cellspacing="0" cellpadding="0" width="100%"><tbody>
<tr>
  <th valign="top"><span class="red">*</span>关键词：</th>
  <td><input type="input" class="px" id="keyword" value="<?php echo ($vo["keyword"]); ?>" name="keyword" style="width:400px"><br>
  	<span class="red">只能写一个关键词</span>，用户输入此关键词将会触发此活动。</td>
  <td rowspan="7" valign="top"><div style="margin-left:20px"><img id="pic2_src" src="<?php if($vo['starpicurl'] == ''): echo C('site_url');?>/tpl/Wap/default/common/css/guajiang/images/activity-coupon-start.jpg<?php else: echo ($vo["starpicurl"]); endif; ?>" width="373px">
<br>
<input class="px" name="starpicurl" value="<?php if($vo['starpicurl'] == ''): echo C('site_url');?>/tpl/Wap/default/common/css/guajiang/images/activity-coupon-start.jpg<?php else: echo ($vo["starpicurl"]); endif; ?>" onclick="document.getElementById('pic2_src').src=this.value;" style="width:363px;" id="pic2">
<br> <script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('pic2',1000,500,'<?php echo ($token); ?>')" class="a_upload">上传</a> <a href="###" onclick="viewImg('pic2')">预览</a>&nbsp;活动开始图片
  </div><div style="margin-left:20px"><img id="pic1_src" src="<?php if($vo['zjpic'] == ''): echo C('site_url');?>/tpl/Wap/default/common/css/guajiang/images/activity-coupon-winning.jpg<?php else: echo ($vo["zjpic"]); endif; ?>" width="373px">
<br>
<input class="px" name="zjpic" value="<?php if($vo['zjpic'] == ''): echo C('site_url');?>/tpl/Wap/default/common/css/guajiang/images/activity-coupon-winning.jpg<?php else: echo ($vo["zjpic"]); endif; ?>" onclick="document.getElementById('pic1_src').src=this.value;" style="width:363px;" id="pic1">
<br> <script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('pic1',1000,500,'<?php echo ($token); ?>')" class="a_upload">上传</a> <a href="###" onclick="viewImg('pic1')">预览</a>&nbsp; 中奖后显示的头部图片
     <br>

  </div></td>
</tr>
<tr>
  <th valign="top"><span class="red">*</span>活动名称：</th>
  <td><input type="input" class="px" id="title" value="<?php echo ($vo["title"]); ?>" name="title" style="width:400px">
  	<br>
  	请不要多于50字!
  	</td>
  </tr>
<TR style="display:none">
  	<th valign="top">成功抢到券说明：</th>
  	<td><input type="input" class="px" id="sttxtt" value="<?php echo ($vo["sttxt"]); ?>" name="sttxtt" style="width:400px" />
  		<br />
  		成功抢到优惠券的提示信息</td>
                                    </TR>
<tr>
  	<th valign="top"><span class="red">*</span>优惠券介绍：</th>
  	<td><textarea class="px" id="sttxt" name="sttxt" style="width:400px; height: 125px;"><?php echo ($vo["sttxt"]); ?></textarea>
  		 </td>
</tr>
</TR>
<tr>
	<th><span class="red">*</span>活动时间：</th>
	<td><input type="input" class="px" id="statdate" value="<?php if($vo['statdate'] != ''): echo (date("Y-m-d H:i:s",$vo["statdate"])); else: echo date('Y-m-d H:i:s',mktime(0, 0, 0, date("m") , date("d"), date("Y"))); endif; ?>" onClick="WdatePicker()" name="statdate" />                
		到
		<input type="input" class="px" id="enddate" value="<?php if($vo['enddate'] != ''): echo (date("Y-m-d H:i:s",$vo["enddate"])); else: echo date('Y-m-d H:i:s',mktime(0, 0, 0, date("m") , date("d")+3, date("Y"))); endif; ?>" name="enddate" onClick="WdatePicker()"  /> 
	</td>
</tr>
<tr>
<th valign="top"><span class="red">*</span>优惠券活动说明：</th>
<td><textarea class="px" id="info" name="info" style="width: 400px; height: 125px;"><?php echo ($vo["info"]); ?></textarea>
活动说明. </td>
</tr>
<tr>
<th><span class="red">*</span>兑换券使用说明：</th>
<td><textarea id="aginfo" class="px" name="aginfo" style="width: 400px; height: 125px;"><?php echo ($vo["aginfo"]); ?></textarea>用户获取优惠券后显示的提示信息
</td>
</tr>
</tbody>
</table>
 </div> 
  
<!--活动结束-->
<div class="cLineB"><h4>活动结束内容</h4></div> 
<div class="msgWrap bgfc">
 
  	<table class="userinfoArea" style=" margin: 0;" border="0" cellspacing="0" cellpadding="0" width="100%">
  		<tbody>
  			<tr>
  				<th valign="top"><span class="red">*</span>活动结束公告主题：</th>
  				<td><input type="input" class="px" id="endtite" value="<?php echo ($vo["endtite"]); ?>" name="endtite" style="width:400px">
  					<br>
  					请不要多于50字! </td>
  				<td rowspan="4" valign="top"><div style="margin-left:20px"><img id="pic3_src" src="<?php if($vo['endpicurl'] == ''): echo C('site_url');?>/tpl/Wap/default/common/css/guajiang/images/activity-coupon-end.jpg<?php else: echo ($vo["endpicurl"]); endif; ?>" width="373px"> <br>
  					<input class="px" id="pic3" name="endpicurl" onchange="document.getElementById('pic3_src').src=this.value;" value="<?php if($vo['endpicurl'] == ''): echo C('site_url');?>/tpl/Wap/default/common/css/guajiang/images/activity-coupon-end.jpg<?php else: echo ($vo["endpicurl"]); endif; ?>" style="width:363px;">
  					<br> <script src="/tpl/static/upyun.js"></script><a href="###" onclick="upyunPicUpload('pic3',1000,500,'<?php echo ($token); ?>')" class="a_upload">上传</a> <a href="###" onclick="viewImg('pic3')">预览</a>&nbsp;活动结束图片 </div></td>
  				</tr>
  			<tr>
  				<th valign="top">活动结束说明：</th>
  				<td valign="top"><textarea class="px" id="endinfo" name="endinfo" style="width: 400px; height: 125px;"><?php echo ($vo["endinfo"]); ?></textarea>活动结束显示
  				 </td>
  				</tr>
  			</tbody>
  		</table>
  </div> 
  
  
<!--奖项设置-->
<div class="cLineB">
          	<h4>优惠券设置</h4></div> 
<div class="msgWrap bgfc">

<table class="userinfoArea" style=" margin: 0;" border="0" cellspacing="0" cellpadding="0" width="100%"><tbody>
<tr>
<th valign="top"><span class="red">*</span>优惠券名称1：</th>
<td><input type="input" class="px" id="fist" name="fist" value="<?php echo ($vo["fist"]); ?>" style="width:250px">
请不要多于50字! </td>
  <td rowspan="9" valign="top">&nbsp;</td>
</tr>
<tr>
<th valign="top"><span class="red">*</span>优惠券数量：</th>
<td><input type="input" class="px" id="fistnums" name="fistnums" value="<?php echo ($vo["fistnums"]); ?>" style="width:60px">
</td>
                                    </tr>
<tr>
<th valign="top">优惠券名称2：</th>
<td><input type="input" class="px" id="second" name="second" value="<?php echo ($vo["second"]); ?>" style="width:250px">
请不要多于50字! </td>
                                        </tr>
<tr>
<th valign="top">优惠券数量：</th>
<td><input type="input" class="px" id="secondnums" name="secondnums" value="<?php echo ($vo["secondnums"]); ?>" style="width:60px">
</td>
                                        </tr>
<tr>
<th valign="top">优惠券名称3：</th>
<td><input type="input" class="px" id="third" name="third" value="<?php echo ($vo["third"]); ?>" style="width:250px">
请不要多于50字! </td>
                                        </tr>
<tr>
<th valign="top">优惠券数量：</th>
<td><input type="input" class="px" id="thirdnums" name="thirdnums" value="<?php echo ($vo["thirdnums"]); ?>" style="width:60px">
 </td>

  </tbody>

<tbody>
<tr>
<th valign="top"><span class="red">*</span>预计活动的人数：</th>
<td><input type="input" class="px" id="allpeople" name="allpeople"   value="<?php echo ($vo["allpeople"]); ?>" style="width:150px"/>  预估活动人数直接影响抽奖概率：中奖概率 = 奖品总数/(预估活动人数*每人抽奖次数) 如果要确保任何时候都100%中奖建议设置为1人参加!<span class='red'>如果要确保任何时候都100%中奖建议设置为1人参加!并且奖项只设置一等奖.</span></td>
  </tr>
<tr>
<th valign="top"><span class="red">*</span>每人最多允许抽奖次数：</th>
<td><input type="input" class="px" id="canrqnums" name="canrqnums"   value="<?php echo ($vo["canrqnums"]); ?>" style="width:150px"/>
必须1-5之间的数字</td>
 </tr>
                                        
<tr style="display:none">
<th valign="top">SN码生成设置：</th>
<td>
    <input class="radio" type="radio" checked name="snimport" value="0">自动生成  
    <input class="radio" type="radio" name="snimport" value="1">手动生成(SN码管理)
</td> 
</tr>
<tr>
<th valign="top">兑奖密码：</th>
<td><input class="px" id="parssword" name="parssword" value="<?php echo ($vo["parssword"]); ?>" style="width:150px" type="input">
消费确认密码长度小于15位 不设置密码,兑奖页面的密码输入框则不出现</td>
                                        </tr>
                                                                       <tr>
<th valign="top">SN码重命名为：</th>
<td><input class="px" id="renamesn" name="renamesn" value="<?php if($vo.renamesn): echo ($vo["renamesn"]); else: ?>SN码<?php endif; ?>" style="width:150px" type="input"> 例如：CND码,充值密码,SN码 这个主意用于修改SN码的名称，不懂请别修改</td>
                                        </tr>
                                         <tr>
<th valign="top">手机号重命名：</th>
<td><input class="px" id="renametel" name="renametel" value="<?php if($vo.renametel): echo ($vo["renametel"]); else: ?>手机号<?php endif; ?>" style="width:150px" type="input"> 例如：QQ号,微信号,手机号等其他联系方式，不懂请别修改</td> 
                                        </tr>
                                        <tr>
<th valign="top">是否显示奖品数量：</th>
<td><input class="radio" type="radio" name="displayjpnums" value="1"  <?php if($vo['displayjpnums'] == 1): ?>checked<?php endif; ?> >显示  <input class="radio" type="radio" name="displayjpnums" value="0"  <?php if($vo['displayjpnums'] == 0): ?>checked<?php endif; ?>>不显</td> 
                                        </tr>
<tr>
<th>&nbsp;</th>
<td><button type="submit" name="button" class="btnGreen">保存</button>　<a href="" class="btnGray vm">取消</a>　<span class="red">请确认功能管理已开启优惠券功能</span></td>
                                    </tr>
</tbody>
</table>
</div> 
</div>
</form>

	<div style="clear:both;"></div>
</div>



</body>
</html>