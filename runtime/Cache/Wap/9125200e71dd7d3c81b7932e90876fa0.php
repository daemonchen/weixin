<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="zh-CN" manifest="/misc/wei_cache_new.manifest">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="format-detection" content="telephone=no" />
<title></title>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/card/wei_webapp_new_v1.0.4.css" />
</head>

<body id="page_applicable" class="topCities">
<!--/门店地址/-->
<div id="mappContainer">
  <div class="footFix" id="topCity" data-ffix-top="0" data-hidden-when-lost="门店特权">
    <div class="inner"><span class="cityname">门店特权</span><a class="toggle" href="javascript:void(0)" hidden="">{#toggleCityLink.label#}</a></div>
  </div>
  <div class="inner root" style="height: 3576px;">
	<?php if(is_array($addr)): $i = 0; $__LIST__ = $addr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$addr): $mod = ($i % 2 );++$i;?><h2><?php echo ($addr["cname"]); ?></h2>
    <ul class="round">
      <li class="addr" data-hidden-when-lost="<?php echo ($addr["info"]); ?>"><?php echo ($addr["info"]); ?></li>
      <li class="tel" data-hidden-when-lost="<?php echo ($addr["tel"]); ?>"><a class="autotel" href="tel:<?php echo ($addr["tel"]); ?>" data-telnum="tel:<?php echo ($addr["tel"]); ?>"><?php echo ($addr["tel"]); ?></a></li>
    </ul><?php endforeach; endif; else: echo "" ;endif; ?>
  </div>
  <div class="footFix" id="footReturn"><a href="javascript:void(0)" onClick="location.href='<?php echo U('Card/vip',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id']));?>';"><span>返回会员卡页</span></a></div>
</div>

<!-------------------- templates end -------------------->
<script>
function shareFriend() {
    WeixinJSBridge.invoke('sendAppMessage',{
                            "appid":window.shareData.appid,
                            "img_url":window.shareData.imgUrl,
                            "img_width":"640",
                            "img_height":"640",
                            "link":window.shareData.sendFriendLink,
                            "desc":window.shareData.tContent,
                            "title":window.shareData.tTitle
                            }, function(res) {
                            _report('send_msg', res.err_msg);
                            })
}
function shareTimeline() {
    WeixinJSBridge.invoke('shareTimeline',{
                            "img_url":window.shareData.imgUrl,
                            "img_width":"640",
                            "img_height":"640",
                            "link":window.shareData.timeLineLink,
                            "desc": window.shareData.tContent,
                            "title": window.shareData.tTitle
                            }, function(res) {
                            _report('timeline', res.err_msg);
                            });
}
function shareWeibo() {
    WeixinJSBridge.invoke('shareWeibo',{
                            "content":window.shareData.wContent,
                            "url":'http://meishi.qq.com/weixin',
                            }, function(res) {
                            _report('weibo', res.err_msg);
                            });
}
// 当微信内置浏览器完成内部初始化后会触发WeixinJSBridgeReady事件。
document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {

        // 发送给好友
        WeixinJSBridge.on('menu:share:appmessage', function(argv){
            shareFriend();
            });

        // 分享到朋友圈
        WeixinJSBridge.on('menu:share:timeline', function(argv){
            shareTimeline();
            });

        // 分享到微博
        WeixinJSBridge.on('menu:share:weibo', function(argv){
            shareWeibo();
            });
        }, false)
</script>
</body>
</html>