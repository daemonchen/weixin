<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
<title>赴宴名单</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/wedding/wedding.css" media="all">
<style type="text/css">
.reload {
position: absolute;
right: 0;
}
header>div>ul li {
display: inline-block;
}
</style>
</head>
<body>
<?php if($isShow == 0): ?><div class="pwd" >
 <form action="index.php?g=Wap&m=Wedding&a=info&id=<?php echo ($id); ?>&token=<?php echo ($Token); ?>" method="post" class="form-horizontal form-validate" novalidate="novalidate">
 
<p class="title">请输入密码:</p>
<p><input type="password" name="pwd" class="pwdinput" ></p>
<p><input class="px" type="submit" name="sbmt" value="提交"> </p>

 </form>
</div>
<?php else: ?>

<div class="container">
<header>
<div>
<ul class="box">
<li class="relative"><span class="pic"><img src="<?php echo ($Wedding['picurl']); ?>"></span></li>
<li>
<div class="name">
<?php if($wedding['who_first'] == 1): echo ($Wedding['man']); ?>和<?php echo ($Wedding['woman']); ?>
<?php else: ?>
<?php echo ($Wedding['woman']); ?>和<?php echo ($Wedding['man']); endif; ?>                    
<div>
</div></div></li>
<li>
<div class="reload">
赴宴名单
</div>
</li>
</ul>
</div>
</header>
            <div style=" height:70px"></div>
<section class="body">
            <div>
            	<table width="100%" border="0" cellpadding="0" cellspacing="0" class="integral_table">
<thead>
<tr>
  <th>姓名</th>
  <th>手机号码</th>
  <th>人数</th>
  </tr>
<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
 <td><?php echo ($vo["username"]); ?></td>
 <td><?php echo ($vo["telphone"]); ?></td>
 <td><?php echo ($vo["count"]); ?></td>
 </tr><?php endforeach; endif; else: echo "" ;endif; ?> 
</thead>
<tbody>
  </tbody>
<tfoot>
<tr>
<td>&nbsp;</td>
<td class="right">人数总计：</td>
<td><span class="heji"><?php echo ($totalCount); ?></span></td>
</tr>
</tfoot>
</table>
            </div>
</section>


            </div><?php endif; ?>           
<footer></footer>




</body></html>