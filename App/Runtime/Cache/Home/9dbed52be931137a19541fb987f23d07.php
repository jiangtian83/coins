<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" >
<meta name="renderer" content="webkit">
<meta name="keywords" content=""/>
<meta name="description" content=""/>
<meta property="wb:webmaster" content="8af72a3a7309f0ee">
    <title><?php if(!empty($article)): echo ($article["title"]); ?>-<?php endif; echo ((isset($config["title"]) && ($config["title"] !== ""))?($config["title"]):"虚拟币交易网站"); ?></title>
	<link rel="Shortcut Icon" type="image/x-icon" href="/favicon.ico">
    <link rel="stylesheet" type="text/css" href="/Public/Home/css/base.css">
    <link rel="stylesheet" type="text/css" href="/Public/Home/css/layout.css">
    <link rel="stylesheet" type="text/css" href="/Public/Home/css/subpage.css">
    <link rel="stylesheet" type="text/css" href="/Public/Home/css/user.css">
    <link rel="stylesheet" type="text/css" href="/Public/Home/css/coin.css">
    <link rel="stylesheet" type="text/css" href="/Public/Home/css/zcpc.css">
    <link rel="stylesheet" type="text/css" href="/Public/Home/iconfont/demo.css">
    <link rel="stylesheet" type="text/css" href="/Public/Home/iconfont/iconfont.css">
    <link rel="stylesheet" type="text/css" href="/Public/Home/css/jb_style.css">
    <script src="/Public/Home/js/hm.js">
    </script><script type="text/javascript" src="/Public/Home/js/jquery-1.js"></script>
    <script type="text/javascript" src="/Public/Home/js/downList.js"></script>


    <script type="text/javascript" src="/Public/js/jquery-1.8.2.js"></script>
    <script type="text/javascript" src="/Public/js/jquery-2.1.1.min.js"></script>
    <script src="/Public/js/bootstrap.min.js?v=3.4.0"></script>
    <script type="text/javascript" src="/Public/js/layer/layer.js"></script>
    <script src="/Public/js/jquery.validate.min.js"></script>
    <script src="/Public/js/messages_zh.min.js"></script>
    <script src="/Public/js/base.js"></script>

</head>
<body>
<!--<div class="clearfix phone_top" id="phone_top_div" style="display:none;">
	<div class="left">
		<p class="left phone_logo"><img src="/images/phone_logo01.png"/></p>
		<p class="left phone_title">第一数字货币众筹交易平台</p>
	</div>
	<a href="javascript:hidephone();" class="phone_x">X</a>
