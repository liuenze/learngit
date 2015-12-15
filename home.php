<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>国际骑牛大赛</title>
<link rel="stylesheet" type="text/css" href="src/css/pub.css">
<link rel="stylesheet" type="text/css" href="src/css/home.css">
<script src="src/js/home.js"></script>
</head>

<body>
	
    <div id="headbg1"></div>
    <div id="headbg2"></div>
    
    <div id="headArea">
    	<a id="link_ticket" href="XXXXXXXX"></a>
        <div id="menuArea">
        	<!--在当前栏目的元素内加current属性来表示当前栏目-->
        	<div class="menuItemWrapper">
            	<a class="menuItem" href="home.php" current>首页</a>
            </div>
        	<div class="menuItemWrapper" hasSubMenu>
            	<a class="menuItem">骑牛百科</a>
                <div class="subMenuItemWrapper">
                    <?php 
                        // header("content-type:text/html;charset=utf-8");

                        mysql_connect("localhost","root","123");
                        mysql_select_db("test");
                        mysql_query("set names utf8");

                        $sql2="select * from t1 order by id";
                        $absult=mysql_query($sql2);
                        

                    while($arr=mysql_fetch_assoc($absult)){
                        echo "<a class='subMenuItem' href='qiyuan.php?pathname={$arr['pathname']}'>{$arr['name']}</a>";
                    }
                    ?>
            		<!-- <a class="subMenuItem" href="qiyuan.php">骑牛起源</a>
            		<a class="subMenuItem" href="content.html">赛事规则</a>
            		<a class="subMenuItem" href="content.html">得分评判</a>
            		<a class="subMenuItem" href="content.html">骑牛装备</a>
            		<a class="subMenuItem" href="content.html">成为骑士</a>
            		<a class="subMenuItem" href="content.html">赛事计分</a>
            		<a class="subMenuItem" href="content.html">竞技赛场</a>
            		<a class="subMenuItem" href="content.html">裁判</a>
            		<a class="subMenuItem" href="content.html">最佳新秀</a>
            		<a class="subMenuItem" href="content.html">巡回赛</a> -->
                </div>
            </div>
        	<div class="menuItemWrapper" hasSubMenu>
            	<a class="menuItem">骑手与公牛</a>
                <div class="subMenuItemWrapper">
                    <?php 
                    $sql3="select * from t2 order by id";
                    $sbsult=mysql_query($sql3);
                    while($arr2=mysql_fetch_assoc($sbsult)){
                        echo "<a class='subMenuItem' href='qishou.php?pathname={$arr2['pathname']}'>{$arr2['name']}</a>";
                    }
                     ?>
            		<!-- <a class="subMenuItem" href="content.html">成为骑手</a>
            		<a class="subMenuItem" href="content.html">公牛护理</a>
            		<a class="subMenuItem" href="content.html">受伤公牛</a>
            		<a class="subMenuItem" href="content.html">公牛医疗</a>
            		<a class="subMenuItem" href="content.html">骑手保护</a>
            		<a class="subMenuItem" href="content.html">骑手资料</a>
            		<a class="subMenuItem" href="content.html">公牛资料</a> -->
                </div>
            </div>
        	<div class="menuItemWrapper">
            	<a class="menuItem" href="CPBR.php">CPBR赛程</a>
            </div>
        	<div class="menuItemWrapper" hasSubMenu>
            	<a class="menuItem">新闻追击</a>
                <div class="subMenuItemWrapper">
            		<a class="subMenuItem" href="tupian.php">图片</a>
            		<a class="subMenuItem" href="shipin.php">视频</a>
            		<a class="subMenuItem" href="xinwengao.php">新闻稿</a>
                </div>
            </div>
        	<div class="menuItemWrapper" hasSubMenu>
            	<a class="menuItem">嘉年华</a>
                <div class="subMenuItemWrapper">
            		<a class="subMenuItem" href="qingdao.php">青岛嘉年华</a>
            		<a class="subMenuItem" href="jinan.php">济南嘉年华</a>
                </div>
            </div>
        	<div class="menuItemWrapper">
            	<a class="menuItem" href="jingcai.php">精彩瞬间</a>
            </div>
        	<div class="menuItemWrapper">
            	<a class="menuItem" href="about.php">关于我们</a>
            </div>
        </div>
    </div>
    
    <div id="footArea">
    	<div id="footAreaContent">
        	<span id="footAreaText">版权所有 鑫牛国际<br/>网站备案号 123123123</span>
        </div>
    </div>
    
    <!--内容部分自此开始-->
    
    <div id="contentArea">
    
    	<div class="contentRow">
        	<div id="bannerPicArea">
            	<span id="picWrapper">
                    <?php 
                    $sql6="select * from homeslides";
                    $result2=mysql_query($sql6);
                    while($arr4=mysql_fetch_assoc($result2)){
                        echo "<a href='{$arr4['imgid']}'><img class='bannerPicItem' src='{$arr4['imgid']}' infoText='{$arr4['name']}' /></a>";
                    }
                     ?>
               <!--  	
                	<a href="XXXXX"><img class="bannerPicItem" src="tempSrc/QQ截图20140430145119.png" infoText="请问您放假请问您疯狂青蛙金福南" /></a>
                	<a href="XXXXX"><img class="bannerPicItem" src="tempSrc/QQ截图20140430145119.png" infoText="八九十帮抽奖啊说不定就" /></a>
                	<a href="XXXXX"><img class="bannerPicItem" src="tempSrc/QQ截图20140430145119.png" infoText="穿那双年卡精神可嘉" /></a>
                	<a href="XXXXX"><img class="bannerPicItem" src="tempSrc/QQ截图20140430145119.png" infoText="阿萨帝去汉武帝氰化物" /></a> -->
                </span>
                <div id="infoTipArea">
                	<div id="infoText"></div>
                    <div id="infoTips">
                    	<!--<div class="infoTipItem"></div>-->
                    </div>
                </div>
            </div>
            <div id="ad1">
                <?php
                $sql7="select * from adver1";
                $result3=mysql_query($sql7);
                while($arr5=mysql_fetch_assoc($result3)){
                    echo "<a href='{$arr5['imgid']}'><img src='{$arr5['imgid']}' /></a>";
                } 
                
                 ?>
            	
            </div>
        </div>
        
        <div class="contentRow">
            <div id="newsArea">
            	<div class="areaBanner">
                	<div class="areaBannerTitle">新闻</div>
                    <a class="areaBannerMore" href="xinwengao.php">更多</a>
                </div>
                <div class="areaContent">
                    <?php 
                    $sql4="select * from t4 order by id desc limit 10";
                    $absult=mysql_query($sql4);
                    while($arr3=mysql_fetch_assoc($absult)){
                        echo "<a class='newsItem' href='shownews.php?name={$arr3['name']}'>";
                        echo "<span class='newsTime'>";
                        echo date("Y-m-d");
                        echo "</span>";
                        echo "<span class='newsTitle'>{$arr3['name']}</span>";
                        echo "</a>";
                    }
                     ?>
                	
                	<!-- <a class="newsItem" href="XXXXXXXXXXXXXX">
                    	<span class="newsTime">05-11</span>
                    	<span class="newsTitle">新闻标题新闻标题新闻标题新闻标题新闻标题新闻标题</span>
                    </a>
                	<a class="newsItem" href="XXXXXXXXXXXXXX">
                    	<span class="newsTime">05-11</span>
                    	<span class="newsTitle">新闻标题新闻标题新闻标题新闻标题新闻标题新闻标题</span>
                    </a>
                	<a class="newsItem" href="XXXXXXXXXXXXXX">
                    	<span class="newsTime">05-11</span>
                    	<span class="newsTitle">新闻标题新闻标题新闻标题新闻标题新闻标题新闻标题</span>
                    </a>
                	<a class="newsItem" href="XXXXXXXXXXXXXX">
                    	<span class="newsTime">05-11</span>
                    	<span class="newsTitle">新闻标题新闻标题新闻标题新闻标题新闻标题新闻标题</span>
                    </a>
                	<a class="newsItem" href="XXXXXXXXXXXXXX">
                    	<span class="newsTime">05-11</span>
                    	<span class="newsTitle">新闻标题新闻标题新闻标题新闻标题新闻标题新闻标题</span>
                    </a>
                	<a class="newsItem" href="XXXXXXXXXXXXXX">
                    	<span class="newsTime">05-11</span>
                    	<span class="newsTitle">新闻标题新闻标题新闻标题新闻标题新闻标题新闻标题</span>
                    </a>
                	<a class="newsItem" href="XXXXXXXXXXXXXX">
                    	<span class="newsTime">05-11</span>
                    	<span class="newsTitle">新闻标题新闻标题新闻标题新闻标题新闻标题新闻标题</span>
                    </a>
                	<a class="newsItem" href="XXXXXXXXXXXXXX">
                    	<span class="newsTime">05-11</span>
                    	<span class="newsTitle">新闻标题新闻标题新闻标题新闻标题新闻标题新闻标题</span>
                    </a>
                	<a class="newsItem" href="XXXXXXXXXXXXXX">
                    	<span class="newsTime">05-11</span>
                    	<span class="newsTitle">新闻标题新闻标题新闻标题新闻标题新闻标题新闻标题</span>
                    </a> -->
                </div>
            </div>
            <div id="picsArea">
            	<div class="areaBanner">
                	<div class="areaBannerTitle">精彩图集</div>
                    <a class="areaBannerMore" href="tupian.php">更多</a>
                </div>
                <div class="areaContent">
                    <?php 
                    $sql5="select * from img order by id desc limit 6";
                    $absult=mysql_query($sql5);
                    while($arr4=mysql_fetch_assoc($absult)){
                        echo "<a class='picItem' href='showphotos.php?name={$arr4['name']}' photo>";
                        echo "<img src='{$arr4['address']}' class='picImage'>";
                        echo "<div class='picItemInfo'>{$arr4['name']}</div>";        
                        echo "</a>";
                    }
                     ?>
                	<!-- <a class="picItem" href="XXXX" photo>
                    	<img src="tempSrc/QQ截图20140430145119.png" class="picImage">
                        <div class="picItemInfo">
                        	图集标题图集标题图集标题图集标题图集标题图集标题
                        </div>
                    </a>
                	<a class="picItem" href="XXXX" photo>
                    	<img src="tempSrc/QQ截图20140430145119.png" class="picImage">
                        <div class="picItemInfo">
                        	图集标题图集标题图集标题图集标题图集标题图集标题
                        </div>
                    </a>
                	<a class="picItem" href="XXXX" photo>
                    	<img src="tempSrc/QQ截图20140430145119.png" class="picImage">
                        <div class="picItemInfo">
                        	图集标题图集标题图集标题图集标题图集标题图集标题
                        </div>
                    </a>
                	<a class="picItem" href="XXXX" photo>
                    	<img src="tempSrc/QQ截图20140430145119.png" class="picImage">
                        <div class="picItemInfo">
                        	图集标题图集标题图集标题图集标题图集标题图集标题
                        </div>
                    </a>
                	<a class="picItem" href="XXXX" photo>
                    	<img src="tempSrc/QQ截图20140430145119.png" class="picImage">
                        <div class="picItemInfo">
                        	图集标题图集标题图集标题图集标题图集标题图集标题
                        </div>
                    </a>
                	<a class="picItem" href="XXXX" photo>
                    	<img src="tempSrc/QQ截图20140430145119.png" class="picImage">
                        <div class="picItemInfo">
                        	图集标题图集标题图集标题图集标题图集标题图集标题
                        </div>
                    </a> -->
                </div>
            </div>
        </div>
        
        <div class="contentRow">
        	<div id="riderData">
            	<div class="areaBanner">
                	<div class="areaBannerTitle">骑手资料</div>
                    <a class="areaBannerMore" href="ziliao.php">更多</a>
                </div>
                <div class="areaContent">
                    <?php 
                    $sql="select * from qishou order by id";
                    $result=mysql_query($sql);
                    while($arr=mysql_fetch_assoc($result)){
                        echo "<a class='riderDataItem' href='{$arr['imgid']}'>";
                        echo "<img src='{$arr['imgid']}' class='riderImage' />";
                        echo "<div class='riderInfo'>{$arr['name']}</div>";
                        echo "</a>";
                    }
                    ?>
                	
                	<!-- <a class="riderDataItem" href="XXXXXXXXX">
                    	<img src="tempSrc/QQ截图20140430145119.png" class="riderImage" />
                        <div class="riderInfo">rider name name</div>
                    </a>
                	<a class="riderDataItem" href="XXXXXXXXX">
                    	<img src="tempSrc/QQ截图20140430145119.png" class="riderImage" />
                        <div class="riderInfo">rider name name</div>
                    </a>
                	<a class="riderDataItem" href="XXXXXXXXX">
                    	<img src="tempSrc/QQ截图20140430145119.png" class="riderImage" />
                        <div class="riderInfo">rider name name</div>
                    </a>
                	<a class="riderDataItem" href="XXXXXXXXX">
                    	<img src="tempSrc/QQ截图20140430145119.png" class="riderImage" />
                        <div class="riderInfo">rider name name</div>
                    </a>
                	<a class="riderDataItem" href="XXXXXXXXX">
                    	<img src="tempSrc/QQ截图20140430145119.png" class="riderImage" />
                        <div class="riderInfo">rider name name</div>
                    </a>
                	<a class="riderDataItem" href="XXXXXXXXX">
                    	<img src="tempSrc/QQ截图20140430145119.png" class="riderImage" />
                        <div class="riderInfo">rider name name</div>
                    </a> -->
                </div>
            </div>
        </div>
        
        <div class="contentRow">
        	<div id="weiboArea">
            	<div class="areaBanner">
                	<div class="areaBannerTitle">官方</div>
                    <a class="areaBannerMore" href="XXXXXXXXXx">更多</a>
                </div>
                <div class="areaContent">
            		<iframe src="http://www.baidu.com"></iframe>
                </div>
            </div>
            <div id="ad2">
                <?php
                $sql8="select * from adver2";
                $result4=mysql_query($sql8);
                while($arr6=mysql_fetch_assoc($result4)){
                    echo "<a href='{$arr6['imgid']}'><img src='{$arr6['imgid']}' /></a>";
                }                
                ?>
