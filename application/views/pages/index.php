<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" href="res/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #banner{
            float: left;
            height:7em;
            width:100%;
            padding-top:1em;
            color: #ffffff;
            background: #6195c8;
        }
        #bs-navbar{
            float: left;
            width:100%;
            background: #dbdbdb;
        }
        #bs-navbar li{
            float: left;
            padding:4px 20px;
        }
    </style>
    <title>三才签到系统</title>
</head>
<body>
<div class="container">
    <div id="banner">
        <div id="banner_left">
            <h2><b>正定三才家具市场展会签到系统</b></h2>
        </div>
        <div>

        </div>
    </div>

            <nav id="bs-navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="../getting-started/" onclick="_hmt.push(['_trackEvent', 'docv3-navbar', 'click', 'V3导航-起步'])">主页</a>
                    </li>
                    <li>
                        <a href="../getting-started/" onclick="_hmt.push(['_trackEvent', 'docv3-navbar', 'click', 'V3导航-起步'])">签到</a>
                    </li>
                    <li class="active">
                        <a href="../css/" onclick="_hmt.push(['_trackEvent', 'docv3-navbar', 'click', 'V3导航-全局CSS样式'])">录入</a>
                    </li>
                    <li>
                        <a href="../components/" onclick="_hmt.push(['_trackEvent', 'docv3-navbar', 'click', 'V3导航-组件'])">用户信息管理</a>
                    </li>
                    <li>
                        <a href="../javascript/" onclick="_hmt.push(['_trackEvent', 'docv3-navbar', 'click', 'V3导航-JavaScript插件'])">签到信息管理</a>
                    </li>
                    <li>
                        <a href="../customize/" onclick="_hmt.push(['_trackEvent', 'docv3-navbar', 'click', 'V3导航-定制'])">账号管理</a>
                    </li>
                    <li><a href="http://expo.bootcss.com" onclick="_hmt.push(['_trackEvent', 'docv3-navbar', 'click', 'V3导航-网站实例'])" target="_blank">签到时间管理</a></li>
                </ul>
            </nav>
</div>
</body>
</html>