</div>-->
<!--top start-->
<div style="background:#f9f9f9; height:30px;">
    <div style="width:1000px; margin:0 auto;">
        <ul class="qqkf left" style="line-height:30px; color:#999;">
            <li class="phone"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($config['qq1']); ?>&site=qq&menu=yes" class="qq_qq"></a><?php echo ((isset($config["qq1"]) && ($config["qq1"] !== ""))?($config["qq1"]):"暂无"); ?></li>
            <li class="phone400"><?php echo ((isset($config["tel"]) && ($config["tel"] !== ""))?($config["tel"]):"暂无"); ?></li>
            <li class="phone_email"><a href="mailto:<?php echo ($config['email']); ?>"><?php echo ((isset($config["email"]) && ($config["email"] !== ""))?($config["email"]):"暂无"); ?></a></li>
            <li>&nbsp;&nbsp;工作日:9-19时 节假日:9-18时</li>
        </ul>
            <?php if(!empty($_SESSION['USER_KEY_ID'])): ?><div class="person right">
                    <a class="left myhome" href="<?php echo U('ModifyMember/modify');?>" style=" height:30px; line-height:30px; margin-right:5px;">
                        <?php echo ($username); ?> </a>
                        
                    <div style="display: none;" class="mywallet_list"><div class="clear"><ul class="balance_list"><h4>可用余额</h4><li><a href="javascript:void(0)"><em style="margin-top: 5px;" class="deal_list_pic_cny"></em><strong>人民币：</strong><span><?php echo ($member["rmb"]); ?></span></a></li></ul><ul class="freeze_list"><h4>委托冻结</h4><li><a href="javascript:void(0)"><em style="margin-top: 5px;" class="deal_list_pic_cny"></em><strong>人民币：</strong><span><?php echo ($member["forzen_rmb"]); ?></span></a></li></ul></div><div class="mywallet_btn_box"><a href="<?php echo U('User/pay');?>">充值</a><a href="<?php echo U('User/draw');?>">提现</a><a href="<?php echo U('User/index');?>">转入</a><a href="<?php echo U('User/index');?>">转出</a><a href="<?php echo U('Entrust/manage');?>">委托管理</a><a href="<?php echo U('Trade/myDeal');?>">成交查询</a></div></div>
                    <span class="left" style="height:30px; line-height:30px; color:#999; margin-right:5px;">(UID: <?php echo (session('USER_KEY_ID')); ?> )</span>
                    <a class="left" href="<?php echo U('Login/loginOut');?>" style="height:30px; line-height:30px; margin:0 5px;">退出</a>
                    <div id="my" class="account left" href="javascript:void(0)" style="z-index:9997; margin-right:5px;">
                        <a class="user_me" href="<?php echo U('User/index');?>">我的账户</a>
                        <ul class="accountList" style="padding: 6px 0px; background: rgb(85, 85, 85) none repeat scroll 0% 0%; border-radius: 5px 0px 5px 5px; display: none;">
                            <!--<li class="accountico no"></li>-->
                            <li><a href="<?php echo U('User/index');?>">我的资产</a></li>
                            <li><a href="<?php echo U('Entrust/manage');?>">我的交易</a></li>
                            <li><a href="<?php echo U('User/zhongchou');?>">我的众筹</a></li>
                            <li style="border-top:1px solid #666;"><a href="<?php echo U('User/pay');?>">人民币充值</a></li>
                            <li><a href="<?php echo U('User/draw');?>">人民币提现</a></li>
                            <li style="border-bottom:1px solid #444;"><a href="<?php echo U('User/index');?>">充币提币</a></li>
                            <li><a href="<?php echo U('User/updatePassword');?>">修改密码</a></li>
                            <li><a href="<?php echo U('User/sysMassage');?>">系统消息<?php if($newMessageCount): ?><span class="messagenum"><?php echo ($newMessageCount); ?></span><?php endif; ?></a></li>
                        </ul>
                    </div>
                </div><?php endif; ?>
        </if>
		<?php if(empty($_SESSION['USER_KEY_ID'])): ?><div class="loginArea right" style=" margin-right:5px;">
            	<a href="<?php echo U('Login/index');?>" style="color:#f60; font-size:14px;">登录</a>
            	<span class="sep">&nbsp;|&nbsp;</span>
            	<a href="<?php echo U('Reg/reg');?>" style="color:#f60; font-size:14px;">注册</a>
        		</div><?php endif; ?>
    </div>
</div>
<div class="top">
    <div class="wapper clearfix">
        <h1 class="left"><a href="<?php echo U('Index/index');?>"><img style=" width:280px; height:70px;" src="<?php echo ($config["logo"]); ?>" alt="虚拟币" title="虚拟币"></a></h1>
        <ul class="nav right" style="z-index:9995;">
            <li><a href="<?php echo U('Index/index');?>">首页</a></li>
            <li><a href="<?php echo U('Orders/currency_trade');?>">交易大厅</a></li>
            <li><a href="<?php echo U('Zhongchou/index');?>">认购中心<!--hr--></a></li>
            <li><a href="<?php echo U('Safe/index');?>">用户中心</a></li>
            <li><a href="<?php echo U('Help/index',array('id'=>60));?>">帮助中心</a></li>
            <li><a href="<?php echo U('Art/index',array('ramdon_id'=>'1'));?>">最新动态</a></li>
            <li><a href="<?php echo U('Market/index');?>">行情中心</a></li>
            <li><a href="<?php echo U('Dow/index');?>">下载中心</a></li>
        </ul>
    </div>