<!--             	<a href="XXXXXXXXXXXX"><img src="tempSrc/QQ截图20140430145119.png" /></a> -->
            </div>
        </div>
        
        <div class="contentRow">
        	<div id="ad3">
                <div class="areaContent">
                    <?php
                    $sql9="select * from adver3";
                    $result5=mysql_query($sql9);
                    while($arr7=mysql_fetch_assoc($result5)){
                        echo "<a class='ad3Item' href='{$arr7['imgid']}'>";
                        echo "<img src='{$arr7['imgid']}' class='ad3ItemImage' />";
                        echo "</a>";
                    }                
                    ?>
<!--                 	<a class="ad3Item" href="XXXXXXXXX">
                    	<img src="tempSrc/QQ截图20140430145119.png" class="ad3ItemImage" />
                    </a>
                	<a class="ad3Item" href="XXXXXXXXX">
                    	<img src="tempSrc/QQ截图20140430145119.png" class="ad3ItemImage" />
                    </a>
                	<a class="ad3Item" href="XXXXXXXXX">
                    	<img src="tempSrc/QQ截图20140430145119.png" class="ad3ItemImage" />
                    </a>
                	<a class="ad3Item" href="XXXXXXXXX">
                    	<img src="tempSrc/QQ截图20140430145119.png" class="ad3ItemImage" />
                    </a>
                	<a class="ad3Item" href="XXXXXXXXX">
                    	<img src="tempSrc/QQ截图20140430145119.png" class="ad3ItemImage" />
                    </a>
                	<a class="ad3Item" href="XXXXXXXXX">
                    	<img src="tempSrc/QQ截图20140430145119.png" class="ad3ItemImage" />
                    </a>
                	<a class="ad3Item" href="XXXXXXXXX">
                    	<img src="tempSrc/QQ截图20140430145119.png" class="ad3ItemImage" />
                    </a> -->
                </div>
            </div>
        </div>
        
    </div>

</body>
</html>
