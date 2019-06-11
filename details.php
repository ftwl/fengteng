<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>江苏峰腾网络科技有限公司</title>
        <meta name="description" content="A demo landing page for agencies or product oriented businesses built using Shards, a free, modern and lightweight UI toolkit based on Bootstrap 4.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSS Dependencies -->
        <link rel="stylesheet" href="templates/default/style/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <link href="templates/default/style/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="templates/default/style/shards.min.css">
        <link rel="stylesheet" href="templates/default/style/shards-extras.min.css">
        <link rel="stylesheet" href="templates/default/style/about.css">
        <link rel="stylesheet" href="templates/default/style/parterner.css">
        <script src="templates/default/js/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="templates/default/js/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="templates/default/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        <script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
        <style type="text/css">
          .iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap}
          .iw_poi_content {font:12px arial,sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}
        </style>
    </head>
    <body class="shards-app-promo-page--2">
      <!-- Welcome Section -->
      <div class="container nav-h">
          <!-- Navigation -->
          <nav class="navbar navbar-expand-lg navbar-dark pt-4 px-0">
            <a class="navbar-brand mr-5" href="#">
              <img src="templates/default/images/logo.png" class="mr-2" alt="Shards - Agency Landing Page">
              	推一下 App
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="#">首页 <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">产品介绍</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">关于我们</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">合作伙伴</a>
                </li>
              </ul>
              <!-- Social Icons -->
              <!-- <ul class="header-social-icons navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="#"><i class="fa fa-twitter"></i></a>
                </li>
              </ul> -->
            </div>
          </nav>
          <!-- / Navigation -->
        </div> <!-- .container -->
    
      <div class="banner">
          <img class="img-responsive" src="templates/default/images/banner.jpg" />
      </div>
      
      <div class="subscribe section bg-white py-4">
        <div class="wp">
            <h3 class="g-tit-w">商家详情 <span class="en">DETAILS</span></h3>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="details-info">
                  <p>商户名称:<a>外婆家</a></p>
                  <p>联系人:<a>张三</a></p>
                  <p>手机:<a>15152887777</a></p>
                  <p>地址:中南城A座</a></p>
              </div>
            </div>
            <div class="col-md-12">
              <!--百度地图容器-->
                <div style="width:100%;height:300px;border:#ccc solid 1px;" id="dituContent"></div>
            </div>
          </div>
        </div>
      </div>
   
      <!-- Footer Section -->
          <footer>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container footer-bg">
            <div class="row">
              <div class="col-md-3 col-sm-12" style="text-align:center;">
                <a class="navbar-brand" href="#">江苏峰腾网络科技有限公司</a>
                <a class="navbar-brand com-info" href="#">服务热线:400-6188-776</a>
                <a class="navbar-brand com-info" href="#">邮箱:fengteng@tuiyixia.com.cn</a>
                <a class="navbar-brand com-info" href="#">地址:江苏省南通市崇川区星光耀广场17A 1115号</a>
              </div>
            </div>
            <button class="navbar-toggler footer-btn" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">首页 <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">产品服务</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">关于我们</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">合作伙伴</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </footer>
      <!-- / Footer Section -->
      <!-- JavaScript Dependencies -->
      <script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
        addMarker();//向地图中添加marker
    }
    
    //创建地图函数：
    function createMap(){
        var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
        var point = new BMap.Point(120.924999,31.938144);//定义一个中心点坐标
        map.centerAndZoom(point,12);//设定地图的中心点和坐标并将地图显示在地图容器中
        window.map = map;//将map变量存储在全局
    }
    
    //地图事件设置函数：
    function setMapEvent(){
        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
        map.enableScrollWheelZoom();//启用地图滚轮放大缩小
        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
        map.enableKeyboard();//启用键盘上下左右键移动地图
    }
    
    //地图控件添加函数：
    function addMapControl(){
        //向地图中添加缩放控件
	var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
	map.addControl(ctrl_nav);
        //向地图中添加缩略图控件
	var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
	map.addControl(ctrl_ove);
        //向地图中添加比例尺控件
	var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
	map.addControl(ctrl_sca);
    }
    
    //标注点数组
    var markerArr = [{title:"南通星光耀广场",content:"南通星光耀广场<br/>联系方式：15152887777",point:"120.894824|31.971914",isOpen:1,icon:{w:21,h:21,l:0,t:0,x:6,lb:5}}
		 ];
    //创建marker
    function addMarker(){
        for(var i=0;i<markerArr.length;i++){
            var json = markerArr[i];
            var p0 = json.point.split("|")[0];
            var p1 = json.point.split("|")[1];
            var point = new BMap.Point(p0,p1);
			var iconImg = createIcon(json.icon);
            var marker = new BMap.Marker(point,{icon:iconImg});
			var iw = createInfoWindow(i);
			var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
			marker.setLabel(label);
            map.addOverlay(marker);
            label.setStyle({
                        borderColor:"#808080",
                        color:"#333",
                        cursor:"pointer"
            });
			
			(function(){
				var index = i;
				var _iw = createInfoWindow(i);
				var _marker = marker;
				_marker.addEventListener("click",function(){
				    this.openInfoWindow(_iw);
			    });
			    _iw.addEventListener("open",function(){
				    _marker.getLabel().hide();
			    })
			    _iw.addEventListener("close",function(){
				    _marker.getLabel().show();
			    })
				label.addEventListener("click",function(){
				    _marker.openInfoWindow(_iw);
			    })
				if(!!json.isOpen){
					label.hide();
					_marker.openInfoWindow(_iw);
				}
			})()
        }
    }
    //创建InfoWindow
    function createInfoWindow(i){
        var json = markerArr[i];
        var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
        return iw;
    }
    //创建一个Icon
    function createIcon(json){
        var icon = new BMap.Icon("http://api.map.baidu.com/lbsapi/creatmap/images/us_mk_icon.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
        return icon;
    }
    
    initMap();//创建和初始化地图
</script>
    </body>
   </html>