</div>
<div class="pclxfsbox"> 
		<ul> 
			<li id="opensq">
				<i class="pcicon1 iscion6" ></i>
				<div class="pcicon1box">
					<div class="iscionbox" >
						<p>在线咨询</p>
						<p><?php echo ((isset($config['worktime']) && ($config['worktime'] !== ""))?($config['worktime']):"暂无"); ?></p>
					</div>
					<i></i>
				</div>
			</li>
			<li> 
				<i class="pcicon1 iscion1"></i>
				<div class="pcicon1box">
					<div class="iscionbox">
						<p><img src="<?php echo ($config['weixin']); ?>" alt="投筹网微信公众号" width="108"></p>
						<p><?php echo ((isset($config["name"]) && ($config["name"] !== ""))?($config["name"]):"虚拟网"); ?>微信群</p>
					</div>
					<i></i>
				</div>
			</li>
			<li>
				<i class="pcicon1 iscion2"></i>
				<div class="pcicon1box">
					<div class="iscionbox">
						<p><?php echo ((isset($config['tel']) && ($config['tel'] !== ""))?($config['tel']):"暂无"); ?></p>
						<p><?php echo ((isset($config["name"]) && ($config["name"] !== ""))?($config["name"]):"虚拟网"); ?></p>
					</div>
					<i></i>
				</div>
			</li>
           <li>
				<i class="pcicon1 iscion3"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($config['qq1']); ?>&site=qq&menu=yes"></a></i>
				<div class="pcicon1box">
					<div class="iscionbox">
						<p><?php echo ((isset($config["qq1"]) && ($config["qq1"] !== ""))?($config["qq1"]):"暂无"); ?></p>
						<p><?php echo ((isset($config["name"]) && ($config["name"] !== ""))?($config["name"]):"虚拟网"); ?>QQ在线客服1</p>
					</div>
					<i></i>
				</div>
			</li>
            <li>
				<i class="pcicon1 iscion3" style="background:url(/Public/Home/images/kefu2.png) no-repeat #9b9b9b;background-position:-144px 11px;"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($config['qq2']); ?>&site=qq&menu=yes"></a></i>
				<div class="pcicon1box">
					<div class="iscionbox">
						<p><?php echo ((isset($config["qq2"]) && ($config["qq2"] !== ""))?($config["qq2"]):"暂无"); ?></p>
						<p><?php echo ((isset($config["name"]) && ($config["name"] !== ""))?($config["name"]):"虚拟网"); ?>QQ在线客服2</p>
					</div>
					<i></i>
				</div>
			</li>
            <li>
				<i class="pcicon1 iscion3" style="background:url(/Public/Home/images/kefu3.png) no-repeat #9b9b9b;background-position:-144px 11px;"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($config['qq3']); ?>&site=qq&menu=yes"></a></i>
				<div class="pcicon1box">
					<div class="iscionbox">
						<p><?php echo ((isset($config["qq3"]) && ($config["qq3"] !== ""))?($config["qq3"]):"暂无"); ?></p>
						<p><?php echo ((isset($config["name"]) && ($config["name"] !== ""))?($config["name"]):"虚拟网"); ?>QQ在线客服3</p>
					</div>
					<i></i>
				</div>
			</li>
			
			<li>
				<i class="pcicon1 iscion4"></i>
				<div class="pcicon1box">
					<div class="iscionbox">
						<p>返回顶部</p>
					</div>
					<i></i>
				</div>
			</li>
		</ul>
	</div>
    <script type="text/javascript"> 
		$(function(){
			$(".pcicon1").on("mouseover",function(){
				$(this).addClass("lbnora").next(".pcicon1box").css({"width":"148px"});
			}).on("mouseout",function(){
				$(this).removeClass("lbnora").next(".pcicon1box").css("width","0px");
			});
			$(".iscion4").on("click",function(){
				$("html, body").animate({
					scrollTop: 0
				})
			});

			var objWin;
			$("#opensq").on("click",function(){
				var top = window.screen.height/2 - 250;
				var left = window.screen.width/2 - 390;
				var target = "http://p.qiao.baidu.com//im/index?siteid=8050707&ucid=18622305"; 
				var cans = 'width=780,height=550,left='+left+',top='+top+',toolbar=no, status=no, menubar=no, resizable=yes, scrollbars=yes' ;

				if((navigator.userAgent.indexOf('MSIE') >= 0)&&(navigator.userAgent.indexOf('Opera') < 0)){
						//objWin = window.open ('','baidubridge',cans) ; 
						if (objWin === undefined || objWin === null || objWin.closed) { 
							objWin = window.open (target,'baidubridge',cans) ; 
						}else { 
							objWin.focus();
						}
				}else{
					var win = window.open('','baidubridge',cans );
					if (win.location.href == "about:blank") {
					    //窗口不存在
					    win = window.open(target,'baidubridge',cans);
					} else {
					    win.focus();
					}
				}
				return false;

			})
		})
		
	</script>
<!--top end-->

