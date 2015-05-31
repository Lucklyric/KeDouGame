<?php 
/**
 * This file is part of 

.
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the MIT-LICENSE.txt
 * Redistributions of files must retain the above copyright notice.

 * Implemented by Xinyao Sun 
 */
if(!function_exists('is_mobile'))
{
    function is_mobile()
    {
        //php判断客户端是否为手机
        $agent = $_SERVER['HTTP_USER_AGENT'];
        return (strpos($agent,"NetFront") || strpos($agent,"iPhone") || strpos($agent,"MIDP-2.0") || strpos($agent,"Opera Mini") || strpos($agent,"UCWEB") || strpos($agent,"Android") || strpos($agent,"Windows CE") || strpos($agent,"SymbianOS"));
    }
}
?>
<!doctype html>

<html>
	<head>
		<meta charset="utf-8">
		<title>游游</title>
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="../bootstrap-3.3.4-dist/css/bootstrap.min.css">

		<!-- Optional theme -->
<!--		<link rel="stylesheet" href="../bootstrap-3.3.4-dist/css/bootstrap-theme.min.css">-->
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; minimum-scale=1.0; user-scalable=0;" />		
    <meta name="apple-mobile-web-app-capable" content="YES">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
	   <link rel="apple-touch-icon" href="/images/apple-touch-icon.png"/>
		<link rel="image_src" href="/images/fb-image.jpg" / >
	</head>
	<body>
		<!-- Modal -->
<div id="myModal" tabindex="-1" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">欢迎</h4>
      </div>
      <div class="modal-body">
<div >
				<h2>玩法介绍</h2>
				<p>直接打字聊天!<br />
			</div>
        <div class="form-group">
  <label for="usr">昵称:</label>
  <input type="text" class="form-control" id="nickName">
</div>
		<label class="radio-inline"><input checked id = "rMale" value="rMale"type="radio" name="sex">男生</label>
		<label class="radio-inline"><input id = "rFemale" value="rFemale"type="radio" name="sex">女生</label>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" id="welcomConfirm">确认</button>
      </div>
    </div>

  </div>
</div>
		
		<canvas id="canvas"></canvas>
		
		<div id="ui">
			<div id="fps"></div>
		
			<input id="chat" type="text" />
			<div id="chatText"></div>
			<h1>聊天</h1>
		<?php if(!is_mobile()){?>
			
			<aside id="info">
			
			<section id="wtf">
			
				
			</section>
			</aside>
			<?php }?>
<!--            <aside id="frogMode">
                <h3>Frog Mode</h3>
                <section id="tadpoles">
                    <h4>Tadpoles</h4>
                    <ul id="tadpoleList">
                    </ul>
                </section>
                <section id="console">
                    <h4>Console</h4>
                </section>
            </aside>-->
		
			<div id="cant-connect">
				与服务器断开连接了。您可以重新刷新页面。
			</div>
			<div id="unsupported-browser">
				<p>
					您的浏览器不支持 <a rel="external" href="http://en.wikipedia.org/wiki/WebSocket">WebSockets</a>.
					推荐您使用以下浏览器
				</p>
				<ul>										
					<li><a rel="external" href="http://www.google.com/chrome">Google Chrome</a></li>
					<li><a rel="external" href="http://apple.com/safari">Safari 4</a></li>
					<li><a rel="external" href="http://www.mozilla.com/firefox/">Firefox 4</a></li>
					<li><a rel="external" href="http://www.opera.com/">Opera 11</a></li>
				</ul>
				<p>
					<a href="#" id="force-init-button">仍然浏览!</a>
				</p>
			</div>
			
		</div>
		
		<script src="/js/lib/parseUri.js"></script> 
		<script src="/js/lib/modernizr-1.5.min.js"></script>
		<script src="/js/jquery.min.js"></script>
		<script src="/js/lib/Stats.js"></script>
		<script src="../bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
		
		<script src="/js/App.js"></script>
		<script src="/js/Model.js"></script>
		<script src="/js/Settings.js"></script>	
		<script src="/js/Keys.js"></script>
		<script src="/js/WebSocketService.js"></script>
		<script src="/js/Camera.js"></script>
		
		<script src="/js/Tadpole.js"></script>
		<script src="/js/TadpoleTail.js"></script>
		
		<script src="/js/Message.js"></script>
		<script src="/js/WaterParticle.js"></script>
		<script src="/js/Arrow.js"></script>
		<script src="/js/formControls.js"></script>
		
		<script src="/js/Cookie.js"></script>
		<script src="/js/main.js"></script>

		
	</body>
</html>