<script>
$(".myhome").hover(function(){
	$(".mywallet_list").show();	
},function(){
	$(".mywallet_list").hover(function(){
		$(".mywallet_list").show();	
	},function(){
		$(".mywallet_list").hide();	
	});
	$(".mywallet_list").hide();
});
</script>

<style>
.greenfont{ color:#039904;}
.coin_footer{ clear:both; padding-top:20px;}
</style>

    <script type="text/javascript"> 
		$(function(){
			$(".pcicon1").on("mouseover",function(){
				$(this).addClass("lbnora").next(".pcicon1box").css({"width":"148px"});
			}).on("mouseout",function(){
				$(this).removeClass("lbnora").next(".pcicon1box").css("width","0px");
			});
			$(".iscion4").on("click",function(){
				$("html, body").animate({
					scrollTop: 0
				})
			});

			var objWin;
			$("#opensq").on("click",function(){
				var top = window.screen.height/2 - 250;
				var left = window.screen.width/2 - 390;
				var target = "http://p.qiao.baidu.com//im/index?siteid=8050707&ucid=18622305"; 
				var cans = 'width=780,height=550,left='+left+',top='+top+',toolbar=no, status=no, menubar=no, resizable=yes, scrollbars=yes' ;

				if((navigator.userAgent.indexOf('MSIE') >= 0)&&(navigator.userAgent.indexOf('Opera') < 0)){
						//objWin = window.open ('','baidubridge',cans) ; 
						if (objWin === undefined || objWin === null || objWin.closed) { 
							objWin = window.open (target,'baidubridge',cans) ; 
						}else { 
							objWin.focus();
						}
				}else{
					var win = window.open('','baidubridge',cans );
					if (win.location.href == "about:blank") {
					    //窗口不存在
					    win = window.open(target,'baidubridge',cans);
					} else {
					    win.focus();
					}
				}
				return false;

			})
		})
		
	</script>
<!--top end-->
<div class="bg_w" style="width: 100%; height: 86px;">
<div class="autobox">
         <div class="all_coin_price">
            <div class="all_coin_show"><a href=""><img src="<?php echo ($liCurrency["currency_logo"]); ?>" style="float:left; width:50px;  margin-right:5px;" /><span><?php echo ($liCurrency['currency_name']); ?>(<?php echo ($liCurrency['currency_mark']); ?>)</span><em></em></a></div>
            <div class="all_coin_list"><div class="all_coin_box"><ul id="all_coin">
			<?php if(is_array($listCurrency)): foreach($listCurrency as $key=>$vo): ?><li><a href="<?php echo U('Market/index',array('coin'=>$vo['currency_mark']));?>"><img src="<?php echo ($vo["currency_logo"]); ?>" style="float:left; width:50px; margin-right:5px;" /><div class="all_coin_name"><p><?php echo ($vo["currency_name"]); ?>(<?php echo ($vo['currency_mark']); ?>)</p><span>￥<?php echo ($vo["newPrice"]); ?></span></div></a></li><?php endforeach; endif; ?>
			</ul></div></div>
        </div>
        <dl class="all_coin_info">
            <dt id="market-price"><?php echo ((isset($liCurrency['newPrice']) && ($liCurrency['newPrice'] !== ""))?($liCurrency['newPrice']):0); ?></dt>
            <dd><p class="orange" id="market-vrc"><?php echo ((isset($liCurrency['maxPrice']) && ($liCurrency['maxPrice'] !== ""))?($liCurrency['maxPrice']):0); ?></p>最高价</dd>
            <dd><p class="greenfont" id="market-min" style="color:#039904"><?php echo ((isset($liCurrency['minPrice']) && ($liCurrency['minPrice'] !== ""))?($liCurrency['minPrice']):0); ?></p>最低价</dd>
            <dd><p id="market-buy"><?php echo ((isset($liCurrency['sellPrice']) && ($liCurrency['sellPrice'] !== ""))?($liCurrency['sellPrice']):0); ?></p>买一价</dd>
            <dd><p id="market-sell"><?php echo ((isset($liCurrency['buyPrice']) && ($liCurrency['buyPrice'] !== ""))?($liCurrency['buyPrice']):0); ?></p>卖一价</dd>
            <dd class="w150"><p id="market-sum"><?php echo ((isset($liCurrency['countNum']) && ($liCurrency['countNum'] !== ""))?($liCurrency['countNum']):0); ?></p>成交量</dd>
        </dl>
    </div>
</div>
</div>
<div class="list-tab-box">
    <ul class="list-tab">
        <!--<li style="margin:0;"><i class="arrow-tab"></i><a href="javascript:void(0);">交易维理币</a></li>-->
        <li class="on"><a href="javascript:void(0);"><i class="arrow-tab"></i><?php echo ($liCurrency['currency_name']); ?>行情</a></li>
        <!--<li><a href="javascript:void(0);"><i class="arrow-tab"></i>了解维理币</a></li>
        <li><a href="javascript:void(0);"><i class="arrow-tab"></i>评价维理币</a></li>-->
    </ul>
</div>
<!--头部结束-->
<div id="chart-control" data="vrc" class="tradeinfo" style="">
    <div class="autobox mt20 clear" id="Kline-change" style="margin-top:20px; "></div>
        <!--<div data-highcharts-chart="0" style="background-color: #fff;border:1px solid #ebebeb;padding:30px 20px 20px 10px;margin-bottom:20px;" id="graphbox"><div style="position: relative; overflow: hidden; width: 968px; height: 400px; text-align: left; line-height: normal; z-index: 0; left: 0.5px; top: 0px;" id="highcharts-0" class="highcharts-container"></div></div>-->
        <div class="autobox">
        <div class="left w690" style="position:relative; float:left; ">

            <!--行情图-->
            <script>
                document.write('<s'+'cript src="/js/depth.js?t='+Math.random()+'"></scr'+'ipt>');
            </script><script src="/Public/Home/js/depth.js"></script>
            <!--行情图结束-->
            <div class="clear">
                <h3>买卖盘</h3>
                <div style="border:1px solid #ebebeb;overflow: hidden;">
                    <table class="infotable first" style="float:left;width: 6%;" cellpadding="0" cellspacing="0">
                        <thead>
                        <tr>
                            <th>&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        </tr>
                        </thead>
                        <tbody id="infolist">
						
						<?php $__FOR_START_1180__=0;$__FOR_END_1180__=$count;for($i=$__FOR_START_1180__;$i < $__FOR_END_1180__;$i+=1){ ?><tr><td><?php echo ($i+1); ?></td></tr><?php } ?>
						
						
					
						</tbody>
                    </table>
                    <table class="infotable market" cellpadding="0" cellspacing="0">
                        <thead>
                        <tr>
                            <th width="30%">折合(￥)</th>
                            <th width="30%">买入量</th>
                            <th width="30%">买入价(￥)</th>
                        </tr>
                        </thead>
                        <tbody id="infobuylist"> 
						<!-- <?php echo ($vo["bili"]); ?> 是百分比 需要的那个值 写的时候直接写入就可以了 带符号% 循环中需要的-->
						<?php if(is_array($sell)): foreach($sell as $key=>$vo): ?><tr><td><span><?php echo ($vo['price'] * $vo['num']); ?><i style="font-style:normal;color:#999;"></i></span></td><td><span style="color:#e55600;"><?php echo ($vo["num"]); ?></span></td> <td> <span><?php echo ($vo["price"]); ?></span><span data-count="504.461" class="deepbar buy" style="margin-top:-10px; width: <?php echo ($vo["bili"]); ?>;"></span></td>  </tr><?php endforeach; endif; ?>
						</tbody>

                    </table>
                    <table class="infotable market last" cellpadding="0" cellspacing="0">
                        <thead>
                        <tr>
                            <th width="33.3333%">卖出价(￥)</th>
                            <th width="33.3333%">卖出量</th>
                            <th width="33.3333%">折合(￥)</th>
                        </tr>
                        </thead>
                        <tbody id="infoselllist">
						<!-- <?php echo ($vo["bili"]); ?> 是百分比 需要的那个值 写的时候直接写入就可以了 带符号%  下面foreach 循环中需要的-->
						<?php if(is_array($buy)): foreach($buy as $key=>$vo): ?><tr><td><span><?php echo ($vo["price"]); ?></span></td><td><span style="color:#690;"><?php echo ($vo["num"]); ?></span></td> <td><span><?php echo ($vo['price'] * $vo['num']); ?><i style="font-style:normal;color:#999;"></i></span><span data-count="1000" class="deepbar sell" style="margin-top:-10px; width: <?php echo ($vo["bili"]); ?>;"></span></td> </tr><?php endforeach; endif; ?>
                    
                        </tbody>

                    </table>
                </div>

            </div>
        </div>

        <div class="right w290" style="float:right;">
            <h3>最新成交</h3>
            <table class="infotable turnover" cellpadding="0" cellspacing="0">
                <thead>
                <tr>
                    <th width="33.33333%">时间</th> 
                    <th width="33.33333%">价格</th>
                    <th width="33.33333%">数量</th>
                </tr>
                </thead>
                <tbody id="turnover">
				<?php if(is_array($deal)): foreach($deal as $key=>$vo): ?><tr><td><?php echo (date("H:i:s",$vo["add_time"])); ?></td><?php if(($vo['type']) == "sell"): ?><td class="red"><?php else: ?><td class="greenfont"><?php endif; echo ($vo["price"]); ?></td><td><?php echo ($vo["num"]); ?></td></tr><?php endforeach; endif; ?>
				</tbody>

            </table>
        </div>
        </div>



    <!--联系方式-->
    
</div>
<script>

$(function () {
	$.get('/Home/Market/getMarket',function(data){
		 $('#Kline-change').highcharts({
        chart: {
            type: 'areaspline'
        },
        title: {
            text: ''
        },
        legend: {
            layout: 'vertical',
            align: 'left',
            verticalAlign: 'top',
            x: 150,
            y: 100,
            floating: true,
            borderWidth: 1,
            backgroundColor: '#FFFFFF'
        },
        xAxis: {
            categories: data['price'],
        
        },
        yAxis: {
            title: {
                text: '<?php echo ($liCurrency['currency_mark']); ?>'
            }
        },
        tooltip: {
            shared: true,
            valueSuffix: ' CNY'
        },
        credits: {
            enabled: false
        },
        plotOptions: {
            areaspline: {
                fillOpacity: 0.5
            }
        },
        series: [{
            name: '买单',
            data: data['buy']
        }, {
            name: '卖单',
            data: data['sell']
        }]
    });
		
	})
   
});
</script>
    
<!--footer start-->
<style>
.rightwidth{ width:340px;}
</style>
<!--footer start-->

<div class="coin_footer" style="position:relative;">
	<div class="coin_hint">

		<h2><?php echo ((isset($info_one4["title"]) && ($info_one4["title"] !== ""))?($info_one4["title"]):"风险提示"); ?></h2>
		<p><?php echo ($config["risk_warning"]); ?></p>
	</div>
	<div class="coin_footerbar">
		<div class="coin_footer_nav clearfix">
			<div class="coin_nav coin_copy left">
				<p><a href="<?php echo U('Index/index');?>"><img style=" height:55px;" src="<?php echo ($config["logo"]); ?>"></a></p>
			</div>
			<div class="coin_nav left">
				<h2><?php echo ((isset($config["name"]) && ($config["name"] !== ""))?($config["name"]):"虚拟币"); ?>团队</h2>
				<ul>
					<li><a href="<?php echo U('Index/index');?>"><?php echo ((isset($config["name"]) && ($config["name"] !== ""))?($config["name"]):"虚拟币"); ?></a></li>
				<?php if(is_array($team)): $i = 0; $__LIST__ = $team;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Art/details',array('team_id'=>$vo['article_id']));?>" target="_blank" class="left"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
			<div class="coin_nav left">
				<h2>帮助中心</h2>
				<ul>
                <?php if(is_array($help)): $i = 0; $__LIST__ = $help;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Help/index',array('id'=>$vo['id']));?>" target="_blank" class="left"><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
			<div class="coin_nav coin_nav02 left">
				<h2 class="clearfix"><span class="left">联系我们</span><a href="http://weibo.com/<?php echo ($config["weibo"]); ?>" target="_blank" class="coin_sina left"></a><!--<a href="#" id="coin_weixin" class="coin_wei left"></a>--></h2>
				<ul>
					<li>客服电话：<?php echo ((isset($config["tel"]) && ($config["tel"] !== ""))?($config["tel"]):"暂无"); ?></li>
					<li>客服QQ：<?php echo ((isset($config["qq1"]) && ($config["qq1"] !== ""))?($config["qq1"]):"暂无"); ?></li>
					<li><a href="mailto:<?php echo ($config['email']); ?>">客服邮箱：<?php echo ((isset($config["email"]) && ($config["email"] !== ""))?($config["email"]):"暂无"); ?></a></li>
					<li><a href="mailto:<?php echo ($config['business_email']); ?>">业务合作：<?php echo ((isset($config["business_email"]) && ($config["business_email"] !== ""))?($config["business_email"]):"暂无"); ?></a></li>
				</ul>
			</div>
			<div class="coin_nav coin_nav02 left rightwidth" style="position:relative;">
              <div style="float:left; padding-top:25px; padding-left:10px;"><img style=" width:100px;" src="<?php echo ($config['weixin']); ?>"/></div>
              <div style=" float:left; padding-left:10px;">
				<p class="coin_phone400"><?php echo ((isset($config["tel"]) && ($config["tel"] !== ""))?($config["tel"]):"暂无"); ?></p>
				<p class="coin_phoneqq"><a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($config['qq1']); ?>&site=qq&menu=yes" target="_blank">在线客服</a></p>
				<p>工作日:9-19时 节假日:9-18时</p>
               </div>
				<div class="group" style="left:12px;margin-top: 40px">
					<ul class="qq_all" style="    margin-left: 10px;">
						<li><a style="flont:left; " href="javascript:void(0)"><?php echo ((isset($config["name"]) && ($config["name"] !== ""))?($config["name"]):"虚拟币"); ?>官方群<img style="margin-top:5px;" src="/Public/Home/images/xiala.png"></a>
							<ul style="margin-left: 105px;">
								<li><?php echo ((isset($config["name"]) && ($config["name"] !== ""))?($config["name"]):"虚拟币"); ?>官方1群 <?php echo ((isset($config["qqqun1"]) && ($config["qqqun1"] !== ""))?($config["qqqun1"]):"暂无"); ?></li>
								<li><?php echo ((isset($config["name"]) && ($config["name"] !== ""))?($config["name"]):"虚拟币"); ?>官方2群 <?php echo ((isset($config["qqqun2"]) && ($config["qqqun2"] !== ""))?($config["qqqun2"]):"暂无"); ?></li>
								<li><?php echo ((isset($config["name"]) && ($config["name"] !== ""))?($config["name"]):"虚拟币"); ?>官方3群 <?php echo ((isset($config["qqqun3"]) && ($config["qqqun3"] !== ""))?($config["qqqun3"]):"暂无"); ?></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
<div class="footer_aq">
	<p><?php echo ((isset($config["copyright"]) && ($config["copyright"] !== ""))?($config["copyright"]):"暂无"); ?></p>
	<p><?php echo ((isset($config["record"]) && ($config["record"] !== ""))?($config["record"]):"暂无"); ?></p>
	<ul class="footerSafety clearfix">
        <li class="safety02"><a href="http://net.china.com.cn/" target="_blank"></a></li>
        <li class="safety03"><a href="http://webscan.360.cn/index/checkwebsite/?url=<?php echo ($config['localhost']); ?>" target="_blank"></a></li>
        <li class="safety04"><a href="http://www.cyberpolice.cn/wfjb/" target="_blank"></a></li>
    </ul>
</div>
<div id="weixin" style="position:absolute; bottom:88px; left:50%; margin-left:170px; display:block;"><!--<img src="<?php echo ($config["logo"]); ?>">--></div>
<script>
	$('#coin_weixin').mouseover(function(){
		$('#weixin').show();
	}).mouseout(function(){
		$('#weixin').hide();
	});
</script>
<!--footer end-->
<script type="text/javascript" src="/Public/Home/js/gotop.js"></script>
<script type="text/javascript" src="/Public/Home/js/link.js"></script>
<script type="text/javascript" src="/Public/Home/js/slides.js"></script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?0ab4db557b96d841137861e0740d1e0a";
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(hm, s);
})();
</script>



</div></body></html>
<!--footer end-->
<script>
$(".myhome").hover(function(){
	$(".mywallet_list").show();	
},function(){
	$(".mywallet_list").hover(function(){
		$(".mywallet_list").show();	
	},function(){
		$(".mywallet_list").hide();	
	});
	$(".mywallet_list").hide();
});
</script>
<script>
$(".all_coin_show").hover(function(){
	$(".all_coin_list").show();	
},function(){
	$(".all_coin_list").hover(function(){
		$(".all_coin_list").show();	
	},function(){
		$(".all_coin_list").hide();	
	});
	$(".all_coin_list").hide();
});
</script>